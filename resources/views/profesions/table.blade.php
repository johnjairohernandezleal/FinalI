<table class="table table-responsive" id="profesions-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($profesions as $profesion)
        <tr>
            <td>{!! $profesion->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['profesions.destroy', $profesion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('profesions.show', [$profesion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('profesions.edit', [$profesion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>