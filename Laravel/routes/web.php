<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', function (){
    return redirect()->route('posts.index');
});

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');


//Route::get('/', function () {
//    return view("posts");
//});

//Route::get('/post/{slug}', function ($slug) {
//    $path = __DIR__ . "/../resources/views/posts/{$slug}.html";
//
//    if (! file_exists($path)){
//        return redirect('/');
//    }

//    $postContent = cache()->remember("/post/{$slug}", 5, function () use ($path){
//        var_dump('file NOT IN cache; INSERTING to cache');
//        return file_get_contents($path);
//    });
//
//    $postContent = file_get_contents($path);
//    return view("post", ['postContent' => $postContent]);
//})->whereAlphaNumeric('slug');
