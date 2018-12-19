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
            'events' => $events,
            'user' => $user
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
        ]);

        $startDate = $request->startDate;
        $phpStartDate = date('Y-m-d', strtotime($startDate));
        $endDate = $request->endDate;
        $phpEndDate = date('Y-m-d', strtotime($endDate));

        //dd($startDate);

        $event = new Event();
        $user_id = Auth::id();

        $event->title = $request->title;
        $event->description = $request->description;
        $event->start_date = $phpStartDate;
        $event->end_date = $phpEndDate;

        $event->user_id = $user_id;
        $event->save();


        return redirect('/user-profile')->with([
            'alert' => 'A new event was added to your schedule'
        ]);
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
    //dd($request);
        #VALIDATION NEEDED!
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $event = Event::find($id);

        $startDate = $request->startDate;
        $phpStartDate = date('Y-m-d', strtotime($startDate));
        $endDate = $request->endDate;
        $phpEndDate = date('Y-m-d', strtotime($endDate));

        $user_id = Auth::id();

        $event->title = $request->title;
        $event->description = $request->description;
        $event->start_date = $phpStartDate;
        $event->end_date = $phpEndDate;

        $event->user_id = $user_id;
        //dd($startDate);
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
