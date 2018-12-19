<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MaddHatter\LaravelFullcalendar\Calendar;
use App\Event;
use App\User;
use Illuminate\Support\Facades\Auth;

class CalendarController extends Controller
{
    #READ
    public function index(Request $request)
    {
        $user = $request->user();
        $events = $user->events()->orderBy('created_at')->get();


        return view('calendar.userProfile')->with([
            'events' => $events
        ]);
    }

    public function showEvent($id)
    {
        $event = Event::find($id);
        return view('calendar.showEvent')->with([
            'event' => $event
        ]);
    }

    #CREATE
    public function addEvent()
    {
        return view('calendar.addCalendarEvent');
    }

    public function store(Request $request)
    {
        #VALIDATION NEEDED!
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $startDate = $request->start_date;
        $phpStartDate = date('Y-m-d', strtotime($startDate));
        $endDate = $request->start_date;
        $phpEndDate = date('Y-m-d', strtotime($endDate));


        $event = new Event();
        $user_id = Auth::id();

        $event->title = $request->title;
        $event->description = $request->description;
        $event->start_date = $phpStartDate;
        $event->end_date = $phpEndDate;

        $event->user_id = $user_id;
        $event->save();


        return redirect('/user-profile');
    }

    #UPDATE
    public function edit(Request $request, $id)
    {
        $event = Event::find($id);

        return view('calendar.editCalendarEvent')->with([
            'event' => $event,
        ]);
    }

    public function update(Request $request, $id)
    {
        #VALIDATION NEEDED!
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $event = Event::find($id);

        $startDate = $request->start_date;
        $phpStartDate = date('Y-m-d', strtotime($startDate));
        $endDate = $request->start_date;
        $phpEndDate = date('Y-m-d', strtotime($endDate));

        $user_id = Auth::id();

        $event->title = $request->title;
        $event->description = $request->description;
        $event->start_date = $phpStartDate;
        $event->end_date = $phpEndDate;

        $event->user_id = $user_id;
        $event->save();

        return redirect('/user-profile/'.$id.'/edit')->with([
            'alert' => 'Your changes were saved.'
        ]);
    }

    #DELETE
    public function delete($id)
    {
        $event = Event::find($id);
        if (!$event) {
            return redirect('/user-profile')->with([
                'alert' => 'Event not found.'
            ]);
        }
        else{
            return view('calendar.deleteCalendarEvent')->with([
                'event' => $event
            ]);
        }
    }

    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();

        return redirect('/user-profile')->with([
            'alert' => '"' . $event->totle . '" was removed.'
        ]);
    }
}
