<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AttributeGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use mysql_xdevapi\Exception;

class AttributeGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attributeGroups=AttributeGroup::all();
        return view('v1.index.admin.attributegroup.index',compact('attributeGroups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('v1.index.admin.attributegroup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $attributegroup=new AttributeGroup();
            $attributegroup->name=$request->input('title');
            $attributegroup->save();
            Session::flash('attributegroup_success','عنوان ویژگی با موفقیت ثبت شد');
            return redirect('/admin/attributegroup');
        }
        catch (Exception $massage){
            Session::flash('attributegroup_error','ثبت ویژگی با خطا مواجه شد ');
            return redirect('/admin/attributegroup');
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
        $attributeGroup=AttributeGroup::findorfail($id);
        return view('v1.index.admin.attributegroup.edit',compact('attributeGroup'));
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
        try {
            $attributeGroup=AttributeGroup::findorfail($id);
            $attributeGroup->name=$request->input('title');
            $attributeGroup->save();
            Session::flash('attributegroup_success','عنوان ویژگی با موفقیت ویرایش شد');
            return redirect('/admin/attributegroup');
        }catch (Exception $massage){
            Session::flash('attributegroup_error','ویرایش ویژگی با خطا مواجه شد ');
            return redirect('/admin/attributegroup');
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
            $category=AttributeGroup::where('id', $id)->first();
            $category->delete();
            Session::flash('attributegroup_success', 'حذف با موفقیت انجام شد');
            return redirect('/admin/attributegroup');
        }
        catch (\Exception $m) {
            Session::flash('attributegroup_error', 'خطایی در حذف به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/admin/attributegroup');
        }
    }
}
