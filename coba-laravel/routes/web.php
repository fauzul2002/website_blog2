<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Models\post;

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
Route::get('/landing', function () {
    return view ('landing', [
        "title" => "landing"
    ]);
});

Route::get('/home', function () {
    return view ('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view ('about',[
        "title" => "About",
        "name"=> "Kuliner Aceh",
        "email"=> "KulinerAceh@gmail.com",
        "image"=> "Aceh.jpg"
        
    ]);
    
});



Route::get('/blog', function () {
    $Blog_blog =[
   
];
    return view ('blog',[
        "title"=> "Blog",
        "posts"=> post::all()
    ]);
});


Route::get ('posts/{slug}', function($slug) {
       

    return view ('post',[
      "title" =>"single post",
      "post"=>post::find($slug) 

    ]);
     
});
