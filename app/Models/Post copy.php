<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    // properti statis
    private static $blog_posts = [
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


    public static function all()
    {
        // properti static pake self, kalo biasa this->
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        // return $post;

        return $posts->firstWhere('slug', $slug);
        return $posts->firstWhere('slug', $slug);
    }
}
