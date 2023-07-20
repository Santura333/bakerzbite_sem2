<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\UserStoreRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class ProductAdminController extends Controller
{
    //
    function index()
    {
        $adminData = Admin::find(1);
        $products = Product::latest()->get();
        return view('admin.product.index', compact('products', 'adminData'));
    }

    public function destroy(Product $product)
    {
        $product->delete();

        $notification = [
            'message' => 'Product Deleted Successfully!!!',
            'alert-type' => 'warning'
        ];

        return redirect()->route('productAdmin.index')->with($notification);

    }
}