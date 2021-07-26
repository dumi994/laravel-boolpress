<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Programming', 'Automation', 'Web Design', 'Best Practice'];
        foreach ($categories as $category){
            $cat = new Category();
            $cat->name=$category;
            $cat->slug = Str::slug($cat->name);
            $cat->save();
        }
    }
}
