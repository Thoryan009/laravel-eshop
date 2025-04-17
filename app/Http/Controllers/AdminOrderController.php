<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function  manage()
    {
        $this->orders = Order::all();
        return view('admin.order.manage', ['orders' => $this->orders]);
    }

    public function detail($id)
    {
        $this->order = Order::find($id);
        $this->customer = Customer::where('id',  $this->order->customer_id)->first();
        $this->orderDetails = OrderDetail::where('order_id', $id)->get();
        return view('admin.order.detail', [
            'order' => $this->order,
            'customer' => $this->customer,
            'orderDetails' => $this->orderDetails
        ] );
    }
}
