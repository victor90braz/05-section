<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;

Route::get('/', function () {

    return view('posts', [
        'posts' => Post::latest()->get(),
        'categories' => Category::all()
    ]);

});

Route::get('posts/{post:slug}', function (Post $post) {

    return view('post', [
        'post' => $post,
        'categories' => Category::all()
    ]);

});

Route::get('categories/{category:slug}', function (Category $category) {

    return view('posts', [
        'posts' => $category->posts,
        'categories' => Category::all()
    ]);

});

Route::get('authors/{author:username}', function (User $author) {

    return view('posts', [
        'posts' => $author->posts
    ]);

});
