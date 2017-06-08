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
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;
    static $role = array('Beheerder', 'Invaller', 'Directeur');

    return [
        'first_name' => $faker->firstName($gender = null|'male'|'female'),
        'last_name' => $faker->lastName,
        'role' => array_rand($role),
        'location' => $faker->city
    ];
});
