@extends('layouts.master')

@section('content')
    <h2> {{ $user->name }}&#39;s Current Events!</h2>

    @if(session('alert'))
        <div class='alert'>
            {{ session('alert') }}
        </div>
    @endif

    @if($events->count() == 0)
        <p> You do not have anything on your plate! Would you like to update your<a href="/user-profile/create"
                                                                                    class="btn btn-default">schedule?</a>
    @else
        <div class='calendarContainer'>
            @foreach($events as $event)
                @include('calendar._event')
            @endforeach
        </div>
    @endif
@endsection