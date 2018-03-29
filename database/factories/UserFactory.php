<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application.... Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/
/*
$factory->define(avaa\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
*/

$factory->define(avaa\User::class, function (Faker $faker)
{
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->email,
        'password' => bcrypt('123456'), // secret
        'remember_token' => str_random(10),
        'cedula' => $faker->unique()->numberBetween($min = 10000, $max = 90000),
        'rol' => 'becario',

    ];
});