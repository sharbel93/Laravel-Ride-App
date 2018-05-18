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
             {!! Form::open([ 'action' => 'PostRideController@store','method' => 'POST' ]) !!}
             <div class="form-group">
                 {{ Form::label('origin', 'Origin') }}
                 {{ Form::text('origin','',['class' => 'form-control', 'placeholder' => 'Origin']) }}
                 <span class="text-danger">{{ $errors->first('origin') }}</span>
             </div>
             <div class="form-group">
                 {{ Form::label('destination', 'Destination') }}
                 {{ Form::text('destination','',['class' => 'form-control', 'placeholder' => 'Destination']) }}
                 <span class="text-danger">{{ $errors->first('destination') }}</span>

             </div>
             <div class="form-group">
                 {{ Form::label('capacity', 'Capacity') }}
                 {{ Form::number('capacity','',['class' => 'form-control', 'placeholder' => 'Capacity']) }}
                 <span class="text-danger">{{ $errors->first('destination') }}</span>
             </div>
             {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
             {!! Form::close() !!}

         </div>
     </div>
 </div>
@endsection