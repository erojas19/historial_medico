



<li class="{{ Request::is('municipios*') ? 'active' : '' }}">
    <a href="{{ route('municipios.index') }}"><i class="fa fa-edit"></i><span>Municipios</span></a>
</li>


<li class="{{ Request::is('medicos*') ? 'active' : '' }}">
    <a href="{{ route('medicos.index') }}"><i class="fa fa-edit"></i><span>Medicos</span></a>
</li>

<li class="{{ Request::is('pacientes*') ? 'active' : '' }}">
    <a href="{{ route('pacientes.index') }}"><i class="fa fa-edit"></i><span>Pacientes</span></a>
</li>



<li class="{{ Request::is('fichaPacientes*') ? 'active' : '' }}">
    <a href="{{ route('fichaPacientes.index') }}"><i class="fa fa-edit"></i><span>Ficha Pacientes</span></a>
</li>

