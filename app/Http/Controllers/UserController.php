<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function posts()
    {
        $posts = Post::all();
        return view('welcome', compact('posts'));
    }
}
