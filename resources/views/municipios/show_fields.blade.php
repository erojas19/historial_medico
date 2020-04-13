<!-- Departamento Field -->
<div class="form-group">
    {!! Form::label('departamento', 'Departamento:') !!}
    <p>{{ $municipio->departamento }}</p>
</div>

<!-- Provincia Field -->
<div class="form-group">
    {!! Form::label('provincia', 'Provincia:') !!}
    <p>{{ $municipio->provincia }}</p>
</div>

<!-- Municipio Field -->
<div class="form-group">
    {!! Form::label('municipio', 'Municipio:') !!}
    <p>{{ $municipio->municipio }}</p>
</div>

<!-- Localidad Field -->
<div class="form-group">
    {!! Form::label('localidad', 'Localidad:') !!}
    <p>{{ $municipio->localidad }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $municipio->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $municipio->updated_at }}</p>
</div>

