@extends('layouts.master')

@section('content')
    <h1>{{config('app.name')}}</h1>

    <h2>Add New Calender Event!</h2>

    <form method='POST' action='/user-profile/{{ $event->id }}' class="calendarEventContainer">
        <div class='createNewEventContainer>'>

            {{ method_field('put') }}
            {{ csrf_field() }}

            <input type="text" name="title" id='title' value='{{ old('title', $event->title) }}'>
            <input type="text" name="description" id='description' value='{{ old('description', $event->description) }}'>
            <input type='date' name='startDate' id='startDate' value='{{ old('startDate' ,$event->start_date) }}'>
            <input type='date' name='endDate' id='endDate' value='{{ old('endDate', $event->end_date) }}'>
            <input type="submit" class='postPhoto' name='postPhoto' value='Adding Something New'>
        </div>
    </form>
@endsection