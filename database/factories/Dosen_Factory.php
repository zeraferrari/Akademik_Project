<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Data_Dosen;
use Faker\Generator as Faker;

$factory->define(Data_Dosen::class, function (Faker $faker) {
    return [
        'Nama'      => $faker->name,
        'NIP'       => $faker->numberBetween($min = 1000000000, $max = 2000000000),
        'Email'     => $faker->email,
        'Password'  => Hash::make($faker->password)
    ];
});
