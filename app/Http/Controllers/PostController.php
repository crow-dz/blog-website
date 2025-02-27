<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Post;

class PostController extends Controller
{

    public function index(){

        return view("post.index",[
            "posts" =>Post::published()->latest('published_at')->  take(9)->get()
        ]);
    }
}
