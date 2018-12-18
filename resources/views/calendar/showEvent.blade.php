@extends('layouts.master')

@section('content')
    <h1>{{ $event->title }}</h1>

    <p>
        @include('calendar._event')
    </p>
@endsection