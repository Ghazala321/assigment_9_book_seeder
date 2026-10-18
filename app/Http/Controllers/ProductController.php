<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
   
    public function index()
    {
        $products = Product::all(); // Database se sab products nikal lo
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }


    public function store(Request $request)
    {
        
        $request->validate([
            'name'  => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048' 
        ]);

       
        $imagePath = $request->file('image')->store('products', 'public');

        // Database mein record save karein
        Product::create([
            'name'  => $request->name,
            'price' => $request->price,
            'image' => $imagePath,
        ]);

       
        return redirect()->route('products.index')->with('success', 'Product aur Image kamiyabi se save ho gaye!');
    }
}