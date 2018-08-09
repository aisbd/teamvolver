<?php

use Faker\Generator as Faker;

$factory->define(\Vanguard\Project::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'description' => $faker->realText(200),
        'category_id' => rand(1, 10),
        'image' => $faker->imageUrl('300x300'), 
    ];
});
