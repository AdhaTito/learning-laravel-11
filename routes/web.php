<?php

use App\Models\Blog;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/document', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('test', ['nama' => 'Adha Mastito'], ['title' => 'My Testing']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Me']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'My Contact']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog Site', 'posts' => Blog::all()]);
});

Route::get('/blog/{blog:slug}', function (Blog $blog) {

    // $getpost = Blog::find($id);

    return view('single_blog', ['title' => 'Single Post', 'getpost' => $blog]);
});
