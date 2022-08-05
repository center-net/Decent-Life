<?php
namespace App\Traits;
use Illuminate\Http\Request;

trait UploadTrait {
    public function UploadImage(Request $request, $folderName, $file) {
        // $imageName =$request->file('image')->getClientOriginalName();
        $path = $request->file($file)->store($folderName, 'public');
        return $path;

    }
}
