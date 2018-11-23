<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $docente->id !!}</p>
</div>

<!-- Documento Field -->
<div class="form-group">
    {!! Form::label('documento', 'Documento:') !!}
    <p>{!! $docente->documento !!}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $docente->nombre !!}</p>
</div>

<!-- Apellidos Field -->
<div class="form-group">
    {!! Form::label('apellidos', 'Apellidos:') !!}
    <p>{!! $docente->apellidos !!}</p>
</div>

<!-- Telefono Field -->
<div class="form-group">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{!! $docente->telefono !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $docente->email !!}</p>
</div>

<!-- Profesion Id Field -->
<div class="form-group">
    {!! Form::label('profesion_id', 'Profesion :') !!}
    <p>{!! $docente->profesions->nombre !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $docente->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $docente->updated_at !!}</p>
</div>

