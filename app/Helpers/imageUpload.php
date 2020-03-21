<?php 

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

function imageUpload($request,  $model, $type)
{
    
    if($type == 'profile_image')
    {
        $request_name = 'my_profile_image';
        $max_size = "2048";
        $mimes = "jpeg,png,jpg,gif";
        $width = 280;
        $height = 280;
    }
    elseif($type == 'about_image') 
    {
        $request_name = 'my_about_image';
        $max_size = "2048";
        $mimes = "jpeg,png,jpg,gif";

        $width = 500;
        $height = 400;
    }

    // dd($model->{ $request_name });

    if($request->hasFile($request_name))
    {
        $request->validate([
            $request_name => 'image|mimes:'.$mimes.'|max:'. $max_size,
        ]);

        if (!Storage::disk('public')->exists($type)) {
            Storage::disk('public')->makeDirectory($type);
        }

        if($model->{ $request_name } != null)
        {
            Storage::disk('public')->delete( $type.'/'. $model->{ $request_name } );   
        }

        // Get the image
        $file = $request->file($request_name);
        $ext = $file->getClientOriginalExtension();
        $image = $type . uniqid() . time(). '.' . $ext;

        $path = "storage/". $type ."/" . $image;

        Image::make($file)->fit($width, $height)->save($path);
    }
    else 
    {
        $image = $model->{ $request_name };
    }

    return $image;

}