<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\MeetingRoom;
use App\Models\ScheduledMeeting;
use App\Models\MeetingAttendees;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //First Truncate all and start fresh
        DB::table('employees')->truncate();
        DB::table('meeting_rooms')->truncate();
        DB::table('meeting_attendees')->truncate();

        //Seed database
        Employee::factory(25)->create();
        MeetingRoom::factory(5)->create();
        MeetingAttendees::factory(10)->create();

        //Seed scheduled meetings
        DB::table('scheduled_meetings')->insert([
            'id' => 1,
            'title' => 'INTLAR',
            'description' => 'Meeting about internal Laravel development.',
            'status' => 'planned',
            'meeting_room_id' => 1,
            'date_start' => '2021-04-18 12:00:00',
            'date_stop' => '2021-04-18 13:00:00',
            'organizer_id' => 4,
            'created_at' => '2021-04-16 16:00:00',
            'updated_at' => '2021-04-16 16:00:00'
        ]);

        DB::table('scheduled_meetings')->insert([
            'id' => 2,
            'title' => 'Weekly meeting',
            'description' => 'Meeting used to talk about everything that has been going on: issues, questions, planning, etc.',
            'status' => 'planned',
            'meeting_room_id' => 3,
            'date_start' => '2021-04-20 12:00:00',
            'date_stop' => '2021-04-20 13:00:00',
            'organizer_id' => 10,
            'created_at' => '2021-04-16 16:00:00',
            'updated_at' => '2021-04-16 16:00:00'
        ]);


    }
}
