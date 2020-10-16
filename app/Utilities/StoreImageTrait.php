<?php
 
namespace App\Utilities;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

trait StoreImageTrait
{
    public function verifyAndStoreImage(Request $request, $dir)
    {
        $file = $request->image;
        if (!$file) {
            return response()->json(array("error" => 'Image file not found, please upload an image'), 404);
        }
        $path = Storage::disk('public')->putFile($dir.'', $file);
        
        $thumbnail_file = $request->imageThumbnail;
        if (!$thumbnail_file) {
            return response()->json(array("error" => 'Cropped image not found, please crop image'), 404);
        }
        $thumbnail_path = Storage::disk('public')->putFile($dir.'/thumbnails', $thumbnail_file);
        
        return ['path' => $path, 'thumbnail_path' => $thumbnail_path];
    }
}
