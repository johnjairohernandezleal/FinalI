<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $contrato->id !!}</p>
</div>

<!-- Numerocontrato Field -->
<div class="form-group">
    {!! Form::label('numerocontrato', 'Numero contrato:') !!}
    <p>{!! $contrato->numerocontrato !!}</p>
</div>

<!-- Horascontratadas Field -->
<div class="form-group">
    {!! Form::label('horascontratadas', 'Horas contratadas:') !!}
    <p>{!! $contrato->horascontratadas !!}</p>
</div>

<!-- Fechainicio Field -->
<div class="form-group">
    {!! Form::label('fechainicio', 'Fecha inicio:') !!}
    <p>{!! $contrato->fechainicio !!}</p>
</div>

<!-- Fechafin Field -->
<div class="form-group">
    {!! Form::label('fechafin', 'Fecha fin:') !!}
    <p>{!! $contrato->fechafin !!}</p>
</div>

<!-- Docente Id Field -->
<div class="form-group">
    {!! Form::label('docente_id', 'Docente:') !!}
    <p>{!! $contrato->Docente->nombre !!}</p>
</div>

<!-- Tipocontrato Id Field -->
<div class="form-group">
    {!! Form::label('tipocontrato_id', 'Tipocontrato :') !!}
    <p>{!! $contrato->TipoContrato->nombre !!}</p>
</div>

<!-- Jornada Id Field -->
<div class="form-group">
    {!! Form::label('jornada_id', 'Jornada:') !!}
    <p>{!! $contrato->Jornada->nombre!!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $contrato->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $contrato->updated_at !!}</p>
</div>

