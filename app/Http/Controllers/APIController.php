<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function products(Request $request)
    {
        // Obtener el ID de la categoría del request (puede ser opcional)
    $categoryId = $request->input('category_id');

    if ($categoryId) {
        // Filtrar productos por categoría
        $products = Product::where('category_id', $categoryId)->get();
    } else {
        // Obtener todos los productos si no se selecciona una categoría
        $products = Product::all();
    }

    return response()->json(["data" => $products]);
    }

    public function categories()
    {
        return response()-> json(Category::all());
    }
}
