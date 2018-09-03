<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/about', function () {
//    $name = 'SomeName';
//    return view('about', ['name' => $name])->with('name', 'World');
//});

//Route::get('/tasks', function () {
//    $tasks = DB::table('tasks')->get();
//    $tasks = Task::incompleted()->get();
//    $tasks = Task::incomplete();
//    //    app('events')->fire();
//    return view('tasks.index', compact('tasks'));
//});
//
//Route::get('/tasks/{task}', function ($id) {
////    $task = DB::table('tasks')->find($id);
//    $task = Task::find($id);
//    return view('tasks.show', compact('task'));
//});

//Route::get('/', 'BlogController@index');


//$stripe = App::make('App\Billing\Stripe');
//$stripe = resolve('App\Billing\Stripe');
//
//dd($stripe);

Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');

//Route::get('/register', 'Auth\RegisterController@register');
//Route::get('/login', 'Auth\LoginController@login');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');