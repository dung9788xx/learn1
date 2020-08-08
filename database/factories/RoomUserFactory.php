<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Room_User_Table::class, function (Faker $faker) {
    return [
        'user_id'=>rand(1,50)
    ];
});
