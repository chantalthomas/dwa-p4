<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Status;

use MaddHatter\LaravelFullcalendar\Facades\Calendar;

class GettingStartedController extends Controller
{
    public function practice4()
    {
        $events = Event::with('status')->get();
        foreach ($events as $event) {
            dump($event->title.' is : ');
            foreach ($event->status as $status) {
                dump($status->name.' ');
            }
        }

    }

    public function  practice3()
    {
        $event = Event::where('title', '=', 'Basketball Game')->first();

        dump($event->toArray());

    }
    public function practice2()
    {
        $event = new Event();
        $events = $event->where('description', 'LIKE', '%ing%')->get();

        if ($events->isEmpty()) {
            dump('No matches found');
        } else {
            foreach ($events as $event) {
                dump($event->description);
            }
        }
    }

    public function practice1()
    {
        $event = new Event();

        $event->title = 'Test';
        $event->description = 'Test';
        $event->start_date = '2018-12-01';
        $event->end_date = '2018-12-02';
        $event->save();

        dump('Added image');
    }

    public function index($n = null)
    {
        $methods = [];
        # If no specific practice is specified, show index of all available methods
        if (is_null($n)) {
            # Build an array of all methods in this class that start with `practice`
            foreach (get_class_methods($this) as $method) {
                if (strstr($method, 'practice')) {
                    $methods[] = $method;
                }
            }

            # Load the view and pass it the array of methods
            return view('practice')->with(['methods' => $methods]);
        } # Otherwise, load the requested method
        else {
            $method = 'practice' . $n;

            # Invoke the requested method if it exists; if not, throw a 404 error
            return (method_exists($this, $method)) ? $this->$method() : abort(404);
        }
    }
}
