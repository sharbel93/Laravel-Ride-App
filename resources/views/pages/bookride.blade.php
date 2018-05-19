@extends('layouts.app')
@section('content')
<div Class="container " >
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 ">
            <h1>Your Booking Details</h1>
            {!! Form::open(['action' => ['PostRideController@update', $posts->id], 'method' => 'POST']) !!}
            <div class="form-group">

                <h6> <span style="font-size: 18px;"> Origin : </span> {{ $posts->origin }}  {{ Form::text('origin', $posts->origin,['class' => 'form-control', 'placeholder' => 'Title', 'input type' => 'hidden']) }}
                </h6>
            </div>
            <div class="form-group">

                <h6> <span style="font-size: 18px;"> Destination : </span> {{ $posts->destination }}  {{ Form::text('destination', $posts->destination,['class' => 'form-control', 'placeholder' => 'Title', 'input type' => 'hidden']) }}</h6>
            </div>
            <div class="form-group">

                <h6>   <span style="font-size: 18px;"> Capacity : </span> {{ $posts->capacity }}   {{ Form::text('capacity', $posts->capacity,['class' => 'form-control', 'placeholder' => 'Title', 'input type' => 'hidden']) }}</h6>
            </div>
            <div class="form-group">

                <h6>  <span style="font-size: 18px;"> Driver : </span> {{ $posts->user['name'] }}  {{ Form::text('username', $posts->user['name'],['class' => 'form-control', 'placeholder' => 'Title', 'input type' => 'hidden']) }} </h6>
            </div>

            {{ Form::hidden('_method', 'PUT') }}
            {{ Form::submit('Confirm', ['class' => 'btn btn-primary']) }}
            {!! Form::close() !!}

        </div>
    </div>
</div>

@endsection
