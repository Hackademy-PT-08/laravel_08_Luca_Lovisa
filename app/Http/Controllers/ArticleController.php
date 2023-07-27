<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArticleRequest;

class ArticleController extends Controller
{
    public function create () {
        return view('addArticles');
    }

    public function store (StoreArticleRequest $request) {

        $imageId=uniqid();

        $article= new Article;
        
        $article->title = $request->title;
        $article->content = $request->testo;

        if($request->file('immagine')){
            $article->image='image-article-'.$imageId.'.'.$request->file('immagine')->extension();
            $article->image_id = $imageId;
            $filename = 'image-article-'.$imageId.'.'.$request->file('immagine')->extension();
            $image=$request->file('immagine')->storeAs('public',$filename);
        } else {
            $article->image='';
            $article->image_id='';
        }
        $article->save();

        return redirect ('/');
    }

}
