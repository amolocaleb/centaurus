<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Email;
use Faker\Generator as Faker;

$factory->define(Email::class, function (Faker $faker) {
    return [
        'heading' => $faker->sentence(5),
        'to'    =>  $faker->email,
        'sender'    =>  $faker->safeEmail,
        'message'   =>  $faker->paragraphs(3,true),
    ];
});
