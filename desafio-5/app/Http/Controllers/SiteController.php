<?php

namespace App\Http\Controllers;

use Corcel\Model\Post;

class SiteController extends Controller
{
    public function home()
    {
        $posts = Post::type('post')->published()->newest()->get();
        return view('pages.home', ['posts' => $posts]);
    }

    public function sobre()
    {
        return view('pages.sobre');
    }

    public function faq()
    {
        $faq = Post::type('faq')->published()->get();

        return view('pages.faq', ['faq' => $faq]);
    }

    public function seja_parceiro()
    {
        return view('pages.seja_parceiro');
    }

    public function contato()
    {
        return view('pages.contato');
    }

    public function blog()
    {
        $posts = Post::type('post')->published()->newest()->paginate(9);
        return view('pages.blog', ['posts' => $posts]);
    }
}
