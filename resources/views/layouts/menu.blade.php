<li class="{{ Request::is('profesions*') ? 'active' : '' }}">
    <a href="{!! route('profesions.index') !!}"><i class="fa fa-edit"></i><span>Profesions</span></a>
</li>

<li class="{{ Request::is('tipoContratos*') ? 'active' : '' }}">
    <a href="{!! route('tipoContratos.index') !!}"><i class="fa fa-edit"></i><span>Tipo Contratos</span></a>
</li>

<li class="{{ Request::is('jornadas*') ? 'active' : '' }}">
    <a href="{!! route('jornadas.index') !!}"><i class="fa fa-edit"></i><span>Jornadas</span></a>
</li>

<li class="{{ Request::is('docentes*') ? 'active' : '' }}">
    <a href="{!! route('docentes.index') !!}"><i class="fa fa-edit"></i><span>Docentes</span></a>
</li>

<li class="{{ Request::is('contratos*') ? 'active' : '' }}">
    <a href="{!! route('contratos.index') !!}"><i class="fa fa-edit"></i><span>Contratos</span></a>
</li>

