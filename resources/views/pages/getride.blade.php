@extends('layouts.app')
@section('content')



    <h1>Get A ride</h1>
    @if(count($posts) > 0)

        <table class="table table-striped text-center">
            <thead>
            <tr class="table-primary ">
                <th scope="col">#</th>
                <th scope="col">Origin</th>
                <th scope="col">Destination</th>
                <th scope="col">Space Available</th>
                <th scope="col">Driver</th>
                <th scope="col">Book A Ride</th>
            </tr>
            </thead>
            <tbody>
            {!! Form::open(['action'=>'PostRideController@mail','url'=>'send/email','method'=>'POST' ]) !!}
            @foreach($posts as $post)

                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->origin }}{!! Form::text('origin', $post->id, ['input type' => 'hidden']) !!}</td>
                    <td>{{ $post->destination }}{!! Form::text('destination', $post->destination, ['input type' => 'hidden']) !!}</td>
                    <td>{{ $post->capacity }}{!! Form::text('capacity', $post->capacity, ['input type' => 'hidden']) !!}</td>
                    <td>{{ $post->user['name']  }}{!! Form::text('username', $post->user['name'], ['input type' => 'hidden']) !!}</td>
                    <td>{{ Form::submit('Book', ['class' => 'btn btn-primary btn-success'])  }}</td>
                </tr>

            @endforeach
            {!! Form::close() !!}
            </tbody>
        </table>

    @else
        <p> No posts found.</p>
    @endif



@endsection