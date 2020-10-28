<?php

namespace App\Services;

use Illuminate\Support\Facades\File; 
use Image;

class ImageService {
    
    /**
     * Upload image
     *
     */
    public function uploadImage ($image, $name , $path)
    {
        $imagename = 'avatar-'.time().'-'.$name.'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path($path);
        
        $processingImg = $this->processingImage($image);
        
        if (!$save = $this->saveImage($processingImg, $destinationPath, $imagename)) {
            return abort('500');
        }
        return $path.$imagename;

    }

    /**
     * Processing image
     *
     */ 
    public function processingImage ($image)
    {
        $thumb_img = Image::make($image->getRealPath())->crop(300, 300);
        return $thumb_img;
    }

    /**
     * Save image
     *
     */
    public function saveImage ($image, $path, $name)
    {
        return $image->save($path.$name,80);       
    }
}