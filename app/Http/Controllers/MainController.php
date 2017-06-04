<?php

namespace App\Http\Controllers;

use App\posts;
use Illuminate\Http\Request;

class MainController extends Controller
{
	public function index()
	{
        $posts = posts::orderBy('id', 'DESC')->paginate(5);
		return view('pages.index', compact( 'posts'));
	}
	public function article($url = null){
	    $article = posts::where('url', $url)->first();
	    if($article->count()){
            return view('pages.article', compact('article'));
        }
        return redirect('/');
    }
}
