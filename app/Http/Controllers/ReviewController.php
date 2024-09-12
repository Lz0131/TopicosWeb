<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;
use App\Models\Product;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($product_id)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required|max:100',
                'email' => 'required|email|max:50',
                'review' => 'required',
            ], [
                'name.required' => 'Proporciona nombre completo.',
                'email.max' => 'Email con máximo 50 caracteres.',
                'review.required' => 'Favor de escribir el mensaje.',
            ]);
            $review = new Reviews();
            $review->name = $request->input('name');
            $review->email = $request->input('email');
            $review->review = $request->input('review');
            $review->product_id = $request->input('product_id');
            $review->save();
            $product_id = $review->product_id;
            return redirect()->route('product_detail', ['id' => $product_id])->with('success', 'You review has beensent.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
