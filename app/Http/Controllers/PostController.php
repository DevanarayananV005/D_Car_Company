<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPost(Request $request){
   $incomingfields=$request->valiadet([
    'title'=>'required',
        'body'=>'required',
    ]);
    $incomingfields['title']=strip_tags($incomingfields['title']);
    $incomingfields['body']=strip_tags($incomingfields['body']);
    $incomingfields['user_id']=auth()->id();
    Post::create($incomingfields);
    return redirect('/');
}

}
