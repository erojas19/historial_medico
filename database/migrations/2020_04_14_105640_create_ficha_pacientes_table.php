<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFichaPacientesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha_pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_registro');
            $table->integer('medico_id')->unsigned();
            $table->integer('paciente_id')->unsigned();
            $table->integer('municipio_id')->unsigned();
            $table->text('enfermedades_antecedentes');
            $table->text('medicacion_actual');
            $table->string('seguro_salud');
            $table->text('convivientes');
            $table->text('contacto_personas');
            $table->string('sintomas');
            $table->string('diagnostico');
            $table->text('conducta');
            $table->text('seguimiento_paciente');
            $table->text('observaciones');
            $table->text('calles_frecuentadas');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ficha_pacientes');
    }
}
