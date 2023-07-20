<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Http\Requests\UserStoreRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class OrderController extends Controller
{
    //
    function index()
    {
        $adminData = Admin::find(1);
        $orders = Order::latest()->get();
        return view('admin.Order.index', compact('orders', 'adminData'));
    }

    public function destroy(Order $order)
    {
        $order->delete();

        $notification = [
            'message' => 'Order Deleted Successfully!!!',
            'alert-type' => 'warning'
        ];

        return redirect()->route('order.index')->with($notification);

    }
}