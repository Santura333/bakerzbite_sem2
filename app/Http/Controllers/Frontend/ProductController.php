<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::findOrFail($id);
        $user = Auth::user();

        return view('frontend.product_page.product', compact('product', 'user'));
    }

    public function index(Request $request)
    {
        // Get Categories:
        $categories = ProductCategory::all();
        $user = Auth::user();

        // Get Products:
        $perPage = $request->show ?? 6;
        $sortBy = $request->sort_by ?? 'id';
        $search = $request->search ?? '';

        $products = Product::where('name', 'like', '%' . $search . '%');

        $products = $this->sortAndPagination($products, $sortBy, $perPage);

        return view('frontend.product_page.index', compact('categories', 'products'));
    }

    public function category($categoryName, Request $request)
    {
        // Get Categories:
        $categories = ProductCategory::all();
        $user = Auth::user();

        // Get Products:
        $perPage = $request->show ?? 6;
        $sortBy = $request->sort_by ?? 'id';

        $products = ProductCategory::where('name', $categoryName)->first()->products->toQuery();

        $products = $this->sortAndPagination($products, $sortBy, $perPage);

        return view('frontend.product_page.index', compact('categories', 'products', 'user'));

    }

    public function sortAndPagination($products, $sortBy, $perPage)
    {
<<<<<<< Updated upstream
        switch ($sortBy)
        {
            case 'idup' :
                $products = $products->orderBy('id');
                break;
            case 'iddown' :
                $products = $products->orderByDesc('id');
                break;
            case 'nameup' :
                $products = $products->orderBy('name');
                break;
            case 'namedown' :
                $products = $products->orderByDesc('name');
                break;
            case 'priceup' :
                $products = $products->orderBy('price');
                break;
            case 'pricedown' :
                $products = $products->orderByDesc('price');
                break;
            case 'ratingup' :
                $products = $products->orderBy('rating');
                break;
            case 'ratingdown' :
=======

<<<<<<< HEAD
        switch ($sortBy) {
            case 'id':
                $products = $products->orderBy('id');
                break;
            case '-id':
                $products = $products->orderByDesc('id');
                break;
            case 'name':
                $products = $products->orderBy('name');
                break;
            case '-name':
                $products = $products->orderByDesc('name');
                break;
            case 'price':
                $products = $products->orderBy('price');
                break;
            case '-price':
                $products = $products->orderByDesc('price');
                break;
            case 'rating':
                $products = $products->orderBy('rating');
                break;
            case '-rating':
=======
        switch ($sortBy)
        {
            case 'idup' :
                $products = $products->orderBy('id');
                break;
            case 'iddown' :
                $products = $products->orderByDesc('id');
                break;
            case 'nameup' :
                $products = $products->orderBy('name');
                break;
            case 'namedown' :
                $products = $products->orderByDesc('name');
                break;
            case 'priceup' :
                $products = $products->orderBy('price');
                break;
            case 'pricedown' :
                $products = $products->orderByDesc('price');
                break;
            case 'ratingup' :
                $products = $products->orderBy('rating');
                break;
            case 'ratingdown' :
>>>>>>> 98ae8d837244c3ea9bc833d1ba07fe67fe73d136
=======
        switch ($sortBy)
        {
            case 'idup' :
                $products = $products->orderBy('id');
                break;
            case 'iddown' :
                $products = $products->orderByDesc('id');
                break;
            case 'nameup' :
                $products = $products->orderBy('name');
                break;
            case 'namedown' :
                $products = $products->orderByDesc('name');
                break;
            case 'priceup' :
                $products = $products->orderBy('price');
                break;
            case 'pricedown' :
                $products = $products->orderByDesc('price');
                break;
            case 'ratingup' :
                $products = $products->orderBy('rating');
                break;
            case 'ratingdown' :
>>>>>>> 98ae8d837244c3ea9bc833d1ba07fe67fe73d136
>>>>>>> Stashed changes
                $products = $products->orderByDesc('rating');
                break;
            default:
                $products = $products->orderBy('id');
        }

        $products = $products->paginate($perPage);

        $products->appends(['sort_by' => $sortBy, 'show' => $perPage]);

        return $products; 

    }
}