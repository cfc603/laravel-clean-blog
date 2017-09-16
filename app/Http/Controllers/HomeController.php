<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index()
    {
        //
        if (Auth::check()) {
            $posts = Post::orderBy('created_at', 'desc')
                ->paginate(5);
        } else {
            $posts = Post::where('live', true)
                ->orderBy('created_at', 'desc')
                ->paginate(5);
        }
        return view('home', ['posts' => $posts]);
    }
}
