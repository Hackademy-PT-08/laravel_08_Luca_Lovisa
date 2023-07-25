<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
   public function index () {
        $getAllArticles=Article::all();


        return view('homepage',['articles'=>$getAllArticles]);
   }
}
