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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Course::class, function (Faker\Generator $faker) {
    $difficulties = ['beginner', 'intermediate', 'advanced'];
    $types = ['theory', 'project', 'snippet'];
    return [
        'name' => $name = $faker->sentence,
        'slug' => str_slug($name),
        'free' => rand(0, 1),
        'difficulty' => $difficulties[rand(0, 2)],
        'type' => $types[rand(0, 2)],
    ];
});
