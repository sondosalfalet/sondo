<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


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
Route :: get ('tasks',function(){
$tasks = DB::table('tasks')->get();
//dd($tasks);

 return view('tasks',compact('tasks'));
});
Route::get('/show/{id}',function($id){
   // $task =DB::table('tasks')->where('id',$id)_>first();
   $task =DB::table('task')->find($id);
  // dd($task);
  return view('show',compact('task'));

