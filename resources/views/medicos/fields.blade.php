<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control','minlength' => 3]) !!}
</div>

<!-- Paterno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paterno', 'Paterno:') !!}
    {!! Form::text('paterno', null, ['class' => 'form-control']) !!}
</div>

<!-- Materno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('materno', 'Materno:') !!}
    {!! Form::text('materno', null, ['class' => 'form-control']) !!}
</div>

<!-- Especialidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('especialidad', 'Especialidad:') !!}
    {!! Form::text('especialidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control','minlength' => 3,'maxlength' => 50]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('medicos.index') }}" class="btn btn-default">Cancel</a>
</div>
