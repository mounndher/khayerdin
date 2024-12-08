<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


/** Handle file upload */

function handleUpload($inputName, $model=null){
    try{
        if(request()->hasFile($inputName)){
            if($model && File::exists(public_path($model->{$inputName}))) {
                File::delete(public_path($model->{$inputName}));
            }

            $file = request()->file($inputName);
            $fileName = rand().$file->getClientOriginalName();
            $file->move(public_path('/uploads'), $fileName);

            $filePath = "/uploads/".$fileName;

            return $filePath;
        }
    }catch(\Exception $e){
        throw $e;
    }

}


/** Delete file */

function deleteFileIfExist($filePath){
    try{
        if(File::exists(public_path($filePath))){
            File::delete(public_path($filePath));
        }
    }catch(\Exception $e){
        throw $e;
    }
}

/** get dynamic colors  */

function getColor($index){
    $colors = ['#558bff', '#fecc90', '#ff885e', '#282828', '#190844', '#9dd3ff'];

    return $colors[$index % count($colors)];
}

/** Set Sidebar Active  */

function setSidebarActive($route){
    if(is_array($route)){
        foreach($route as $r){
            if(request()->routeIs($r)){
                return 'active';
            }
        }
    }
}

function uploadMultipleImage(Request $request, string $inputName, string $path = '/uploads') : ?array
{
    if($request->hasFile($inputName)){

        $images = $request->{$inputName};

        $paths = [];

        foreach($images as $image){

            $ext = $image->getClientOriginalExtension();
            $imageName = 'media_' . uniqid(). '.' . $ext;

            $image->move(public_path($path), $imageName);
            $paths[] = $path . '/' . $imageName;
        }

        return $paths;
    }

    return null;
}



function deleteFile($path) : void {
    // Delete previous image from storage
    $exculudedFolder = '/default';

    if($path && File::exists(public_path($path)) && strpos($path, $exculudedFolder) !== 0){
        File::delete(public_path($path));
    }
}