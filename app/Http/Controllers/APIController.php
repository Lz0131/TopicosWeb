<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function products($categoryId = null)
    {
        $products = is_null($categoryId)?
        Product::with("category")->get():
        Product::with("category")->where('category_id', $categoryId)->get();

        

    /*    // Obtener el ID de la categoría del request (puede ser opcional)
    $categoryId = $request->input('category_id');

    if ($categoryId) {
        // Filtrar productos por categoría
        $products = Product::where('category_id', $categoryId)->get();
    } else {
        // Obtener todos los productos si no se selecciona una categoría
        $products = Product::all();
    }*/

    return response()->json(["data" => $products]);
    }

    public function categories(Request $request)
    {
        $categoryName = $request->input("term");
        //die("Searching...". $categoryName);
        
        $categories = is_null($categoryName)? 
        Category::select('id','name as text')->get():
        Category::where('name','like', '%'.$categoryName.'%')->select('id','name as text')->get()
        ;
        return response()->json(["results" =>$categories]);
    }
}
