<div class="table-responsive">
    <table class="table" id="pacientes-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Paterno</th>
        <th>Materno</th>
        <th>Telefono</th>
        <th>Celular</th>
        <th>Direccion</th>
        <th>Zona</th>
        <th>Edad</th>
        <th>Sexo</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pacientes as $paciente)
            <tr>
                <td>{{ $paciente->nombre }}</td>
                <td>{{ $paciente->paterno }}</td>
                <td>{{ $paciente->materno }}</td>
                <td>{{ $paciente->telefono }}</td>
                <td>{{ $paciente->celular }}</td>
                <td>{{ $paciente->direccion }}</td>
                <td>{{ $paciente->zona }}</td>
                <td>{{ $paciente->edad }}</td>
                <td>{{ $paciente->sexo }}</td>
                    <td>
                    {!! Form::open(['route' => ['pacientes.destroy', $paciente->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pacientes.show', [$paciente->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('pacientes.edit', [$paciente->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
