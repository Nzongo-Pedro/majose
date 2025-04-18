<?php

namespace App\Http\Controllers;

use App\Helpers\CrudAjaxHelper;
use App\Http\Requests\StoreProductsRequests;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(Products $products)
    {
        $produtos = $products->with(['brand', 'category', 'subcategory', 'gender', 'old', 'size'])->get();

        return response()->json($produtos, $status = 200);
    }

    public function show(Products $products, $id = null)
    {
        $produtos = $products->with(['brand', 'category', 'subcategory', 'gender', 'old', 'size'])->find($id);

        return $produtos ? response()->json($produtos) : response()->json(['message' => 'produto não encontrado']);
    }

    public function showByCategory(Products $products, $id = null, $category = null)
    {
        $produtos = $products->with(['brand', 'category', 'subcategory', 'gender', 'old', 'size'])->where('id_category', $id)->first();

        return $produtos ? response()->json($produtos) : response()->json(['message' => 'produto não encontrado']);
    }

    public function showBySubcategory(Products $products, $id = null, $category = null)
    {
        $produtos = $products->with(['brand', 'category', 'subcategory', 'gender', 'old', 'size'])->where('id_subcategory', $id)->first();

        return $produtos ? response()->json($produtos) : response()->json(['message' => 'produto não encontrado']);
    }

    public function delete(Request $request, Products $products)
    {

        $delete_product = $products->delete();

        return $delete_product ? response()->json(['message' => 'produto removido'], 201) : response()->json(['message' => 'erro ao remover'], 201);
    }

    public function store(StoreProductsRequests $request, Products $products)
    {
        $datas = $request->validated();

        $save_products = CrudAjaxHelper::store($datas, $products);

        if ($save_products->getStatusCode() === 201) {
            $responseData = $save_products->getData(true);
            //$responseData['redirect'] = route('curso.listar');

            return response()->json($responseData, 201);
        }
    }
}
