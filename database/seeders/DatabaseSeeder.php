<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\Types\Integer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // Por cada for significa que hay 1 usuario con una categoria pero que tiene 10 posts con un commentario en ellos
        for ($i = 0; $i < 10; $i++) {
            if ($i == 0) {
                $user1 = User::factory()->create([
                    'name' => 'Andres G.B'
                ]);
                $category1 = Category::factory()->create([
                    'name' => 'Work',
                    'slug' => 'working'
                ]);
            }
            $post1 = Post::factory()->create([
                'user_id' => $user1->id,
                'category_id' => $category1->id
            ]);
            Comment::factory()->create([
                'user_id' => $user1->id,
                'post_id' => $post1->id
            ]);
        }
        for ($i = 0; $i < 10; $i++) {
            if ($i == 0) {
                $user1 = User::factory()->create([
                    'name' => 'Pedro H. C.'
                ]);
                $category1 = Category::factory()->create([
                    'name' => 'Personal',
                    'slug' => 'personal'
                ]);
            }
            $post1 = Post::factory()->create([
                'user_id' => $user1->id,
                'category_id' => $category1->id
            ]);
            Comment::factory()->create([
                'user_id' => $user1->id,
                'post_id' => $post1->id
            ]);
        }
        for ($i = 0; $i < 10; $i++) {
            if ($i == 0) {
                $user1 = User::factory()->create([
                    'name' => 'Momo'
                ]);
                $category1 = Category::factory()->create([
                    'name' => 'Buisness',
                    'slug' => 'buisness'
                ]);
            }
            $post1 = Post::factory()->create([
                'user_id' => $user1->id,
                'category_id' => $category1->id
            ]);

            Comment::factory(3)->create([
                'user_id' => $user1->id,
                'post_id' => $post1->id
            ]);
        }
    }
}
