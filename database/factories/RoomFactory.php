<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Room::class, function (Faker $faker) {
    return [
        'name' => 'Room '.$faker->unique()->numberBetween(1,100)
    ];
});
