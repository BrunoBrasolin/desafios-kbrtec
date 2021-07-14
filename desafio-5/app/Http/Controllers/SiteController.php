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

    public function Sobre()
    {
        return view('pages.sobre');
    }

    public function FAQ()
    {
        $faq = Post::type('faq')->published()->get();

        return view('pages.faq', ['faq' => $faq]);
    }
}
