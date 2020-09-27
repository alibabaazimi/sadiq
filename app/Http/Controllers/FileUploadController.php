<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Carbon;

use App\Image;

class FileUploadController extends Controller
{
    //

    public function profileUpload(Request $request)
    {
        $file = $request->file('image-file');
        //$file_name = "profile_" . auth()->user()->id . "_" . Carbon::now()->format('YmdHs');
        $path = Storage::disk('public')->putFile('user_profile', $file);
        $file_name = basename($path);
        $user = auth()->user();
        if (!$user->image) {
            $image = new Image;
            $image->path = $path;
            $user->image()->save($image);
        } else {
            $image = $user->image;
            Storage::delete($image->path);
            $image->path = $path;
            $image->save();
        }
        return response()->json(array("file" => 'storage/'.$path), 200);
    }

    public function postPhotoUpload(Request $request)
    {
        $file = $request->file('image-file');
        //$file_name = "profile_" . auth()->user()->id . "_" . Carbon::now()->format('YmdHs');
        
        $path = Storage::disk('public')->putFile('post_photos', $file);
        
        // $file_name = basename($path);
        $post = new \App\Post;
        $post->title = $request->title;
        
        $post->desc = $request->desc;
        $post->amount = $request->amount;
        $post->price = $request->price;
        $post->unit_id = $request->unit_id;
        $post->category_id = $request->category_id;

        $post->posted_by = 1;//$request->user()->id;

        $post->save();
        if (!$post->image) {
            $image = new Image;
            $image->path = $path;
            $post->image()->save($image);
        } else {
            $image = $post->image;
            Storage::delete($image->path);
            $image->path = $path;
            $image->save();
        }
        return $post;
        return response()->json(array("file" => 'storage/'.$path), 200);
    }







    public function test()
    {
        $user = \App\User::find(1);
        $image =  $user->image;
        echo $image->path;
        echo "<img src='". asset('storage/'.$image->path) ."'>";
    }
}
