<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Paciente;
use Faker\Generator as Faker;

$factory->define(Paciente::class, function (Faker $faker) {

    return [
        'nombre' => $faker->word,
        'paterno' => $faker->word,
        'materno' => $faker->word,
        'telefono' => $faker->word,
        'celular' => $faker->word,
        'direccion' => $faker->word,
        'zona' => $faker->word,
        'edad' => $faker->randomDigitNotNull,
        'sexo' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
