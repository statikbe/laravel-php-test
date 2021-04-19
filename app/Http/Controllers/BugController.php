<?php

namespace App\Http\Controllers;

use App\Models\ScheduledMeeting;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class BugController extends Controller
{
    public function index()
    {
        $scheduledMeetings = ScheduledMeeting::with('meeting_room')->get();
        dd($scheduledMeetings);
        return view('pages.bugs.index');
    }
}
