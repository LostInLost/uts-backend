<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function features()
    {
        return view('features');
    }

    public function products()
    {
        $products = Product::all();
        return view('products', [
            'products' => $products
        ]);
    }

    public function contactus()
    {
        return view('contactus');
    }
}
