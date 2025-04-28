<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\Products;
use App\Models\Categories;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Products $products, Request $request)
    {
        $query = $products->with(['photo']);

        if ($request->has('category')) {
            $query->where('id_category', $request->category);
        }

        if ($request->has('brand')) {
            $query->where('id_brand', $request->brand);
        }

        $produtos = $query->paginate(25);

        $categories = Categories::withCount('products')
            ->orderBy('name', 'asc')
            ->get();

        $brands = Brands::withCount('products')
            ->orderBy('name', 'asc')
            ->get();

        return view('site.ShopPage', compact('produtos', 'categories', 'brands'));

    }


    public function show(Products $products, $id)
    {
        $product = new ProductsController();
        $product = $product->show($products, $id);
        return view('site.ShopDetail', compact('product'));
        //return response()->json($product, $status = 200);
    }
}
