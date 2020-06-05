<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->sentence();
    return [
        'user_id'       => $faker->numberBetween(1, 2),
        'title'         => $title,
        'slug'          => Str::slug($title),
        'image'         => $faker->imageUrl(1600, 1060),
        'body'          => $faker->paragraph,
        'view_count'    => $faker->numberBetween(0, 200),
        'status'        => true,
        'is_approved'   => true,
    ];
});
