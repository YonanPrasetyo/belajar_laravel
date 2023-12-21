<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/about", function (){
    return 'Yonan Prasetyo';
});

// Route::get("/contact", function (){
//     return view('contact');
// });

Route::view("/contact","contact",["name"=>"cara fajar","phone"=>"0857xxxxxxxxx"]);

Route::redirect("/halo","halosaya");

// Route::get('/product/{id}',function($id){
//     return 'ini adalah produk dengan id '.$id;
// });

Route::get('/product/{id}',function($id){
    return view('product.detail',['id' => $id]);
});

Route::prefix('admin')->group(function(){
    Route::get('/profile-admin',function(){
        return 'profile admin';
    }); 

    Route::get('/about-admin',function(){
        return 'about admin';
    }); 

    Route::get('/contact-admin',function(){
        return 'contact admin';
    }); 
});