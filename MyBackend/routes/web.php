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

Route::get('/', function () {
    return view('welcome');

});

// Route::get('/home', function () {
//     return view('home')->with('name','Ram');
// });
// Route::get('/about',function(){
//    $task=DB::table('tableName')->get();
//    return $task;
// });
Route::get('/home','TaskController@index');
// Route::get('/home', function () {
// 	 //$tasks=DB::table('tasks')->get();
	 
// 	// $tasks=['I do my work','I watch tvc','I vasdass'];
//     //return view('home',compact('tasks'));
// });
// Route::get('/tasks/{task}', function ($id) {

// 	 //$task=DB::table('tasks')->find($id);
// 	 $tasks=App\Task::find($id);
// 	 //Task::inComplete();
// 	 //dd($task);
// 	// $tasks=['I do my work','I watch tvc','I vasdass'];
//     return view('home',compact('tasks'));
// });
//Route::get('/tasks/{task,task2}','TaskController@show');
Route::get('/tasks/{id}','TaskController@pick');

Route::get('/events','EventController@index');

