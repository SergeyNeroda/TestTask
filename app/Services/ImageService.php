<?php

namespace App\Services;

use Image;

class ImageService {
    
    //завантаження зображень 
    public function uploadImage ($image, $name , $path)
    {
        $imagename = 'avatar-'.time().'-'.$name.'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path($path);
        //dd($destinationPath);
        $processingImg = $this->processingImage($image);
        
        $save = $this->saveImage($processingImg, $destinationPath, $imagename);
       
        if ($save) {
            //link to image
            return $path.$imagename;
            //return $imagename;  
        } else {
            dd('error'); 
        }
    }

    //обробки зображень 
    public function processingImage ($image)
    {
        $thumb_img = Image::make($image->getRealPath())->crop(300, 300);
        return $thumb_img;
    }

    //збереження зображень
    public function saveImage ($image, $path, $name)
    {
        $image->save($path.$name,80);
        return true;       
    }
}