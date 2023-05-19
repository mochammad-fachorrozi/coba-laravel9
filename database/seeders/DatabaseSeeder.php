<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // menambahkan data random sebanyak yg dimau
        User::factory(3)->create();

        User::create([
            'name' => 'mochammad',
            'username' => 'mochammad',
            'email' => 'mochammad@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'fachorrozi',
        //     'email' => 'fachorrozi@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur libero corporis fugiat expedita cumque consequuntur magni, aperiam ipsum obcaecati saepe at esse, eveniet omnis soluta facilis quo dignissimos deleniti vitae sapiente. Corrupti incidunt praesentium placeat dolorem molestias expedita fuga quae quasi aliquam, ut sunt, perspiciatis optio sed dolore a odio provident consequatur sapiente natus perferendis? Fugit dolorem dolore doloribus tempora ut beatae, officia libero adipisci? Architecto neque ad expedita possimus, exercitationem vel nisi, dolores voluptatum tempora, distinctio ab nesciunt! Totam ipsa ipsam magnam, incidunt, commodi mollitia aut corrupti officia hic libero inventore eaque sint vero possimus eius repellendus ullam impedit.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur libero corporis fugiat expedita cumque consequuntur magni, aperiam ipsum obcaecati saepe at esse, eveniet omnis soluta facilis quo dignissimos deleniti vitae sapiente. Corrupti incidunt praesentium placeat dolorem molestias expedita fuga quae quasi aliquam, ut sunt, perspiciatis optio sed dolore a odio provident consequatur sapiente natus perferendis? Fugit dolorem dolore doloribus tempora ut beatae, officia libero adipisci? Architecto neque ad expedita possimus, exercitationem vel nisi, dolores voluptatum tempora, distinctio ab nesciunt! Totam ipsa ipsam magnam, incidunt, commodi mollitia aut corrupti officia hic libero inventore eaque sint vero possimus eius repellendus ullam impedit.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur libero corporis fugiat expedita cumque consequuntur magni, aperiam ipsum obcaecati saepe at esse, eveniet omnis soluta facilis quo dignissimos deleniti vitae sapiente. Corrupti incidunt praesentium placeat dolorem molestias expedita fuga quae quasi aliquam, ut sunt, perspiciatis optio sed dolore a odio provident consequatur sapiente natus perferendis? Fugit dolorem dolore doloribus tempora ut beatae, officia libero adipisci? Architecto neque ad expedita possimus, exercitationem vel nisi, dolores voluptatum tempora, distinctio ab nesciunt! Totam ipsa ipsam magnam, incidunt, commodi mollitia aut corrupti officia hic libero inventore eaque sint vero possimus eius repellendus ullam impedit.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur libero corporis fugiat expedita cumque consequuntur magni, aperiam ipsum obcaecati saepe at esse, eveniet omnis soluta facilis quo dignissimos deleniti vitae sapiente. Corrupti incidunt praesentium placeat dolorem molestias expedita fuga quae quasi aliquam, ut sunt, perspiciatis optio sed dolore a odio provident consequatur sapiente natus perferendis? Fugit dolorem dolore doloribus tempora ut beatae, officia libero adipisci? Architecto neque ad expedita possimus, exercitationem vel nisi, dolores voluptatum tempora, distinctio ab nesciunt! Totam ipsa ipsam magnam, incidunt, commodi mollitia aut corrupti officia hic libero inventore eaque sint vero possimus eius repellendus ullam impedit.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
