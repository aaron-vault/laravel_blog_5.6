<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('welcome', compact('posts'));
    }
}
