<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Coupon;
use Carbon\Carbon;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class CartPageController extends Controller
{

    public function myCartView()
    {
        $user= Auth::user();
        return view('frontend.frontend_layout.cart_page.mycart_view', compact('user'));
    }

    // public function showmyCartList()
// {

    //     $carts = Cart::content();
//     $cart_qty = Cart::count();
//     $cart_total = Cart::total();

    //     return response()->json([
//         'carts' => $carts,
//         'cart_qty' => $cart_qty,
//         'cart_total' => round($cart_total),
//     ], 200);
// }

    public function showmyCartList()
    {
        // $cartItems = session('cart.items', []); sua lai nhu duoi 
        $cartItems = session()->get('cart', []);
        $cartQty = count($cartItems);
        $cartTotal = 0;

        //var_dump($cartItems);
        foreach ($cartItems as $item) {
            $cartTotal += $item['price'] * $item['quantity'];
            //print_r($item['name']);
        }

        return response()->json([
            'carts' => $cartItems,
            'cart_qty' => $cartQty,
            'cart_total' => round($cartTotal),
        ], 200);
    }

    public function addQtyToCart($rowId)
    {
        $cartItems = session()->get('cart', []);
        if (array_key_exists($rowId, $cartItems)) {
            $cartItems[$rowId]['quantity'] += 1;
            session(['cart' => $cartItems]);


            return response()->json(['success' => 'Product Qty Incremented'], 200);
        }

        return response()->json(['error' => 'Invalid Cart Item'], 400);
    }

    public function reduceQtyFromCart($rowId)
    {
        $cartItems = session()->get('cart', []);
        if (array_key_exists($rowId, $cartItems)) {
            $cartItems[$rowId]['quantity'] -= 1;
            session(['cart' => $cartItems]);

            return response()->json(['success' => 'Product Qty Decremented'], 200);
        }

        return response()->json(['error' => 'Invalid Cart Item', 400]);

    }


    public function removeFromCart($rowId)
    {
        $cartItems = session()->get('cart', []);

        if (array_key_exists($rowId, $cartItems)) {
            unset($cartItems[$rowId]);

            session()->put('cart', $cartItems);

            return response()->json(['success' => 'Product Remove from Cart'], 200);
        }

        return response()->json(['error' => 'Product not found in Cart'], 404);
    }



}