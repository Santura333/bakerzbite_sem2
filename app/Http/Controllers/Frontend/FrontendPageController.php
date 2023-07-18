<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\Product;


class FrontendPageController extends Controller
{
    //

    public function productDeatil($id)
    {
        $product = Product::findOrFail($id);
        $user = Auth::user();

        //return response()->json($product);
        return view(
            'frontend.frontend_layout.product_page.product-page',
            compact(
                'product',
                'user'
            )
        );
    }

    public function productviewAjax($id)
    {
        $product = Product::findOrFail($id);
        return response()->json([
            'product' => $product
        ], 200);
    }


}