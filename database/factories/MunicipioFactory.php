<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Municipio;
use Faker\Generator as Faker;

$factory->define(Municipio::class, function (Faker $faker) {

    return [
        'departamento' => $faker->word,
        'provincia' => $faker->word,
        'municipio' => $faker->word,
        'localidad' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
