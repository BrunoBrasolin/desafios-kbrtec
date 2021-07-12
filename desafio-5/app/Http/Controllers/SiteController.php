<?php

namespace App\Http\Controllers;

use Corcel\Model\Post;

class SiteController extends Controller
{
    public function Home()
    {
        $posts = Post::type('post')->published()->newest()->get();
        return view('pages.home', ['posts' => $posts]); 
    }
}
