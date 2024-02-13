<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Admin',
            'username' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin')
        ]);
        // User::factory(1)->create();

        Category::create([
            'name' => 'Pasien',
            'slug' => 'pasien'
        ]);

        // Category::create([
        //     'name' => 'Design Graphic',
        //     'slug' => 'design-graphic'
        // ]);

        // Category::create([
        //     'name' => 'Sport',
        //     'slug' => 'sport'
        // ]);

        // Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Frontend Developer',
        //     'slug' => 'front-end-developer',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, quia enim, ex itaque eius odio magni voluptatum excepturi mollitia velit,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, quia enim, ex itaque eius odio magni voluptatum excepturi mollitia velit, sunt libero et cupiditate commodi repellat alias maiores? Porro ipsa quisquam possimus pariatur vero consequatur reprehenderit. Possimus suscipit assumenda incidunt maxime repudiandae, illum reprehenderit doloremque fugit eos officia natus quos minima mollitia eius nihil molestias nam ea quis. Omnis architecto temporibus magni vel labore dolorum, a velit sint repellat nam sequi doloribus facere, recusandae ipsa necessitatibus neque dicta enim ducimus rem iure. Deleniti nulla error esse, neque cumque architecto dolores mollitia minima, commodi consectetur dignissimos dicta odit obcaecati fuga ratione?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Backend Developer',
        //     'slug' => 'back-end-developer',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, quia enim, ex itaque eius odio magni voluptatum excepturi mollitia velit,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, quia enim, ex itaque eius odio magni voluptatum excepturi mollitia velit, sunt libero et cupiditate commodi repellat alias maiores? Porro ipsa quisquam possimus pariatur vero consequatur reprehenderit. Possimus suscipit assumenda incidunt maxime repudiandae, illum reprehenderit doloremque fugit eos officia natus quos minima mollitia eius nihil molestias nam ea quis. Omnis architecto temporibus magni vel labore dolorum, a velit sint repellat nam sequi doloribus facere, recusandae ipsa necessitatibus neque dicta enim ducimus rem iure. Deleniti nulla error esse, neque cumque architecto dolores mollitia minima, commodi consectetur dignissimos dicta odit obcaecati fuga ratione?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'My Portfolio',
        //     'slug' => 'my-portfolio',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, quia enim, ex itaque eius odio magni voluptatum excepturi mollitia velit,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, quia enim, ex itaque eius odio magni voluptatum excepturi mollitia velit, sunt libero et cupiditate commodi repellat alias maiores? Porro ipsa quisquam possimus pariatur vero consequatur reprehenderit. Possimus suscipit assumenda incidunt maxime repudiandae, illum reprehenderit doloremque fugit eos officia natus quos minima mollitia eius nihil molestias nam ea quis. Omnis architecto temporibus magni vel labore dolorum, a velit sint repellat nam sequi doloribus facere, recusandae ipsa necessitatibus neque dicta enim ducimus rem iure. Deleniti nulla error esse, neque cumque architecto dolores mollitia minima, commodi consectetur dignissimos dicta odit obcaecati fuga ratione?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        // Post::create([
        //     'title' => 'My Experience',
        //     'slug' => 'my-experience',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, quia enim, ex itaque eius odio magni voluptatum excepturi mollitia velit,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, quia enim, ex itaque eius odio magni voluptatum excepturi mollitia velit, sunt libero et cupiditate commodi repellat alias maiores? Porro ipsa quisquam possimus pariatur vero consequatur reprehenderit. Possimus suscipit assumenda incidunt maxime repudiandae, illum reprehenderit doloremque fugit eos officia natus quos minima mollitia eius nihil molestias nam ea quis. Omnis architecto temporibus magni vel labore dolorum, a velit sint repellat nam sequi doloribus facere, recusandae ipsa necessitatibus neque dicta enim ducimus rem iure. Deleniti nulla error esse, neque cumque architecto dolores mollitia minima, commodi consectetur dignissimos dicta odit obcaecati fuga ratione?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
