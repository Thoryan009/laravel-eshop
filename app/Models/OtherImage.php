<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use function Laravel\Prompts\select;

class OtherImage extends Model
{
    public static $otherImage, $image, $imageName, $imageUrl, $directory, $otherImages;

    public static function getImageUrl($image)
    {

            self::$image = $image;
            self::$imageName = self::$image->getClientOriginalName();
            self::$directory = 'upload/product_other_images/';
            self::$image->move(self::$directory, self::$imageName);
            self::$imageUrl = self::$directory.self::$imageName;
            return self::$imageUrl;


    }

    public static function newOtherImage( $id, $images)
    {
        foreach ($images as $image)
        {
            self::$otherImage = new OtherImage();
            self::$otherImage->product_id = $id;
            self::$otherImage->image = self::getImageUrl($image);
            self::$otherImage->save();
        }
    }

    public static function updateOtherImage($id, $images)
    {
        self::deleteOtherImage($id);
        self::newOtherImage( $id, $images);
    }

    public static function deleteOtherImage($id)
    {
        self::$otherImages = OtherImage::where('product_id', $id)->get();

        foreach (self::$otherImages as $otherImage)
        {
            if(file_exists($otherImage->image))
            {
                unlink($otherImage->image);
            }
            $otherImage->delete();
        }
    }


}
