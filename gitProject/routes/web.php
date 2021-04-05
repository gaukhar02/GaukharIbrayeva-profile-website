<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Client;
use App\Models\Post;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UploadFileController;
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
})-> name('welcome');
Route::get('/Laravel', function () {
    return view('index');
})-> name('Laravel');


Route::get('client/add', function () {
     DB:: table('clients')-> insert([
          'name' => 'Gaukhar',
          'surname' => 'Ibrayeva',
          'age' => '18',
     ]);
 });

Route::get('client', [ClientController::class, 'index']);
Route::get('client/create', function(){
       return view('client.create');
});


Route::post('client/create', [ClientController::class, 'store'])->name('add-client');
Route::get('client/{id}', [ClientController::class, 'get_client']);



Route::get('post/create', function () {
     DB:: table('post')-> insert([
          'title' => 'Salutation',
          'body' => 'Hello, welcome, this is inside my database. Here you can write about anything. Just be sure to include the title of your post.',

     ]);
 });

Route::get('post', [BlogController::class, 'index1']);
Route::get('post/create', function(){
       return view('blog.create1');
});


Route::post('post/create', [BlogController::class, 'store'])->name('add-post');
Route::get('post/{id}', [BlogController::class, 'get_post']);


