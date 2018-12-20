@extends('layouts.master')

@section('content')

    <h3>Edit Calender Event!</h3>

    @if(session('alert'))
        <div class='alert'>
            {{ session('alert') }}
        </div>
    @endif

    <form method='POST' action='/user-profile/{{ $event->id }}' class="calendarEventContainer">
        <div class='createNewEventContainer>'>

            {{ method_field('put') }}
            {{ csrf_field() }}

            Title<input type="text" name="title" id='title' value='{{ old('title', $event->title) }}'>
            @include('modules.field-error', ['field' => 'title'])

            Description<input type="text"
                              name="description"
                              id='description'
                              value='{{ old('description', $event->description) }}'>
            @include('modules.field-error', ['field' => 'description'])

            Start Date <input type='date'
                              name='startDate'
                              id='startDate'
                              value='{{ old('startDate' ,$event->start_date) }}'>
            @include('modules.field-error', ['field' => 'startDate'])

            End Date<input type='date' name='endDate' id='endDate' value='{{ old('endDate', $event->end_date) }}'>
            @include('modules.field-error', ['field' => 'endDate'])

            <input type="submit" class='addEvent' name='addEvent' value='Update Event'>
        </div>
    </form>

    @if(count($errors) > 0)
        <ul class='alert'>
            Please correct the errors above.
        </ul>
    @endif
@endsection