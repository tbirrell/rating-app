<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'name' =>  $faker->word,
        'media_type' => $faker->randomElement(['book','movie','show','episode']),
    ];
});
