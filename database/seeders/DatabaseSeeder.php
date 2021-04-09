<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\MeetingRoom;
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

        //Seed database
        Employee::factory(25)->create();
        MeetingRoom::factory(5)->create();



    }
}
