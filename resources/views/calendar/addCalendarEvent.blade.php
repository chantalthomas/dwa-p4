@extends('layouts.master')

@section('content')
    <h1>{{config('app.name')}}</h1>

    <h2>Add New Calender Event!</h2>

    <form method='POST' action='/user-profile' class="calendarEventContainer">
        <div class='createNewEventContainer>'>
            {{ csrf_field() }}
            <input type="text" name="title" id='title' value='Event Title'>
            @include('modules.field-error', ['field' => 'title'])

            <input type="text" name="description" id='description' value='Event Description'>
            @include('modules.field-error', ['field' => 'description'])

            <input type='date' name='startDate' id='startDate' value=''>
            @include('modules.field-error', ['field' => 'startDate'])

            <input type='date' name='endDate' id='endDate' value=''>
            @include('modules.field-error', ['field' => 'startDate'])

            <input type="submit" class='postPhoto' name='postPhoto' value='Adding Something New'>
        </div>
    </form>

    @if(count($errors) > 0)
        <ul class='alert'>
            Please correct the errors above.
        </ul>
    @endif
@endsection