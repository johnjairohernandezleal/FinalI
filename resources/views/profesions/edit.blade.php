@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Profesion
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($profesion, ['route' => ['profesions.update', $profesion->id], 'method' => 'patch']) !!}

                        @include('profesions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection