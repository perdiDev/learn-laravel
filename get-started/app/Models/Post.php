<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
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

    public static function all() 
    {
        // Sebelum mengunakan collect
        // return self::$blog_posts;
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        
        // Sebelum mengunakan collect
        // $posts = self::$blog_posts;
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
