<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('frontend.product_page.product', compact('product'));
    }

    public function index(Request $request)
    {
        // Get Categories:
        $categories = ProductCategory::all();

        // Get Products:
        $perPage = $request->show ?? 6;
        $sortBy = $request->sort_by ?? 'id';
        $search = $request->search ?? '';

        $products = Product::where('name', 'like', '%' . $search . '%');

        $products = $this->sortAndPagination($products, $sortBy, $perPage);

        return view('frontend.product_page.index', compact('categories','products'));
    }

    public function category($categoryName, Request $request)
    {
        // Get Categories:
        $categories = ProductCategory::all();

        // Get Products:
        $perPage = $request->show ?? 6;
        $sortBy = $request->sort_by ?? 'id';

        $products = ProductCategory::where('name', $categoryName)->first()->products->toQuery();

        $products = $this->sortAndPagination($products, $sortBy, $perPage);

        return view('frontend.product_page.index', compact('categories','products'));

    }

    public function sortAndPagination($products, $sortBy, $perPage)
    {
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
                $products = $products->orderByDesc('rating');
                break;
            default:
                $products = $products->orderBy('id');
        }

        $products = $products->paginate($perPage);

        $products -> appends(['sort_by' => $sortBy, 'show' => $perPage]);

        return $products; 

    }
}
