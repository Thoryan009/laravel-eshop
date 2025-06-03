<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use Cart;

class OrderDetail extends Model
{
    public static $orderDetail;
    public static function newOrderDetail($orderId)
    {
        foreach (Cart::content() as $item) {
            self::$orderDetail = new OrderDetail();
            self::$orderDetail->order_id         = $orderId;
            self::$orderDetail->product_id       = $item->id;
            self::$orderDetail->product_name     = $item->name;
            self::$orderDetail->product_price    = $item->price;
            self::$orderDetail->product_qty      = $item->qty;
            self::$orderDetail->save();

            Product::salesIncreament($item->id);
            Cart::remove($item->rowId);
        }
    }
}
