<div class="table-responsive">
    <table class="table" id="municipios-table">
        <thead>
            <tr>
                <th>Departamento</th>
        <th>Provincia</th>
        <th>Municipio</th>
        <th>Localidad</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($municipios as $municipio)
            <tr>
                <td>{{ $municipio->departamento }}</td>
            <td>{{ $municipio->provincia }}</td>
            <td>{{ $municipio->municipio }}</td>
            <td>{{ $municipio->localidad }}</td>
                <td>
                    {!! Form::open(['route' => ['municipios.destroy', $municipio->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('municipios.show', [$municipio->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('municipios.edit', [$municipio->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
