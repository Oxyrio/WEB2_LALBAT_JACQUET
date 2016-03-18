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

$factory->define(App\Models\Comment::class, function (Faker\Generator $faker) {
    return [
        'commentaire' => $faker->text(150),
        'article_id' => $faker->numberBetween(1,10),
        'user_id' => $faker->numberBetween(1,10),
    ];
});

$factory->define(App\Models\Post::class, function (Faker\Generator $faker) {
    return [

        'user_id' => $faker->numberBetween(1,10),
        'titleprojet' => $faker->title,
        'commanditaire' => $faker->name,
        'command_metier' => $faker->company,
        'command_tel' => $faker->phoneNumber,
        'command_mail' => $faker->email,
        'command_ville' => $faker->address,
        'decisionnaire' => $faker->name,
        'decid_metier' => $faker->company, // Pas de faker job i guess...
        'decid_tel' => $faker->phoneNumber,
        'decid_mail' => $faker->email,
        'decid_ville' => $faker->address,
        'type_projet' => $faker->text(150),
        'contexte' => $faker->text(150),
        'objectifs' => $faker->text(150),
        'textprojet' => $faker->text(150),
        'contraintes' => $faker->text(150),
        'statut' => $faker->text(),
    ];
});