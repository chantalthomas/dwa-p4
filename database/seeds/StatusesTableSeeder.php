<?php

use Illuminate\Database\Seeder;
use App\Status;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = ['past', 'present', 'future'];

        foreach ($statuses as $statusName) {
            $status = new Status();
            $status->name = $statusName;
            $status->save();
        }
    }
}
