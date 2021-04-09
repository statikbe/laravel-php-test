<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ScheduledMeeting
 *
 * @package App\Models
 * @property string $title
 * @property string $description
 * @property string $status
 * @property \App\Models\MeetingRoom $meetingRoom
 * @property \App\Models\Employee $organizer
 * @property \Carbon\Carbon $date_start
 * @property \Carbon\Carbon $date_stop
 *
 */
class ScheduledMeeting extends Model
{
    use HasFactory;

    //Meeting statuses
    const AS_CONTINUES = 'CONTINUES';
    const AS_CANCELLED = 'CANCELLED';
    const AS_POSTPONED = 'POSTPONED';

    protected $fillable = ['title', 'description', 'status', 'meeting_room_id', 'organizer_id', 'date_start', 'date_stop'];
}
