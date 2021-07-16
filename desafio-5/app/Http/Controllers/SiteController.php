<?php

namespace App\Http\Controllers;

use Corcel\Model\Post;
use Corcel\Model\Taxonomy;
use Illuminate\Http\Request;

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

    public function blog(Request $request)
    {
        $posts = Post::type('post')->published()->where(function ($query) use ($request) {
            if (isset($request->pesquisa))
                $query->where('post_title', 'LIKE', '%' . $request->pesquisa . '%');
            if (isset($request->categoria))
                $query->taxonomy('category', $request->categoria);
        })->newest()->paginate(9);


        $categories = Taxonomy::where('taxonomy', 'category')->with('posts')->get();

        return view(
            'pages.blog',
            [
                'posts' => $posts,
                'categories' => $categories
            ]
        );
    }
}
