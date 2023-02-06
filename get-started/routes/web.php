<?php

use Illuminate\Support\Facades\Route;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Perdi",
        "pendidikan" => "UNHAS",
    ]);
});

Route::get('/blog', function () {
    
    $blog_posts = [
        [
            "title" => "Blog Pertama",
            "slug" => "blog-pertama",
            "author" => "Perdi",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse reiciendis dicta, facilis sint, laboriosam ullam, veritatis minima autem amet debitis ex omnis mollitia. Eaque veniam adipisci aliquid ducimus assumenda enim maiores, nostrum quos! Veritatis sapiente totam vel quam ab qui laborum repudiandae neque labore ullam doloribus expedita, corporis perferendis tenetur maiores atque minus quis assumenda quod ea earum? Fugiat in reiciendis inventore iure cupiditate explicabo dolorum quia excepturi ullam! Laboriosam reprehenderit nesciunt recusandae ullam, totam dolorem quisquam iure aperiam eius, eligendi doloremque ipsum nulla omnis ducimus at. Commodi, provident rerum."
        ],
        [
            "title" => "Blog Kedua",
            "slug" => "blog-kedua",
            "author" => "Perdi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, similique quia, est voluptas doloribus minima, inventore iste perspiciatis velit natus neque laudantium tenetur rem magnam itaque fuga sint possimus beatae?"
        ],
    ];
    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_posts,
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Blog Pertama",
            "slug" => "blog-pertama",
            "author" => "Perdi",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse reiciendis dicta, facilis sint, laboriosam ullam, veritatis minima autem amet debitis ex omnis mollitia. Eaque veniam adipisci aliquid ducimus assumenda enim maiores, nostrum quos! Veritatis sapiente totam vel quam ab qui laborum repudiandae neque labore ullam doloribus expedita, corporis perferendis tenetur maiores atque minus quis assumenda quod ea earum? Fugiat in reiciendis inventore iure cupiditate explicabo dolorum quia excepturi ullam! Laboriosam reprehenderit nesciunt recusandae ullam, totam dolorem quisquam iure aperiam eius, eligendi doloremque ipsum nulla omnis ducimus at. Commodi, provident rerum."
        ],
        [
            "title" => "Blog Kedua",
            "slug" => "blog-kedua",
            "author" => "Perdi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, similique quia, est voluptas doloribus minima, inventore iste perspiciatis velit natus neque laudantium tenetur rem magnam itaque fuga sint possimus beatae?"
        ],
    ];

    $post_open = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $post_open = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $post_open,
    ]);
});
