<!-- Numerocontrato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numerocontrato', 'Numerocontrato:') !!}
    {!! Form::text('numerocontrato', null, ['class' => 'form-control']) !!}
</div>

<!-- Horascontratadas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('horascontratadas', 'Horascontratadas:') !!}
    {!! Form::text('horascontratadas', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechainicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechainicio', 'Fechainicio:') !!}
    {!! Form::date('fechainicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechafin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechafin', 'Fechafin:') !!}
    {!! Form::date('fechafin', null, ['class' => 'form-control']) !!}
</div>

<!-- Docente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('docente_id', 'Docente Id:') !!}
    {!! Form::select('docente_id', $docente, null, ['class' => 'form-control']) !!}
</div>

<!-- Tipocontrato Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipocontrato_id', 'Tipocontrato Id:') !!}
    {!! Form::select('tipocontrato_id', $tipocontrato, null, ['class' => 'form-control']) !!}
</div>

<!-- Jornada Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jornada_id', 'Jornada Id:') !!}
    {!! Form::select('jornada_id', $jornada, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('contratos.index') !!}" class="btn btn-default">Cancel</a>
</div>
