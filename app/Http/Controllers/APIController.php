<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function products()
    {
        return response()-> json(Product::all());
    }

    public function categories()
    {
        return response()-> json(Category::all());
    }
}
