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
            $attendees = $meetingAttendees->where('scheduled_meeting_id', '=', $meeting->id);
            $data [] = [
                'scheduled_meeting' => [
                    'meeting' => $meeting,
                    'attendees' => $attendees,
                ],
            ];
        }

        return view('pages.bugs.index', compact('data'));
    }
}
