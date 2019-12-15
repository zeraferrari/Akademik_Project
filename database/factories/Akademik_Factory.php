<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Data_Akademik;
use Faker\Generator as Faker;
use Faker\Provider\Base;
use Faker\Provider\Internet;

$factory->define(Data_Akademik::class, function (Faker $faker) {
    return [
        'Nama'      => $faker->name,
        'NIM'       => $faker->numberBetween($min = 1715015000, $max = 1715015200),
        'Email'     => $faker->email,
        'Password'  => Hash::make($faker->password)
    ];
});
