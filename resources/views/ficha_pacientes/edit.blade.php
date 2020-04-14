@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ficha Paciente
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($fichaPaciente, ['route' => ['fichaPacientes.update', $fichaPaciente->id], 'method' => 'patch']) !!}

                        @include('ficha_pacientes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection