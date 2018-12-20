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
            'Basketball Game' => 'past',
            'Kiwi and Kobe Vet Appointment' => 'future',
            'Referee Weekly Call' => 'past'
        ];

        foreach ($events as $title => $statuses) {
            # First get the event
            $event = Event::where('title', 'like', $title)->first();

            #get the status
            $status = Status::where('name', 'like', $statuses)->first();

            $event->status()->save($status);
        }
    }
}