<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function uploadPhoto(Request $request)
    {
        $uploadedFile=$request->file('file');
        $filename=time().$uploadedFile->getClientOriginalName();
        $original_name=$uploadedFile->getClientOriginalName();
        Storage::disk('local')->putFileas(
            'public/photos',$uploadedFile,$filename
        );
        $photo=new Image();
        $photo->originalName=$original_name;
        $photo->path=$filename;
        $photo->save();
        return response()->json([
            'photo_id'=>$photo->id
        ]);
    }
}
