<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\FichaPaciente;
use Faker\Generator as Faker;

$factory->define(FichaPaciente::class, function (Faker $faker) {

    return [
        'fecha_registro' => $faker->word,
        'medico_id' => $faker->randomDigitNotNull,
        'paciente_id' => $faker->randomDigitNotNull,
        'municipio_id' => $faker->randomDigitNotNull,
        'enfermedades_antecedentes' => $faker->text,
        'medicacion_actual' => $faker->text,
        'seguro_salud' => $faker->word,
        'convivientes' => $faker->text,
        'contacto_personas' => $faker->text,
        'sintomas' => $faker->word,
        'diagnostico' => $faker->word,
        'conducta' => $faker->text,
        'seguimiento_paciente' => $faker->text,
        'observaciones' => $faker->text,
        'calles_frecuentadas' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
