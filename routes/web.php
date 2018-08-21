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

use App\Task;
use Illuminate\Support\Facades\DB;

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
Route::get('/', 'PostsController@index');
Route::get('/posts/{post}', 'PostsController@show');

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/blog', 'BlogController@index');