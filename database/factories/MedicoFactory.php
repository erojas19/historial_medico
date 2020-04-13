<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Medico;
use Faker\Generator as Faker;

$factory->define(Medico::class, function (Faker $faker) {

    return [
        'nombre' => $faker->word,
        'paterno' => $faker->word,
        'materno' => $faker->word,
        'especialidad' => $faker->word,
        'telefono' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
