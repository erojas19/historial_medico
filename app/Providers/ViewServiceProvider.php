<?php

namespace App\Providers;
use App\Models\Paciente;
use App\Models\Municipio;
use App\Models\Medico;

use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['ficha_pacientes.fields'], function ($view) {
            $pacienteItems = Paciente::pluck('nombre','id')->toArray("nombre","id");
            $view->with('pacienteItems', $pacienteItems);
        });
        View::composer(['ficha_pacientes.fields'], function ($view) {
            $municipioItems = Municipio::pluck('localidad','id')->toArray("localidad","id");
            $view->with('municipioItems', $municipioItems);
        });
        View::composer(['ficha_pacientes.fields'], function ($view) {
            $medicoItems = Medico::pluck('nombre','id')->toArray('nombre','id');
            $view->with('medicoItems', $medicoItems);
        });
        //
    }
}