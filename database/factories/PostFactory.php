<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Models\Post;
use App\User;

$factory->define(Post::class, function (Faker $faker) {
    $userId = User::all()->random()->id;

    return [
        'user_id' => $userId,
        'title' => $faker->text(200),
        'type' => rand(1, 3),
    ];
});
