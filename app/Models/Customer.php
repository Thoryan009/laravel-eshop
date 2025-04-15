<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
   public static $customer, $image, $imageName, $imageUrl, $directory;


    public static function getImageUrl($request)
    {
        if($request->file('image'))
        {
            self::$image = $request->file('image');
            self::$imageName = self::$image->getClientOriginalName();
            self::$directory = 'upload/customer_images/';
            self::$image->move(self::$directory, self::$imageName);
            self::$imageUrl = self::$directory.self::$imageName;
            return self::$imageUrl;

        }
    }


    public static function newCustomer($request)
   {
       self::$customer = new Customer();

       self::$customer->name = $request->name;
       self::$customer->mobile = $request->number;
       self::$customer->email = $request->email;
       self::$customer->password = bcrypt($request->password);
       self::$customer->image = self::getImageUrl($request);
       self::$customer->save();
       return self::$customer;
   }
}
