<?php

namespace App\Http\Controllers;

use App\Helpers\CrudAjaxHelper;
use App\Http\Requests\StoreProductsRequests;
use App\Models\Brands;
use App\Models\Categories;
use App\Models\Colors;
use App\Models\Genders;
use App\Models\Olds;
use App\Models\Products;
use App\Models\Sizes;
use App\Models\SubCategories;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

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
        $datas = $request->all();

        $save_products = CrudAjaxHelper::store($datas, $products);

        if ($save_products->getStatusCode() === 201) {
            $responseData = $save_products->getData(true);
            //$responseData['redirect'] = route('curso.listar');

            return response()->json($responseData, 201);
        }
    }

    public function create()
    {
        $olds = Olds::all();
        $sizes = Sizes::all();
        $brands = Brands::all();
        $colors = Colors::all();
        $genders = Genders::all();
        $categories = Categories::all();
        $subcategories = SubCategories::all();

        return view(
            'admin.produtcs.register',
            compact(
                'olds',
                'sizes',
                'brands',
                'colors',
                'genders',
                'categories',
                'subcategories'
            )
        );
    }
}
