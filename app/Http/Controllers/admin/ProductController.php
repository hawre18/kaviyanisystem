<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::paginate(10);
        return view('v1.index.admin.product.index',compact(['products']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands=Brand::all();
        return view('v1.index.admin.product.create',compact(['brands']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function generateSKU()
    {
        $number=mt_rand(1000,999999);
        if ($this->checkSKU($number)){
            return $this->generateSKU();
        }
        return (string)$number;
    }

    public function checkSKU($number)
    {
        return Product::where('sku',$number)->exists();
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:3|max:255',
            'slug' => 'required|min:3|max:255',
            'status' => 'required',
            'price' => 'required|numeric',
            'discount_price' => 'nullable',
            'short_description' => 'required|min:3|max:255',
            'long_description' => 'required|min:3',
            'brand' => 'required',
        ]);

        try{
            $newProduct=new Product();
            $newProduct->title=$request->title;
            $newProduct->sku=$this->generateSKU();
            $newProduct->slug=$request->slug;
            $newProduct->status=$request->status;
            $newProduct->price=$request->price;
            $newProduct->discountPrice=$request->discount_price;
            $newProduct->shortDescription=$request->short_description;
            $newProduct->longDescription=$request->long_description;
            $newProduct->brand_id=$request->brand;
            $newProduct->admin_id=Auth::guard('admin')->user()->id;
            $newProduct->countSells=0;
            $newProduct->save();
            $attributes=explode(',',$request->input('attributes')[0]);
            $photos=explode(',',$request->input('photo_id')[0]);
            $newProduct->images()->sync($photos);
            $newProduct->categories()->sync($request->categories);
            $newProduct->attributeValues()->sync($attributes);
            Session::flash('product_success','محصول با موفقیت ثبت شد');
            return redirect('/admin/products');
        }
        catch (\Exception $m){
            return $m;
            Session::flash('product_error','خطایی در ثبت به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/admin/products');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=Product::with('admin','brand','images')->whereId($id)->first();
        return view('v1.index.admin.product.show',compact(['product']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brands=Brand::all();
        $product=Product::with(['attributeValues','brand','categories','images'])->whereId($id)->first();
        return view('v1.index.admin.product.edit',compact(['brands',['product']]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'title' => 'required|min:3|max:255',
            'slug' => 'required|min:3|max:255',
            'status' => 'required',
            'price' => 'required|numeric',
            'discount_price' => 'nullable',
            'short_description' => 'required|min:3|max:255',
            'long_description' => 'required|min:3',
            'brand' => 'required',
        ]);

        try{
            $product=Product::findorfail($id);
            $count=$product->countSells;

            $product->title=$request->title;
            $product->slug=$request->slug;

            $product->status=$request->status;
            $product->price=$request->price;
            $product->discountPrice=$request->discountprice;
            $product->shortDescription=$request->short_description;
            $product->longDescription=$request->long_description;
            $product->brand_id=$request->brand;
            $product->admin_id=Auth::guard('admin')->user()->id;
            $product->countSells=$count;
            $product->save();
            $attributes=explode(',',$request->input('attributes')[0]);
            $photos=explode(',',$request->input('photo_id')[0]);
            $product->images()->sync($photos);
            $product->categories()->sync($request->categories);
            $product->attributeValues()->sync($attributes);
            Session::flash('product_success','محصول با موفقیت ویرایش شد');
            return redirect('/admin/products');
        }
        catch (\Exception $m){
            Session::flash('product_error','خطایی در ویرایش به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/admin/products');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function delete($id)
    {
        try{
            $product=Product::findorfail($id);
            $product->delete();
            Session::flash('product_success','محصول با موفقیت حذف شد');
            return redirect('/admin/products');
        }
        catch (\Exception $m){
            Session::flash('product_error','خطایی در حذف به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/admin/products');
        }
    }
}
