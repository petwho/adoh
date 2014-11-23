<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;
class ArticlesController extends \BaseController {

  public function __construct()
  {
    $this->beforeFilter('auth');
  }

  public function index()
  {
    $galleries = Gallery::all();
    $gallery_list = array();
    foreach ($galleries as $gallery) {
      $gallery_list[$gallery->id] = $gallery->title;
    }
    return View::make('admin.articles.index', array(
        'articles' => Article::all(),
        'gallery_list' => $gallery_list));
  }

  /**
   * Show the form for editing the specified resource.
   * GET /menus/{id}/edit
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $article = Article::where('id', $id)->first();
    $options = array(null=> '--- Select ---');
    $galleries = Gallery::all();
    foreach ($galleries as $gallery) {
      $options[$gallery['id']] = $gallery['title'];
    }
    if ($article) {
      return View::make('admin.articles.edit', array('article' => $article, 'options' => $options));
    }
    return Redirect::back()->with('message', 'No articles was found');
  }

  /**
   * Update resource in storage.
   * PUT /articles/{id}
   * @Return Respon 
   */

  public function update($id)
  {
    $data = Input::all();
    // dd($data);
    $rules = array(
      'gallery_id' => array('required'),
      'title' => array('required'),
      'subtitle' => array('required'),
      'summary' => array('required'),
      'content' => array('required'),
      'thumb' => array('required'),
      'image' => array('required'),
    );
    // Create a new validator instance.
    $validator = Validator::make($data, $rules);

    if ($validator->passes()) {
      $article = Article::find($id);
      $article->title = Input::get('title');
      $article->subtitle = Input::get('subtitle');
      $article->gallery_id = Input::get('gallery_id');
      $article->summary = Input::get('summary');
      $article->content = Input::get('content');
      $article->thumb = Input::get('thumb');
      $article->image = Input::get('image');
      $article->save();
      return Redirect::back()->with('message', 'Article updated successfully.');
    }
    return Redirect::back()->withErrors($validator);
  }

  /**
   * Show the form for creating a new resource.
   * GET /articles/create
   * @Return Respon 
   */

  public function create()
  {
    $options = array(null=> '--- Select ---');
    $galleries = Gallery::all();
    foreach ($galleries as $gallery) {
      $options[$gallery['id']] = $gallery['title'];
    }
    return View::make('admin.articles.create', array('options' => $options));
  }

  /**
   * Store a newly created resource in storage.
   * POST /articles
   * @Return Respon 
   */

  public function store()
  {
    $data = Input::all();
    // dd($data);
    $rules = array(
      'gallery_id' => array('required'),
      'title' => array('required'),
      'subtitle' => array('required'),
      'summary' => array('required'),
      'content' => array('required'),
      'thumb' => array('required'),
      'image' => array('required'),
    );
    // Create a new validator instance.
    $validator = Validator::make($data, $rules);

    if ($validator->passes()) {
      $article = new Article();
      $article->title = Input::get('title');
      $article->subtitle = Input::get('subtitle');
      $article->gallery_id = Input::get('gallery_id');
      $article->summary = Input::get('summary');
      $article->content = Input::get('content');
      $article->image = Input::get('image');
      $article->thumb = Input::get('thumb');
      $article->save();
      return Redirect::back()->with('message', 'Article created successfully.');
    }
    return Redirect::back()->withErrors($validator);
  }

  /**
   * Remove the specified resource from storage.
   * DELETE /latestproject/{id}
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    Article::destroy($id);
    return Response::json(['message' => 'Delete okie']);
  }
}