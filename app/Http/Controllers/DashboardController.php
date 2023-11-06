<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function indexProducts() {
        $products = Product::all();
        return view('dashboard.products.index', [
            'products' => $products
        ]);
    }

    public function indexCreateProducts() {
        return view('dashboard.products.create');
    }

    public function createProduct(Request $request)
    {
        $request->validate([
            'photo' => ['required', 'max:2048', 'mimes:png,jpg'],
            'title' => ['required'],
            'description' => ['required']
        ]);


        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = md5(now() . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
        }

        $data = [
            'title' => $request->title,
            'slug' => strtolower(preg_replace('/\s+/', '_', $request->title)),
            'photo' => $fileName,
            'description' => $request->description
        ];

        $create = Product::create($data);
        if ($create) {
            $file->move(public_path('assets/products/'), $fileName);
            return redirect()->route('products.index');
        }


    }
    public function deleteProduct($id)
    {
        $products = Product::find($id);

        if (!$products) {
            return redirect()->route('products.index');
        }

        File::delete(public_path('assets/products/'. $products->photo));
        $products->deleteForce();

        return redirect()->route('products.index');


    }
    public function indexEditProduct($slug)
    {
        $product = Product::where('slug', $slug)->first();

        if (!$product) return redirect()->route('products.index');

        return view('dashboard.products.edit', [
            'product' => $product,
        ]);
    }

    public function editProduct(Request $request, $id)
    {
        $request->validate([
            'title' => ['required'],
            'description' => ['required']
        ]);

        $product = Product::find($id);

        if (!$product) return redirect()->route('products.index');

        $data = [
            'title' => $request->title,
            'description' => $request->description,
        ];
        $product->update($data);

        return redirect()->route('products.index');
    }
}
