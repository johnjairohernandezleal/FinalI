<table class="table table-responsive" id="tipoContratos-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tipoContratos as $tipoContrato)
        <tr>
            <td>{!! $tipoContrato->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoContratos.destroy', $tipoContrato->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoContratos.show', [$tipoContrato->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoContratos.edit', [$tipoContrato->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>