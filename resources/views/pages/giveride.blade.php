@extends('layouts.app')
@section('content')

 <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                         <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                         <li class="breadcrumb-item active" aria-current="page">Give A Ride</li>
                     </ol>
                 </nav>
             </div>
         </div>
     <div class="row">
         <div class="col-md-12">
             <p><h5>Enter the following Details</h5></p>
             {!! Form::open([ 'method' => 'POST' ]) !!}
             <div class="form-group">
                 {{ Form::label('title', 'Origin') }}
                 {{ Form::text('title','',['class' => 'form-control', 'placeholder' => 'Origin']) }}
             </div>
             <div class="form-group">
                 {{ Form::label('title', 'Destination') }}
                 {{ Form::text('title','',['class' => 'form-control', 'placeholder' => 'Destination']) }}
             </div>
             <div class="form-group">
                 {{ Form::label('title', 'Capacity') }}
                 {{ Form::text('title','',['class' => 'form-control', 'placeholder' => 'Capacity']) }}
             </div>
             {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
             {!! Form::close() !!}

         </div>
     </div>
 </div>
@endsection