<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CarsController;
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
// Route::resource('/', CarsController::class);

Route::get('/', [PagesController::class, 'main']);
// Route::get('/about', [PagesController::class, 'about']);

//Posts endpoint
Route::get('/posts', [PostsController::class, 'posts']);
//home
// Route::get('/', function () {
//     return view('welcome');
// });

//new way of routing
Route::get('/index', [ProductsController::class, 'index']);

//with param
Route::get('/index/{param}', [ProductsController::class, 'show']);

//param with pattern
Route::get('/index/{name}/{id}', [ProductsController::class, 'show'])->where([
    'name' => '[a-z]+',
    'id' => '[0-9]+'
]);

//routes with names
Route::get('/products', [ProductsController::class, 'index'])->name('products');

//return an string
Route::get('/string', function(){
    return 'I can do it';
});

//return an arrray
Route::get('/array', function(){
    return ['php', 'html', 'laravel'];
});

//return a json
Route::get('/json', function(){
    return response()->json([
        'name' => 'Patrick',
        'course' => 'Laravel Course'
    ]);
});

//return a function
Route::get('/function', function(){
    return redirect('/string');
});

Auth::routes();

//also new
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//also new way of routing
// Route::get('/index', 'App\Http\Controllers\ProductsController@index');