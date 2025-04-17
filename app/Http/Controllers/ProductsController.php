<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(Products $products)
    {
        $produtos = $products->with(['brand', 'category', 'subcategory', 'color', 'gender', 'old', 'size'])->get();

        return response()->json($produtos, $status = 200);
    }

    public function show(Products $products, $id = null)
    {
        $produtos = $products->with(['brand', 'category', 'subcategory', 'color', 'gender', 'old', 'size'])->find($id);

        return $produtos ? response()->json($produtos) : response()->json(['message' => 'produto não encontrado']);
    }

    public function delete(Request $request, Products $products)
    {

        $delete_product = $products->delete();

        return $delete_product ? response()->json(['message' => 'produto removido'], 201) : response()->json(['message' => 'erro ao remover'], 201);
    }
}
