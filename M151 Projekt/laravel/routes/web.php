<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Product;

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

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/', [ProductController::class, 'showProducts']);
Route::get('/details/{id}', [ProductController::class, 'showProductDetails']);
Route::get('/login', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'loginUser']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'registerUser']);
Route::any('/AddtoCart/{id}', [ProductController::class, 'addProductToCart']);
Route::get('/cart', [ProductController::class, 'showCart']);
Route::get('/unlog', [UserController::class, 'unlogUser']);
Route::get('/order', [ProductController::class, 'showOrderPage']);
Route::post('/ordering', [ProductController::class, 'orderProduct']);


















//Not Project
Route::get('/test', function () {
    return view('test');
});

//View anzeigen mit request
Route::get('/Post', function () {
    $name = request('name');
    return view('Posts/posts', [
        'name' => $name
    ]);
});
//View mit Wildcard
Route::get('/WC/{post}', function ($post) {
    $posts = [
        'my-first-post' => 'Blue Lock',
        'my-second-post' => 'One Piece'
    ];

    if(! array_key_exists($post, $posts)){
        abort(404, 'Sorry, that post is not available.');
    }
    return view('Posts/wildcard',[
        'post' => $posts[$post]
    ]);
});

//Controller path
//This doesnt work-.-
//Route::get('/Posts/{post}', 'PostsController@up');

Route::get('/Posts/{post}', [PostsController::class, 'show']);
// or
//Route::get('/page', 'App\Http\Controllers\PageController@index');

//json
Route::get('/json', function () {
    return ['foo' => 'bar'];
});


//string ausgabe
Route::get('/string', function () {
    return 'Hello world';
});

//Aufgabe
Route::get('/products', [ProductsController::class, 'list']);
