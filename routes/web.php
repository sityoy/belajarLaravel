<?php

use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;

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
        "name" => "Tio Irfan Antoni",
        "email" => "putraanimas@gmail.com",
        "image" => "tio2.png"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" =>  "Judul-post-pertama",
            "author" => "Tio Irfan Antoni",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
            molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
            numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
            optio, eaque rerum!"
        ],
    
        [
            "title" => "Judul Post Kedua",
            "slug" =>  "Judul-post-kedua",
            "author" => "Rudiyanto",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit pariatur veritatis repudiandae, 
            commodi quo corrupti nesciunt sequi doloribus numquam error, assumenda maiores laborum est libero corporis aliquid omnis expedita 
            eveniet odit esse consequuntur ducimus. Repellendus porro quisquam iusto maiores, tempora est pariatur magni saepe deserunt inventore non! 
            At nulla totam in minus laboriosam corporis tempore commodi repellat temporibus deserunt. Iure illo ad explicabo quis placeat est repudiandae saepe veritatis similique expedita suscipit, ab officiis, aperiam molestias assumenda? 
            Rerum, non minima enim illum, repellendus commodi aspernatur nihil beatae quas fugit voluptatum impedit nam nobis obcaecati. Nam molestiae temporibus soluta nobis nemo."
        ],
    
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post

Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" =>  "Judul-post-pertama",
            "author" => "Tio Irfan Antoni",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
            molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
            numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
            optio, eaque rerum!"
        ],
    
        [
            "title" => "Judul Post Kedua",
            "slug" =>  "Judul-post-kedua",
            "author" => "Rudiyanto",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit pariatur veritatis repudiandae, 
            commodi quo corrupti nesciunt sequi doloribus numquam error, assumenda maiores laborum est libero corporis aliquid omnis expedita 
            eveniet odit esse consequuntur ducimus. Repellendus porro quisquam iusto maiores, tempora est pariatur magni saepe deserunt inventore non! 
            At nulla totam in minus laboriosam corporis tempore commodi repellat temporibus deserunt. Iure illo ad explicabo quis placeat est repudiandae saepe veritatis similique expedita suscipit, ab officiis, aperiam molestias assumenda? 
            Rerum, non minima enim illum, repellendus commodi aspernatur nihil beatae quas fugit voluptatum impedit nam nobis obcaecati. Nam molestiae temporibus soluta nobis nemo."
        ],
    
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post  = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});

