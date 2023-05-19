<?php
// Sebelum Ada model, db
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
// / adalah root
Route::get('/', function () {
    // return view('welcome');
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Mochammad Fachorrozi",
        "email" => "mochammadfachorrozi98@gmail.com",
        "image" => "luffy.jpg"
    ]);
});



Route::get('/blog', function () {

    // data
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Mochammad Fachorrozi",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis dolor unde officiis possimus tenetur repellendus, deleniti ipsam itaque labore necessitatibus impedit, magni libero in quos suscipit velit eligendi rem laborum repudiandae! Aliquam perferendis dolore ut delectus ex, repellendus consectetur accusantium odio quo tempore quod veritatis veniam debitis laudantium minus! Eius fuga quasi minus esse cupiditate non sed ut corrupti cum accusamus eum iste id, magni atque repudiandae, eligendi officiis quos quaerat aliquam! Alias voluptatem velit enim reiciendis quibusdam quidem rerum."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Khoiru Niha",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, voluptatem rem. Vel impedit eos, quaerat quo praesentium repellendus minus. Tempore ipsa ducimus quisquam minima cupiditate vel iusto expedita dignissimos mollitia sed corrupti dolorem alias vitae voluptatibus earum, excepturi ipsum, sunt molestiae aliquam nam. Esse mollitia aliquid cupiditate eligendi fugiat corporis dignissimos iusto unde, accusamus voluptatem! Veniam non architecto quod aut eos? Officia neque, fugit voluptatum iste laudantium saepe consequuntur eveniet, odit doloribus quasi aliquid omnis vitae architecto dolorem exercitationem voluptatibus! Et suscipit adipisci, accusantium tempora totam, saepe rem culpa laboriosam ullam inventore expedita temporibus nulla voluptatum? Reiciendis aperiam libero tenetur?"
        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function ($slug) {

    // data
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Mochammad Fachorrozi",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis dolor unde officiis possimus tenetur repellendus, deleniti ipsam itaque labore necessitatibus impedit, magni libero in quos suscipit velit eligendi rem laborum repudiandae! Aliquam perferendis dolore ut delectus ex, repellendus consectetur accusantium odio quo tempore quod veritatis veniam debitis laudantium minus! Eius fuga quasi minus esse cupiditate non sed ut corrupti cum accusamus eum iste id, magni atque repudiandae, eligendi officiis quos quaerat aliquam! Alias voluptatem velit enim reiciendis quibusdam quidem rerum."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Khoiru Niha",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, voluptatem rem. Vel impedit eos, quaerat quo praesentium repellendus minus. Tempore ipsa ducimus quisquam minima cupiditate vel iusto expedita dignissimos mollitia sed corrupti dolorem alias vitae voluptatibus earum, excepturi ipsum, sunt molestiae aliquam nam. Esse mollitia aliquid cupiditate eligendi fugiat corporis dignissimos iusto unde, accusamus voluptatem! Veniam non architecto quod aut eos? Officia neque, fugit voluptatum iste laudantium saepe consequuntur eveniet, odit doloribus quasi aliquid omnis vitae architecto dolorem exercitationem voluptatibus! Et suscipit adipisci, accusantium tempora totam, saepe rem culpa laboriosam ullam inventore expedita temporibus nulla voluptatum? Reiciendis aperiam libero tenetur?"
        ]
    ];


    $new_post = [];

    foreach ($blog_posts as $blog_post) {
        if ($blog_post["slug"] === $slug) {
            $new_post = $blog_post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
