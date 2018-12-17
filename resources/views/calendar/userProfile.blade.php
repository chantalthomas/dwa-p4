@extends('layouts.master')

@section('content')
    <h1>{{config('app.name')}}</h1>

    <h2>Welcome User!</h2>

    <a href="/user-profile/create" class="btn btn-default">Add a New Event</a>
    <div class='photoContainer'>
        @foreach($events as $event)
            @include('calendar._event')
        @endforeach
    </div>
@endsection