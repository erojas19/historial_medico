<!-- Fecha Registro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_registro', 'Fecha Registro:') !!}
    {!! Form::text('fecha_registro', null, ['class' => 'form-control','id'=>'fecha_registro']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#fecha_registro').datepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Medico Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('medico_id', 'Medico Id:') !!}
    {!! Form::select('medico_id', $medicoItems, null, ['class' => 'form-control','id'=>'medico_id']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#medico_id').select2();
    </script>
@endpush

<!-- Paciente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paciente_id', 'Paciente Id:') !!}
    {!! Form::select('paciente_id', $pacienteItems, null, ['class' => 'form-control','id'=>'paciente_id']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#paciente_id').select2();
    </script>
@endpush

<!-- Municipio Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('municipio_id', 'Municipio Id:') !!}
    {!! Form::select('municipio_id', $municipioItems, null, ['class' => 'form-control','id'=>'municipio_id']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#municipio_id').select2()
    </script>
@endpush

<!-- Enfermedades Antecedentes Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('enfermedades_antecedentes', 'Enfermedades Antecedentes:') !!}
    {!! Form::textarea('enfermedades_antecedentes', null, ['class' => 'form-control']) !!}
</div>

<!-- Medicacion Actual Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('medicacion_actual', 'Medicacion Actual:') !!}
    {!! Form::textarea('medicacion_actual', null, ['class' => 'form-control']) !!}
</div>

<!-- Seguro Salud Field -->
<div class="form-group col-sm-6">
    {!! Form::label('seguro_salud', 'Seguro Salud:') !!}
    {!! Form::text('seguro_salud', null, ['class' => 'form-control']) !!}
</div>

<!-- Convivientes Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('convivientes', 'Convivientes:') !!}
    {!! Form::textarea('convivientes', null, ['class' => 'form-control']) !!}
</div>

<!-- Contacto Personas Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('contacto_personas', 'Contacto Personas:') !!}
    {!! Form::textarea('contacto_personas', null, ['class' => 'form-control']) !!}
</div>

<!-- Sintomas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sintomas', 'Sintomas:') !!}
    {!! Form::text('sintomas', null, ['class' => 'form-control']) !!}
</div>

<!-- Diagnostico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('diagnostico', 'Diagnostico:') !!}
    {!! Form::text('diagnostico', null, ['class' => 'form-control']) !!}
</div>

<!-- Conducta Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('conducta', 'Conducta:') !!}
    {!! Form::textarea('conducta', null, ['class' => 'form-control']) !!}
</div>

<!-- Seguimiento Paciente Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('seguimiento_paciente', 'Seguimiento Paciente:') !!}
    {!! Form::textarea('seguimiento_paciente', null, ['class' => 'form-control']) !!}
</div>

<!-- Observaciones Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('observaciones', 'Observaciones:') !!}
    {!! Form::textarea('observaciones', null, ['class' => 'form-control']) !!}
</div>

<!-- Calles Frecuentadas Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('calles_frecuentadas', 'Calles Frecuentadas:') !!}
    {!! Form::textarea('calles_frecuentadas', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('fichaPacientes.index') }}" class="btn btn-default">Cancel</a>
</div>
