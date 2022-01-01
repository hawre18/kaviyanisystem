<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\AttributeGroup;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use mysql_xdevapi\Exception;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::with('childrenRecursive','image')->where('parent_id',null)
            ->paginate(20);
        $index=0;
        return view('v1.index.admin.category.index',compact('categories','index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::with('childrenRecursive')->where('parent_id',null)
            ->get();
        return view('v1.index.admin.category.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest  $request)
    {

        try {
            $category=new Category();
            $category->name=$request->input('title');
            $category->parent_id=$request->input('category_parent');
            $category->image_id=$request->input('photo_id');;
            $category->save();
            Session::flash('category_success','دسته بندی با موفقیت ایجاد شد');
            return redirect('/admin/category');
        }catch (Exception $mesage){
            Session::flash('category_error','خطایی در ثبت به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/admin/category');
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories=Category::with('childrenRecursive')->where('parent_id',null)->get();
        $categoryData=Category::findorfail($id);
        return view('v1.index.admin.category.edit', compact('categories','categoryData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        try {
            $category=Category::with('image')->where('id',$id);
            $category->name=$request->input('title');
            $category->parent_id=$request->input('category_parent');
            $category->image_id=$request->input('photo_id');
            $category->save();
            Session::flash('category_success','دسته بندی با موفقیت آپدیت شد');
            return redirect('/admin/category');
        }catch (Exception $mesage){
            Session::flash('category_error','خطایی در آپدیت به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/admin/category');
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
            $category=Category::with('childrenRecursive')->where('id', $id)->first();
            if (count($category->childrenRecursive)>0) {
                Session::flash('error_category', 'دسته بندی '.$category->name.' دارای زیر دسته میباشد بنابراین حذف آن امکان پذیر نیست');
                return redirect('/category');
            }
            $category->delete();
            Session::flash('category_success', 'حذف با موفقیت انجام شد');
            return redirect('/admin/category');}
        catch (\Exception $m) {
            Session::flash('category_error', 'خطایی در حذف به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/admin/category');
        }
    }
    public function indexSetting($id)
    {
        $category=Category::findorfail($id);
        $attributeGroups=AttributeGroup::all();
        return view('v1.index.admin.category.index-settings',compact(['category','attributeGroups']));
    }
    public function saveSetting(Request $request,$id)
    {
        try{
            $category=Category::findorfail($id);
            $category->attributeGroups()->sync($request->attributeGroups);
            $category->save();
            Session::flash('category_success','عملیات با موفقیت انجام شد');
            return redirect()->to('category');
        }
        catch (\Exception $m){
            Session::flash('category_error','خطایی در ثبت به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/admin/category');
        }
    }
    public function apiIndex()
    {
        $categories=Category::with('childrenRecursive')
            ->where('parent_id',null)
            ->get();
        $response=[
            'categories'=>$categories
        ];
        return response()->json($response,200);

    }
    public function apiIndexAttribute(Request $request)
    {
        $categories=$request->all();
        $attributeGroup=AttributeGroup::with('attributeValue','categories')
            ->whereHas('categories',function ($q) use ($categories){
                $q->whereIn('categories.id',$categories);
            })->get();
        $response=[
            'attributes'=>$attributeGroup
        ];
        return response()->json($response,200);

    }
}
