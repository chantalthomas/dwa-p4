<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MaddHatter\LaravelFullcalendar\Calendar;
use App\Event;

class CalendarController extends Controller
{
    #READ
    public function index()
    {
        $events = Event::orderBy('created_at')->get();

        //dd($events);
        return view('calendar.userProfile')->with([
            'events' => $events
        ]);
    }

    #CREATE
    public function addEvent()
    {
        return view('calendar.addCalendarEvent');
    }

    public function store(Request $request)
    {
        /*$startDate = date('Y-m-d', strtotime($request->start_date));
        $endDate = date('Y-m-d', strtotime($request->end_date));
    */
        $event = new Event();
        $event->title = $request->title;
        $event->description = $request->description;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;

        //dd($request->start_date);


        $event->save();


        return redirect('/user-profile');
    }
}
