<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Product;
use Barryvdh\DomPDF\Facade\Pdf;
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

    public function articles()
    {
        $articles = Article::all();
        return view('articles', compact('articles'));
    }

    public function printArticles($id)
    {
        $articles = Article::find($id);
        $view = view('cetak_pdf', compact('articles'));
        $pdf = Pdf::loadHTML($view->render());
        $pdf->setOption([
            'isPhpEnabled' => true,
            'debugCss' => false,
            'isHtml5ParserEnabled' => true
        ]);
        return $pdf->stream();
    }

    public function detailArticle($id)
    {
        $article = Article::find($id);
        return view('detail_article', compact('article'));
    }

    public function contactus()
    {
        return view('contactus');
    }
}
