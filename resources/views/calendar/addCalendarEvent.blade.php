@extends('layouts.master')

@section('content')
    <h1>{{config('app.name')}}</h1>

    <h2>Add New Calender Event!</h2>

    <form method='POST' action='/user-profile' class="calendarEventContainer">
        <div class='createNewEventContainer>'>
            {{ csrf_field() }}
            <input type="text" name="title" id='title' value='Event Title'>
            <input type="text" name="description" id='description' value='Event Description'>
            <input type='date' name='startDate' id='startDate' value=''>
            <input type='date' name='endDate' id='endDate' value=''>
            <input type="submit" class='postPhoto' name='postPhoto' value='Adding Something New'>
        </div>
    </form>
@endsection