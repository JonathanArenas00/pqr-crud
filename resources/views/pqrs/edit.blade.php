@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Pqr
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($pqr, ['route' => ['pqrs.update', $pqr->id], 'method' => 'patch']) !!}

                        @include('pqrs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection