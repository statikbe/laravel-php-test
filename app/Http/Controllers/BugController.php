<?php

namespace App\Http\Controllers;

use App\Models\ScheduledMeeting;
use Illuminate\Database\Eloquent\Model;

class BugController extends Controller
{
    public function index()
    {
        $scheduledMeetings = ScheduledMeeting::all().with('meeting_room');
        dd($scheduledMeetings);
        return view('pages.bugs.index');
    }
}
