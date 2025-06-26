<?php

use App\Models\Blog;
use App\Models\User;
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
    return view('blog', ['title' => 'Blogs Site', 'blogs' => Blog::all()]);
});

Route::get('/blog/{blog:slug}', function (Blog $blog) {

    // $getpost = Blog::find($id);

    return view('single_blog', ['title' => 'Single Post', 'blogs' => $blog]);
});

// Filter dari author balik kehalaman blog 
Route::get('/author/{user:username}', function (User $user) {
    return view('blog', ['title' => count($user->blogs) . ' Posting By ' . $user->name, 'blogs' => $user->blogs]);
});
