<?php

namespace App\Http\Controllers;

use App\Models\MeetingAttendees;
use App\Models\ScheduledMeeting;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class BugController extends Controller
{
    public function index()
    {
        $scheduledMeetings = ScheduledMeeting::with('meeting_room')->with('organizer')->get();
        $meetingAttendees = MeetingAttendees::with('employee')->get();

        $data = [];
        foreach($scheduledMeetings as $meeting){
            $attendees = $meetingAttendees->where('scheduled_meeting_Id', '=', $meeting->id);
            $data [] = [
                    'meeting' => $meeting,
                    'attendees' => $atendees,
            ];
        }
        return view('pages.bugs', compact('data'));
    }
}
