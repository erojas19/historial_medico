<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $medico->nombre }}</p>
</div>

<!-- Paterno Field -->
<div class="form-group">
    {!! Form::label('paterno', 'Paterno:') !!}
    <p>{{ $medico->paterno }}</p>
</div>

<!-- Materno Field -->
<div class="form-group">
    {!! Form::label('materno', 'Materno:') !!}
    <p>{{ $medico->materno }}</p>
</div>

<!-- Especialidad Field -->
<div class="form-group">
    {!! Form::label('especialidad', 'Especialidad:') !!}
    <p>{{ $medico->especialidad }}</p>
</div>

<!-- Telefono Field -->
<div class="form-group">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{{ $medico->telefono }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $medico->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $medico->updated_at }}</p>
</div>

