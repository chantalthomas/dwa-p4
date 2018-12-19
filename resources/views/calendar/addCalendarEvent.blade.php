@extends('layouts.master')

@section('content')

    <h3>Add New Calender Event!</h3>

    <form method='POST' action='/user-profile' class="calendarEventContainer">
        <div class='createNewEventContainer>'>
            {{ csrf_field() }}
            <input type="text" name="title" id='title' value='{{ old('title') }}'>
            @include('modules.field-error', ['field' => 'title'])

            <input type="text" name="description" id='description' value='{{ old('description') }}'>
            @include('modules.field-error', ['field' => 'description'])

            <input type='date' name='startDate' id='startDate' value='{{ old('startDate') }}'>
            @include('modules.field-error', ['field' => 'startDate'])

            <input type='date' name='endDate' id='endDate' value='{{ old('endDate') }}'>
            @include('modules.field-error', ['field' => 'startDate'])

            <input type="submit" class='addEvent' name='addEvent' value='Adding Something New'>
        </div>
    </form>

    @if(count($errors) > 0)
        <ul class='alert'>
            Please correct the errors above.
        </ul>
    @endif
@endsection