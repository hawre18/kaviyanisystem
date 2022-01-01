<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
    public function index()
    {
        $comments=Comment::with('user','product')->orderBy('created_at','desc')->paginate(30);
        return view('v1.index.admin.comment.index',compact(['comments']));
    }

    public function show($id)
    {
        $comment=Comment::with('user')->whereId($id)->first();
        return view('v1.index.admin.comment.show',compact('comment'));
    }
    public function action(Request $request,$id)
    {
        if ($request->has('action')){
            if ($request->input('action')=='approved'){
                $comment=Comment::findorfail($id);
                $comment->status=1;
                $comment->save();
            }else{
                if($request->has('action')){
                    $comment=Comment::findorfail($id);
                    $comment->status=0;
                    $comment->save();
                }
            }
            return redirect('/admin/comments');

        }

    }
    public function delete($id)
    {
        try{
            $comment=Comment::findorfail($id);
            $comment->delete();
            Session::flash('comment_success','نظر با موفقیت حذف شد');
            return redirect('/admin/comment');}
        catch (\Exception $m) {
            Session::flash('comment_error', 'خطایی در حذف به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/admin/comment');
        }

    }
}
