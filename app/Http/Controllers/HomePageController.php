<?php

namespace App\Http\Controllers;

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
        return view('products');
    }

    public function contactus()
    {
        return view('contactus');
    }
}
