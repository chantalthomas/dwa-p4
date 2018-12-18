@extends('layouts.master')

@section('content')
    <h1>{{config('app.name')}}</h1>

    <h2>Welcome User!</h2>
    @if($events->count() == 0)
        <p> You do not have anything on your plate! Would you like to update your<a href="/user-profile/create" class="btn btn-default">schedule?</a>
    @else
    <div class='photoContainer'>
        @foreach($events as $event)
            @include('calendar._event')
        @endforeach
    </div>
    @endif
@endsection