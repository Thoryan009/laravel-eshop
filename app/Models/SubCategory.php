<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    public static $subCategory, $image, $imageName, $imageUrl, $directory;

    public static function getImageUrl($request)
    {
        if($request->file('image'))
        {
            self::$image = $request->file('image');
            self::$imageName = self::$image->getClientOriginalName();
            self::$directory = 'upload/subCategory_images/';
            self::$image->move(self::$directory, self::$imageName);
            self::$imageUrl = self::$directory.self::$imageName;
            return self::$imageUrl;

        }
    }


    public static function newSubCategory($request)
    {
        self::$subCategory = new SubCategory();
        self::$subCategory->category_id = $request->category_id;
        self::$subCategory->name = $request->name;
        self::$subCategory->image = self::getImageUrl($request);
        self::$subCategory->status = $request->status;
        self::$subCategory->description = $request->description;
        self::$subCategory->save();
    }

    public static function updateSubCategory($request , $subCategory)
    {
        self::$subCategory = SubCategory::find($subCategory->id);
        if ($request->file('image'))
        {
            self::$imageUrl = self::getImageURL($request);
        }
        else
        {
            self::$imageUrl = self::$subCategory->image;
        }
        self::$subCategory->category_id = $request->category_id;
        self::$subCategory->name        = $request->name;
        self::$subCategory->status      = $request->status;
        self::$subCategory->image       = self::$imageUrl;
        self::$subCategory ->description = $request->description;
        self::$subCategory->save();

    }

    public static function deleteSubCategory($subCategory)
    {
        self::$subCategory = SubCategory::find($subCategory->id);

        {
            if(file_exists($subCategory->image))
            {
                unlink($subCategory->image);
            }
            self::$subCategory->delete();
        }
    }



    public function category()
    {
        return $this->belongsTo(Category::class);
    }


}
