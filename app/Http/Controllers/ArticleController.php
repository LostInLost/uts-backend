<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index() {
        $articles = Article::all();
        return view('dashboard.articles.index', compact('articles'));
    }

    public function indexDetail($id) {
        $article = Article::find($id);
        return view('dashboard.articles.detail', compact('article'));
    }

    public function createIndex()
    {
        return view('dashboard.articles.create');
    }

    public function createArticle(Request $request)
    {
        // $user = User::find(Auth::user()->id);
        $request->validate([
            'file' => ['required', 'max:2048', 'mimes:png,jpg'],
            'title' => ['required'],
            'content' => ['required']
        ]);


        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = md5(now() . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
        }

        $data = [
            'title' => $request->title,
            'featured_image' => $fileName,
            'content' => $request->content
        ];

        $create = Article::create($data);
        if ($create) {
            $file->storeAs('articles', $fileName, 'public');
            return redirect()->route('articles.index');
        }


    }

    public function editIndex($id)
    {
        $article = Article::find($id);

        if (!$article) return redirect()->route('products.index');

        return view('dashboard.articles.edit', [
            'article' => $article,
        ]);
    }

    public function editArticle(Request $request, $id)
    {
        $validator = [
            'file' => ['required', 'max:2048', 'mimes:png,jpg'],
            'title' => ['required'],
            'content' => ['required']
        ];

        if (!$request->hasFile('file')) unset($validator['file']);
        $request->validate($validator);

        $article = Article::find($id);

        if (!$article) return redirect()->route('products.index');


        $data = [
            'title' => $request->title,
            'content' => $request->content,
        ];
        if ($request->hasFile('file')) {
            $oldFile = $article->featured_image;
            $file = $request->file('file');
            $fileName = md5(now() . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
            $data['featured_image'] = $fileName;
        }

        $update = $article->update($data);

        if ($update) {
            $file->storeAs('articles', $fileName, 'public');
            Storage::delete('public/articles/'. $oldFile);
            return redirect()->route('articles.index');
        }

        return redirect()->route('articles.index');
    }

    public function deleteArticle($id)
    {
        $article = Article::find($id);

        if (!$article) {
            return redirect()->route('articles.index');
        }

        Storage::delete('public/articles/'. $article->featured_image);
        $article->delete();

        return redirect()->route('articles.index');


    }
}
