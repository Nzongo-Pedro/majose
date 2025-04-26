<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(Products $products)
    {
        $produtos = $products
            ->with(['brand', 'category', 'subcategory', 'gender', 'old', 'size', 'photo'])
            ->paginate(8);

        return view('site.HomePage', compact('produtos'));
        //return response()->json($produtos, $status = 200);
    }
}
