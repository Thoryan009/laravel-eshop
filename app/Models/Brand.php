<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public static $brand, $image, $imageName, $imageUrl, $directory;

    public static function getImageUrl($request)
    {
        if($request->file('image'))
        {
            self::$image = $request->file('image');
            self::$imageName = self::$image->getClientOriginalName();
            self::$directory = 'upload/brand_images/';
            self::$image->move(self::$directory, self::$imageName);
            self::$imageUrl = self::$directory.self::$imageName;
            return self::$imageUrl;

        }
    }


    public static function newBrand($request)
    {
        self::$brand = new Brand();
        self::$brand->name = $request->name;
        self::$brand->image = self::getImageUrl($request);
        self::$brand->status = $request->status;
        self::$brand->description = $request->description;
        self::$brand->save();
    }

    public static function updateBrand($request , $brand)
    {
        self::$brand = Brand::find($brand->id);
        if ($request->file('image'))
        {
            self::$imageUrl = self::getImageURL($request);
        }
        else
        {
            self::$imageUrl = self::$brand->image;
        }

        self::$brand->name        = $request->name;
        self::$brand->status      = $request->status;
        self::$brand->image       = self::$imageUrl;
        self::$brand ->description = $request->description;
        self::$brand->save();

    }

    public static function deleteBrand($brand)
    {
        self::$brand = Brand::find($brand->id);

        {
            if(file_exists($brand->image))
            {
                unlink($brand->image);
            }
            self::$brand->delete();
        }
    }


}
