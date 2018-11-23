<table class="table table-responsive" id="docentes-table">
    <thead>
        <tr>
            <th>Documento</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Profesion Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($docentes as $docente)
        <tr>
            <td>{!! $docente->documento !!}</td>
            <td>{!! $docente->nombre !!}</td>
            <td>{!! $docente->apellidos !!}</td>
            <td>{!! $docente->telefono !!}</td>
            <td>{!! $docente->email !!}</td>
            <td>{!! $docente->profesions->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['docentes.destroy', $docente->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('docentes.show', [$docente->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('docentes.edit', [$docente->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>