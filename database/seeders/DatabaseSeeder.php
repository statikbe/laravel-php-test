<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\MeetingRoom;
use App\Models\ScheduledMeeting;
use App\Models\MeetingAttendees;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
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
            'title' => 'New year',
            'description' => 'Welcome to ' . Carbon::now()->year,
            'status' => 'passed',
            'meeting_room_id' => 1,
            'date_start' => Carbon::now()->setDay(1)->setMonth(1)->setHour(0),
            'date_stop' => Carbon::now()->setDay(1)->setMonth(1)->setHour(2),
            'organizer_id' => 4,
            'created_at' => Carbon::now()->setDay(20)->setMonth(12)->subYear(),
            'updated_at' => Carbon::now()->setDay(20)->setMonth(12)->subYear(),
        ]);
        DB::table('scheduled_meetings')->insert([
            'id' => 2,
            'title' => 'INTLAR',
            'description' => 'Meeting about internal Laravel development.',
            'status' => 'planned',
            'meeting_room_id' => 1,
            'date_start' => Carbon::now()->addDays(5)->setHour(12),
            'date_stop' => Carbon::now()->addDays(5)->setHour(14),
            'organizer_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('scheduled_meetings')->insert([
            'id' => 3,
            'title' => 'Weekly meeting',
            'description' => 'Meeting used to talk about everything that has been going on: issues, questions, planning, etc.',
            'status' => 'planned',
            'meeting_room_id' => 3,
            'date_start' => Carbon::now()->addDays(8)->setHour(12),
            'date_stop' => Carbon::now()->addDays(8)->setHour(14),
            'organizer_id' => 10,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Schema::enableForeignKeyConstraints();


    }
}
