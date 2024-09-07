<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class SiteController extends Controller
{
    public function index(){
        return view('e-commerce.index');
    }

    public function products($category_id = null){
        $products =(is_null($category_id)) ? 
        Product::paginate(12) : 
        Product::where('category_id', $category_id)->paginate(9);
        $categories = Category::all();

        return view('e-commerce.products', compact('products', 'categories'));
    }

    public function product_detail($product_id){
        $product = Product::find($product_id);
        return view('e-commerce.product-detail', compact('product'));
    }

    public function productBycategory(){
        // Opcion 1
        $cat = Category::find(1);
        $products = $cat->products;
        //Opcion 2
        $products2 = Category::find(1)->products;
        return view('e-commerce.products_by_category', compact('products'));
        //dd($products2);
        //die();
    }

    public function cart(){
        return view('e-commerce.cart-page');
    }

    public function checkout(){
        return view('e-commerce.checkout');
    }

    public function login(){
        return view('e-commerce.login');
    }

    public function my_account(){
        return view('e-commerce.my-account');
    }

    public function wishlist(){
        return view('e-commerce.wishlist-page');
    }

    public function contact(){
        return view('e-commerce.contact');
    }

    public function profile($username){
        return view('profile', ['username'=>$username]);
    }

    public function work(){
        return view('work');
    }

    public function about(){
        return view('about');
    }

    public function services(){
        return view('services');
    }

    public function blog(){
        return view('blog');
    }
}
