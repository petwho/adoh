<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;
class PostsController extends \BaseController {

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
    return View::make('admin.posts.index', array(
        'posts' => Post::all(),
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
    $post = Post::where('id', $id)->first();
    $options = array(null=> '--- Select ---');
    $galleries = Gallery::all();
    foreach ($galleries as $gallery) {
      $options[$gallery['id']] = $gallery['title'];
    }
    if ($post) {
      return View::make('admin.posts.edit', array('post' => $post, 'options' => $options));
    }
    return Redirect::back()->with('message', 'No posts was found');
  }

  /**
   * Update resource in storage.
   * PUT /posts/{id}
   * @Return Respon 
   */

  public function update($id)
  {
    $data = Input::all();
    // dd($data);
    $rules = array(
      'gallery_id' => array('required'),
      'title' => array('required'),
      'summary' => array('required'),
      'content' => array('required'),
      'image' => array('required'),
    );
    // Create a new validator instance.
    $validator = Validator::make($data, $rules);

    if ($validator->passes()) {
      $post = Post::find($id);
      $post->title = Input::get('title');
      $post->gallery_id = Input::get('gallery_id');
      $post->summary = Input::get('summary');
      $post->content = Input::get('content');
      $post->image = Input::get('image');
      $post->save();
      return Redirect::back()->with('message', 'Post updated successfully.');
    }
    return Redirect::back()->withErrors($validator);
  }

  /**
   * Show the form for creating a new resource.
   * GET /posts/create
   * @Return Respon 
   */

  public function create()
  {
    $options = array(null=> '--- Select ---');
    $galleries = Gallery::all();
    foreach ($galleries as $gallery) {
      $options[$gallery['id']] = $gallery['title'];
    }
    return View::make('admin.posts.create', array('options' => $options));
  }

  /**
   * Store a newly created resource in storage.
   * POST /posts
   * @Return Respon 
   */

  public function store()
  {
    $data = Input::all();
    // dd($data);
    $rules = array(
      'title' => array('required'),
      'gallery_id' => array('required'),
      'summary' => array('required'),
      'content' => array('required'),
      'image' => array('required'),
    );
    // Create a new validator instance.
    $validator = Validator::make($data, $rules);

    if ($validator->passes()) {
      $post = new Post();
      $post->title = Input::get('title');
      $post->gallery_id = Input::get('gallery_id');
      $post->summary = Input::get('summary');
      $post->content = Input::get('content');
      $post->image = Input::get('image');
      $post->save();
      return Redirect::back()->with('message', 'Post created successfully.');
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
    Post::destroy($id);
    return Response::json(['message' => 'Delete okie']);
  }
}