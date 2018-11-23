@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Jornada
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($jornada, ['route' => ['jornadas.update', $jornada->id], 'method' => 'patch']) !!}

                        @include('jornadas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection