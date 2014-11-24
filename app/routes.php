<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@home');
Route::get('/graphic', 'HomeController@graphic');
Route::get('/interior', 'HomeController@interior');
Route::get('/pallet', 'HomeController@pallet');

Route::get('/posts', 'PostsController@index');
Route::get('/posts/new', 'PostsController@create');
Route::get('/posts/{id}/edit', 'PostsController@edit');
Route::put('/posts/{id}', 'PostsController@update');
Route::post('/posts', 'PostsController@store');
Route::delete('/posts/{id}', 'PostsController@destroy');

Route::get('/articles', 'ArticlesController@index');
Route::get('/articles/new', 'ArticlesController@create');
Route::get('/articles/{id}/edit', 'ArticlesController@edit');
Route::put('/articles/{id}', 'ArticlesController@update');
Route::post('/articles', 'ArticlesController@store');
Route::delete('/articles/{id}', 'ArticlesController@destroy');

Route::get('/articles/{id}', 'HomeController@article');
Route::get('/posts/{id}', 'HomeController@posts');

Route::get('/dashboard', array(
  'before' => 'auth',
  function()
  {
    $user = Auth::user();
    return View::make('admin.dashboard', array(
      'user' => $user,
      'users' => User::all(),
      'posts' => Post::all(),
      // 'projects' => Project::all()
    ));
  }
));

/* Users */
Route::resource('users', 'UsersController');
Route::resource('projects', 'ProjectsController');
Route::resource('categories', 'CategoriesController');

/* Sessions */
Route::get('login', 'SessionsController@create');
Route::post('login', 'SessionsController@store');
Route::get('logout', 'SessionsController@destroy');

/* Menus */
Route::resource('menus', 'MenusController');
Route::put('menus/{id}/restore', 'MenusController@restore');
Route::delete('menus/{id}/trash', 'MenusController@trash');

/* Post */
// Route::resource('posts', 'PostsController');
/* Uploads */
Route::resource('uploads', 'UploadsController');

App::missing(function($exception)
{
  return Response::view('errors.missing', array(), 404);
});

