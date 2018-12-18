<?php

use Illuminate\Database\Seeder;
use App\Event;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = [
            ['Basketball Game', 'Potomac vs. Mason Girl Varsity Game at 7 PM', '2018-12-15', '2018-12-15'],
            ['Internship Meeting', 'Introduction to the new data scientist joining the team', '2018-12-11', '2018-12-11'],
            ['Referee Weekly Call', 'Going over 2018-2019 points of emphasis', '2018-12-12', '2018-12-12'],
            ['Kiwi and Kobe Vet Appointment', 'Semi-annual check up',  '2018-12-28', '2018-12-28'],
            ['Hannahs Wedding', 'Be ready for all Maid of Honor duties', '2018-12-06', '2018-12-10']
        ];
        $count = count($events);

        # Loop through each event, adding them to the database
        foreach ($events as $eventData) {
            $event = new Event();

            $event->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $event->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $event->title = $eventData[0];
            $event->description = $eventData[1];
            $event->start_date = $eventData[2];
            $event->end_date = $eventData[3];
            $event->user_id = 1;
            $event->save();

            $count--;
        }
    }
}
