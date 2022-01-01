<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use mysql_xdevapi\Exception;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides=Slide::with('image')->paginate(10);
        return view('v1.index.admin.slide.index',compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('v1.index.admin.slide.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try
        {
          $slide=new Slide();
          $slide->title=$request->input('title');
          $slide->text=$request->input('description');
          $slide->status=$request->input('status');
          $slide->image_id=$request->input('photo_id');
          $slide->save();
            Session::flash('slide_success','اسلاید با موفقیت ایجاد شد');
            return redirect('/admin/slides');
        }catch (Exception $mesage){
            Session::flash('slide_error','خطایی در ثبت به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/admin/slides');
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
        $slide=Slide::with('image')->findOrFail($id)->first();
        return view('v1.index.admin.slide.edit',compact('slide'));
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
            'text' => 'required',
            'photo_id' => 'required',
        ]);
        try{
            $slide=Slide::findorfail($id);
            $slide->title=$request->input('title');
            $slide->text=$request->input('description');
            $slide->status=$request->input('status');
            $slide->image_id=$request->input('photo_id');
            $slide->save();
            Session::flash('slide_success','اسلاید با موفقیت ویرایش شد');
            return redirect('/admin/slides');
        }
        catch (\Exception $m){
            Session::flash('slide_error','خطایی در ویرایش به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/admin/slides');
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
    public function action(Request $request,$id)
    {
        if ($request->has('action')){
            if ($request->input('action')=='approved'){
                $slide=Slide::findorfail($id);
                $slide->status=1;
                $slide->save();
            }else{
                if($request->has('action')){
                    $slide=Slide::findorfail($id);
                    $slide->status=0;
                    $slide->save();
                }
            }
            return redirect('/admin/slides');

        }

    }
    public function delete($id)
    {
        try{
            $slide=Comment::findorfail($id);
            $slide->delete();
            Session::flash('slides_success','اسلاید با موفقیت حذف شد');
            return redirect('/admin/slides');}
        catch (\Exception $m) {
            Session::flash('slides_error', 'خطایی در حذف به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/admin/slides');
        }

    }
}
