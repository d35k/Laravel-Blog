<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comments;
use App\posts;


class CommentsController extends Controller
{
    // Gelen form elemanlarını alıyorum ve Article'ın URL'ini de alıyorum ekstra olarak.
    public function post(Request $form, $articleUrl = ""){
        //gelen postu Article URL'den buluyorum
        $post = posts::where('url', $articleUrl)->first();
        //Post'un idsini çekiyorum
        $postId = $post->post_id;
        //Veritabanına gerekli alanları ekletiyorum
        Comments::create([
            "post_id" => $postId,
            "content" => $form['comment'],
            "author" => $form['author']
        ]);
        //Geri gönderiyorum.
        return back();
    }
}
