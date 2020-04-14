<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $paciente->nombre }}</p>
</div>

<!-- Paterno Field -->
<div class="form-group">
    {!! Form::label('paterno', 'Paterno:') !!}
    <p>{{ $paciente->paterno }}</p>
</div>

<!-- Materno Field -->
<div class="form-group">
    {!! Form::label('materno', 'Materno:') !!}
    <p>{{ $paciente->materno }}</p>
</div>

<!-- Telefono Field -->
<div class="form-group">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{{ $paciente->telefono }}</p>
</div>

<!-- Celular Field -->
<div class="form-group">
    {!! Form::label('celular', 'Celular:') !!}
    <p>{{ $paciente->celular }}</p>
</div>

<!-- Direccion Field -->
<div class="form-group">
    {!! Form::label('direccion', 'Direccion:') !!}
    <p>{{ $paciente->direccion }}</p>
</div>

<!-- Zona Field -->
<div class="form-group">
    {!! Form::label('zona', 'Zona:') !!}
    <p>{{ $paciente->zona }}</p>
</div>

<!-- Edad Field -->
<div class="form-group">
    {!! Form::label('edad', 'Edad:') !!}
    <p>{{ $paciente->edad }}</p>
</div>

<!-- Sexo Field -->
<div class="form-group">
    {!! Form::label('sexo', 'Sexo:') !!}
    <p>{{ $paciente->sexo }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $paciente->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $paciente->updated_at }}</p>
</div>

