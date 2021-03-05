<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Client;
use App\Models\Post;

use App\Http\Controllers\ClientController;
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




Route::get('post/create', function () {
     DB:: table('post')-> insert([
          'title' => 'Salutation',
          'body' => 'Hello, welcome, this is inside my database. Here you can write about anything. Just be sure to include the title of your post.',

     ]);
 });

Route::get('post', function () {
     $post = Post::find(1);
     return $post;
});


