<?php

use Illuminate\Database\Seeder;
use Vanguard\Category;
class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return  void
     */
    public function run()
    {
        Category::create([
            'name' => 'Ui Design',
        ]);

        Category::create([
            'name' => 'Graphic Designer',
        ]);

        Category::create([
            'name' => 'Web Developement',
        ]);

        Category::create([
            'name' => 'Software Developement',
        ]);

        Category::create([
            'name' => 'Android Developement',
        ]);
        Category::create([
            'name' => 'Ios Developement',
        ]);
        Category::create([
            'name' => 'Pytohn Developement',
        ]);

        Category::create([
            'name' => 'AI',
        ]);

        Category::create([
            'name' => 'Photoshop',
        ]);

        Category::create([
            'name' => 'Artist',
        ]);

    }
}
