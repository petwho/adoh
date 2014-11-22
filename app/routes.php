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
      'projects' => Project::all()
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

