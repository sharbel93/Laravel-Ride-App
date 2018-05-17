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
            @foreach($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->origin }}</td>
                    <td>{{ $post->destination }}</td>
                    <td>{{ $post->capacity }}</td>
                    <td>{{ $post->user['name']  }}</td>
                    <td> <button type="button" class="btn btn-success">Book</button></td>
                </tr>
            @endforeach

            </tbody>
        </table>

    @else
        <p> No posts found.</p>
    @endif



@endsection