<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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

        /*User::truncate();
        Category::truncate();
        Post::truncate();*/

        $user = User::factory()->create([
            'name' => 'Andres G.B'
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id
        ]);

        /*
        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);
        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-first-post',
            'excerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
            'body' => '<p>Call of Duty (en español: «La llamada del deber») es una serie de unos videojuegos
            de disparos en primera persona, de estilo bélico, desarrollada principal e inicialmente por Infinity Ward,
            Treyarch, Sledgehammer Games y en menor proporción Raven Software y distribuida por Activision.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
            'body' => '<p>Call of Duty (en español: «La llamada del deber») es una serie de unos videojuegos
            de disparos en primera persona, de estilo bélico, desarrollada principal e inicialmente por Infinity Ward,
            Treyarch, Sledgehammer Games y en menor proporción Raven Software y distribuida por Activision.</p>'
        ]);
        */
    }
}
