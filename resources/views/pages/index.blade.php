@extends('layouts.app')
@section('content')
    {{-- Only guest users should access --}}
    @guest
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
                        <td> <button type="button" class="btn btn-success"><a href="/login" style="color: white;" >Book</a></button></td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        @else
            <p> No posts found.</p>
        @endif
    @endguest

{{-- Only authourized users should access --}}
    @auth
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
                        <td><a href="/posts/{{ $post->id }}/edit" class="btn btn-success">Book</a></td>
                    </tr>
                @endforeach

                </tbody>
            </table>

        @else
            <p> No posts found.</p>
        @endif

    @endauth
@endsection
