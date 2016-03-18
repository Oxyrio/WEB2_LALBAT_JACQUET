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

$factory->define(App\Models\User::class, function (Faker\Generator $faker) { // crée des fakers qui permettront de tester la BDD
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'tel' => $faker->phoneNumber,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Article::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->numberBetween(1, 20) ,
        'title' => $faker->title,
        'textarticle' => $faker->text,
    ];
});