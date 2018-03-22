<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(avaa\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
<<<<<<< HEAD
        'password' => '$2y$10$rYXRkrnr5g74uxCGZGnioO/ZQMHr8xlGfz/cVsMtWEQoM6atMC2TS', // secret
=======
        'password' => '$2y$10$pOVcprZIVKUvlveOagvYPuUmrMdj6a8wUMIBLZyziemw6bzRwtqa2', // secret
>>>>>>> c0145324c4a8bf568e4ce0432d7de48797b1a5e8
        'remember_token' => str_random(10),
    ];
});
