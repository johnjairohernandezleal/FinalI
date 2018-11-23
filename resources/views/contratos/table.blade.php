<table class="table table-responsive" id="contratos-table">
    <thead>
        <tr>
            <th>Numerocontrato</th>
        <th>Horascontratadas</th>
        <th>Fechainicio</th>
        <th>Fechafin</th>
        <th>Docente Id</th>
        <th>Tipocontrato Id</th>
        <th>Jornada Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($contratos as $contrato)
        <tr>
            <td>{!! $contrato->numerocontrato !!}</td>
            <td>{!! $contrato->horascontratadas !!}</td>
            <td>{!! $contrato->fechainicio !!}</td>
            <td>{!! $contrato->fechafin !!}</td>
            <td>{!! $contrato->Docente->nombre  !!}</td>
            <td>{!! $contrato->TipoContrato->nombre !!}</td>
            <td>{!! $contrato->Jornada->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['contratos.destroy', $contrato->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('contratos.show', [$contrato->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('contratos.edit', [$contrato->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>