<?php

namespace App\Http\Controllers;
use App\posts;
use Illuminate\Http\Request;

class MainController extends Controller
{
	public function index()
	{
	    //Postları sondan-başa olarak 5'li olarak ayırıyorum ve ana sayfaya yolluyorum
        $posts = posts::orderBy('post_id', 'DESC')->paginate(5);
		return view('pages.index', compact( 'posts'));
	}
	public function article($url = null){
        //Gelen yazının url'inden yazıyı buluyorum
	    $article = posts::where('url', $url)->first();
	    //eğer yazı varsa yorumuyla beraber fırlatıyorum
	    if($article->count()){
            //gelen yazının yorumunu alıyorum
            $comments = $article->comments;
            return view('pages.article', compact('article', 'comments'));
        }
        //yoksa ana sayfaya dönücek :))
        return redirect('/');
    }
}
