<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Message::class, function (Faker $faker) {
    return [
        'user_id'=>rand(1,99),
        'room_id'=>rand(1,10),
        'content' => $faker->paragraph(2)
    ];
});
