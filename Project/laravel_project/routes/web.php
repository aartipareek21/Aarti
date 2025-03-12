<?php

use Illuminate\Support\Facades\Route;

// load all controllers
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('website.index');
});

Route::get('/signup',[UserController::class,'create']);
Route::post('/insert_signup',[UserController::class,'store']);

Route::get('/login',[UserController::class,'login']);
Route::post('/user_auth',[UserController::class,'user_auth']);
Route::get('/user_logout',[UserController::class,'user_logout']);

Route::get('/userprofile',[UserController::class,'userprofile']);
Route::get('/userprofile/{id}',[UserController::class,'edit']);
Route::post('/update_user/{id}',[UserController::class,'update']);
Route::get('/about', function () {
    return view('website.about');
});

Route::get('/categories',[CategorieController::class,'index']);

Route::get('/contact',[ContactController::class,'create']);
Route::post('/insert_contact',[ContactController::class,'store']);

Route::post('/place-order', [OrderController::class, 'store']);

Route::get('/gallery', function () {
    return view('website.gallery');
});

Route::get('/service', function () {
    return view('website.service');
});

// Route::get('/product', function () {
//     return view('website.product');
// });

Route::get('*', function () {
    return view('website.pnf');
});

//  Admin Routes

Route::get('admin-login', function () {
    return view('admin.index');
});

Route::get('dashboard', function () {
    return view('admin.dashboard');
});


Route::get('/add_categories',[CategorieController::class,'create']);
Route::post('/add_categories',[CategorieController::class,'store']);
Route::get('/manage_categories',[CategorieController::class,'show']);
Route::get('/edit_categories/{id}',[CategorieController::class,'edit']);
Route::post('/update_categories/{id}',[CategorieController::class,'update']);
Route::get('/manage_categories/{id}',[CategorieController::class,'destroy']);

Route::get('/product_detail/{id}',[ProductController::class,'index']);
Route::get('/add_products',[ProductController::class,'create']);
Route::post('/add_products',[ProductController::class,'store']);
Route::get('/manage_products',[ProductController::class,'show']);
Route::get('/edit_products/{id}',[ProductController::class,'edit']);
Route::post('/update_products/{id}',[ProductController::class,'update']);
Route::get('/manage_products/{id}',[ProductController::class,'destroy']);

// Route::get('add_order', function () {
//     return view('admin.add_order');
// });

Route::get('/manage_orders',[OrderController::class,'show']);



Route::get('/manage_contacts',[ContactController::class,'show']);

Route::get('/manage_users',[UserController::class,'show']);
Route::get('/manage_users/{id}',[UserController::class,'destroy']);

