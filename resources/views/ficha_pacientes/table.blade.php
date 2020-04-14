<div class="table-responsive">
    <table class="table" id="fichaPacientes-table">
        <thead>
            <tr>
                <th>Fecha Registro</th>
        <th>Medico Id</th>
        <th>Paciente Id</th>
        <th>Municipio Id</th>
        <th>Enfermedades Antecedentes</th>
        <th>Medicacion Actual</th>
        <th>Seguro Salud</th>
        <th>Convivientes</th>
        <th>Contacto Personas</th>
        <th>Sintomas</th>
        <th>Diagnostico</th>
        <th>Conducta</th>
        <th>Seguimiento Paciente</th>
        <th>Observaciones</th>
        <th>Calles Frecuentadas</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($fichaPacientes as $fichaPaciente)
            <tr>
                <td>{{ $fichaPaciente->fecha_registro }}</td>
            <td>{{ $fichaPaciente->medico_id }}</td>
            <td>{{ $fichaPaciente->paciente_id }}</td>
            <td>{{ $fichaPaciente->municipio_id }}</td>
            <td>{{ $fichaPaciente->enfermedades_antecedentes }}</td>
            <td>{{ $fichaPaciente->medicacion_actual }}</td>
            <td>{{ $fichaPaciente->seguro_salud }}</td>
            <td>{{ $fichaPaciente->convivientes }}</td>
            <td>{{ $fichaPaciente->contacto_personas }}</td>
            <td>{{ $fichaPaciente->sintomas }}</td>
            <td>{{ $fichaPaciente->diagnostico }}</td>
            <td>{{ $fichaPaciente->conducta }}</td>
            <td>{{ $fichaPaciente->seguimiento_paciente }}</td>
            <td>{{ $fichaPaciente->observaciones }}</td>
            <td>{{ $fichaPaciente->calles_frecuentadas }}</td>
                <td>
                    {!! Form::open(['route' => ['fichaPacientes.destroy', $fichaPaciente->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('fichaPacientes.show', [$fichaPaciente->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('fichaPacientes.edit', [$fichaPaciente->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
