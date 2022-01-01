<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands=Brand::with('image')->paginate(10);
        return view('v1.index.admin.brand.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('v1.index.admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $brand=new Brand();
            $brand->name=$request->input('title');
            $brand->description=$request->input('description');
            $brand->image_id=$request->input('photo_id');
            $brand->save();
            Session::flash('brand_success','برند با موفقیت ثبت شد');
            return redirect('/admin/brand');
        }
        catch (\Exception $m){
            Session::flash('brand_error','خطایی در ثبت به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/admin/brand');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand=Brand::with('image')->whereId($id)->first();
        return view('v1.index.admin.brand.edit',compact('brand'));
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
            'title' => 'required|unique:brands,name,' . $id .'|min:3|max:255',
            'description' => 'required',
            'photo_id' => 'required',
        ]);
        try{
            $brand=Brand::findorfail($id);
            $brand->name=$request->input('title');
            $brand->description=$request->input('description');
            $brand->image_id=$request->input('photo_id');
            $brand->save();
            Session::flash('brand_success','برند با موفقیت ویرایش شد');
            return redirect('/admin/brand');
        }
        catch (\Exception $m){
            Session::flash('brand_error','خطایی در ویرایش به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/admin/brand');
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
            $brand=Brand::findorfail($id);
            $brand->delete();
            Session::flash('brand_success','برند با موفقیت حذف شد');
            return redirect('/admin/brand');}
        catch (\Exception $m) {
            Session::flash('brand_error', 'خطایی در حذف به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/admin/brand');
        }

    }
}
