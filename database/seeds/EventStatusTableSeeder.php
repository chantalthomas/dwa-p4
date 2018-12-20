<?php

use Illuminate\Database\Seeder;
use App\Event;
use App\Status;

class EventStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        $events = [
            'Basketball Game' => ['past'],
            'Kiwi and Kobe Vet Appointment' => ['future'],
            'Referee Weekly Call' => ['past']
        ];

        #Go through the array of events where title is the key and status is the value
        foreach ($events as $title => $status) {

            # Get the event
            $event = Event::where('title', 'like', $title)->first();

            # Now loop through each tag for this book, adding the pivot
            foreach ($status as $statusName) {
                $eventStatus = Status::where('name', 'LIKE', $statusName)->first();

                #Event object invoking  status relationship method and save the particular status to associate the event and status
                $event->status()->save($eventStatus);
            }
        }
    }
}