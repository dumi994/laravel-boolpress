<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 15; $i++) {
            $post = new Post();
            $post->title = $faker->sentence(3);
            $post->image = $faker->randomElement(['https://picsum.photos/300/200']);
            $post->body = $faker->text(100);
            $post->save();
        }
    }
}
