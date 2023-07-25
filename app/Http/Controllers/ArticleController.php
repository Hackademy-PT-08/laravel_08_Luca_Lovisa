<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create () {
        return view('addArticles');
    }

    public function store (Request $request) {
        $article= new Article;

        $article->title = $request->title;
        $article->content = $request->testo;

        $article->save();

        return redirect ('/');
    }

}
