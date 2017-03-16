<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Article::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'title' => $faker->text(30),
        'description' => $faker->text(200),
        'body' => $faker->text(1000),
        'status' => rand(0,1),
        'id_user' => 1,
    ];
});
