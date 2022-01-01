<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AttributeGroup;
use App\Models\AttributeValue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AttributeValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attributeValues=AttributeValue::with('attributeGroup')->paginate(20);
        return view('v1.index.admin.attributevalue.index', compact('attributeValues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $attributeGroups=AttributeGroup::all();
        return view('v1.index.admin.attributevalue.create', compact('attributeGroups'));
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
            $attributevalue=new AttributeValue();
            $attributevalue->name=$request->input('title');
            $attributevalue->attributeGroup_id=$request->input('attributeGroup_id');
            $attributevalue->save();
            Session::flash('attribute-value','مقدار ویژگی با موفقیت ثبت شد');
            return redirect('/admin/attributevalue');
        }
        catch (\Exception $m){
            Session::flash('attribute_error','خطایی در ثبت به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/admin/attributesvalue');
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
        $attributeValues=AttributeValue::with('attributeGroup')->whereId($id)->first();
        $attributeGroups=AttributeGroup::all();
        return view('v1.index.admin.attributevalue.edit',compact('attributeValues','attributeGroups'));
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
            'title' => 'required|max:255',
            'attributeGroup_id' => 'required',
        ]);
        try{
            $attributevalue=AttributeValue::findorfail($id);
            $attributevalue->name=$request->input('title');
            $attributevalue->attributeGroup_id=$request->input('attributeGroup_id');
            $attributevalue->save();
            Session::flash('attribute-value_success','مقدار ویژگی با موفقیت بروز شد');
            return redirect('/admin/attributevalue');
        }
        catch (\Exception $m){
            Session::flash('attribute-value_error','خطایی در ,یرایش به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/admin/attributevalue');
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
            $attributevalue=AttributeValue::findorfail($id);
            $attributevalue->delete();
            Session::flash('attribute-value_success','مقدار ویژگی با موفقیت حذف شد');
            return redirect('/admin/attributes-value');}
        catch (\Exception $m) {
            Session::flash('attribute-value_error', 'خطایی در حذف به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/admin/attributes-value');
        }
    }
}
