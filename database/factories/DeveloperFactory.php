<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Developer;
use Faker\Generator as Faker;

$factory->define(Developer::class, function (Faker $faker) {
    return [
        'name'  =>  $faker->firstName().' '.$faker->lastName,
        'dob'   =>  $faker->dateTimeBetween('-30 years','-15 years'),
        'email' =>  $faker->safeEmail,
        'title' =>  $faker->jobTitle,
        'bio'   =>  $faker->paragraph(),
        'profile_pic' => $faker->url
    ];
});
