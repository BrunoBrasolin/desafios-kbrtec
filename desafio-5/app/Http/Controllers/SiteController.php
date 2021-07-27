<?php

namespace App\Http\Controllers;

use Corcel\Model\Post;
use Corcel\Model\Taxonomy;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        $posts = Post::type('post')->published()->newest()->take(10)->get();
        $descontos = Post::type('desconto')->published()->newest()->take(12)->get();

        return view(
            'pages.home',
            [
                'posts' => $posts,
                'descontos' => $descontos
            ]
        );
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
        })->newest()->paginate(9, ['*'], 'pagina');


        $categories = Taxonomy::where('taxonomy', 'category')->whereHas('posts', function ($query) {
            $query->where('post_type', '!=', 'desconto');
        })->with('posts')->get();

        return view(
            'pages.blog',
            [
                'posts' => $posts,
                'categories' => $categories
            ]
        );
    }

    public function blog_integra(String $slug)
    {
        $post = Post::type('post')->published()->slug($slug)->first();

        if (!$post) abort(404);

        $post_leia_mais = Post::type('post')->published()->where('id', '!=', $post->post_id)->newest()->take(3)->get();

        return view(
            'pages.blog_integra',
            [
                'post' => $post,
                'post_leia_mais' => $post_leia_mais
            ]
        );
    }

    public function descontos(Request $request)
    {
        $descontos = Post::type('desconto')->published()->where(function ($query) use ($request) {
            if (isset($request->pesquisa))
                $query->where('post_title', 'LIKE', '%' . $request->pesquisa . '%');
            if (isset($request->categoria))
                $query->taxonomy('category', $request->categoria);
        })->newest()->paginate(9, ['*'], 'pagina');

        $categories = Taxonomy::where('taxonomy', 'category')->whereHas('posts', function ($query) {
            $query->where('post_type', 'desconto');
        })->with('posts')->get();

        return view(
            'pages.descontos',
            [
                'categories' => $categories,
                'descontos' => $descontos
            ]
        );
    }

    public function descontos_integra(String $slug)
    {
        $desconto = Post::type('desconto')->published()->slug($slug)->first();

        if (!$desconto) abort(404);

        return view(
            'pages.descontos_integra',
            [
                'desconto' => $desconto
            ]
        );
    }
}
