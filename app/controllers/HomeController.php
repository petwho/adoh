<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function home()
	{
		$posts = Post::all();
		$articles = Article::all();

		return View::make('home', array(
			'posts' => $posts,
			'articles' => $articles
		));
	}

	public function graphic()
	{
		$posts = Post::where('gallery_id', '=', 1)->get();
		$articles = Article::where('gallery_id', '=', 1)->get();
		$gallery = Gallery::find(1);

		return View::make('gallery', array(
			'posts' => $posts,
			'articles' => $articles,
			'gallery' => $gallery
		));
	}

	public function interior()
	{
		$posts = Post::where('gallery_id', '=', 2)->get();
		$articles = Article::where('gallery_id', '=', 2)->get();
		$gallery = Gallery::find(2);

		return View::make('gallery', array(
			'posts' => $posts,
			'articles' => $articles,
			'gallery' => $gallery
		));
	}

	public function pallet()
	{
		$posts = Post::where('gallery_id', '=', 3)->get();
		$articles = Article::where('gallery_id', '=', 3)->get();
		$gallery = Gallery::find(3);

		return View::make('gallery', array(
			'posts' => $posts,
			'articles' => $articles,
			'gallery' => $gallery
		));
	}

	public function article($id)
	{
		$posts = Post::all();
		$articles = Article::all();
		$article = Article::find($id);

		return View::make('article', array(
			'posts' => $posts,
			'articles' => $articles, 'article' => $article
		));
	}

	public function posts($id)
	{
		$articles = Article::all();
		$post = Post::find($id);
		$posts = Post::where('gallery_id', '=', $post->gallery['id'])->get();

		return View::make('post', array(
			'posts' => $posts,
			'post' => $post,
			'articles' => $articles
		));
	}
}
