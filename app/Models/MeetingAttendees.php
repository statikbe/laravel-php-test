<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MeetingRoom
 *
 * @package App\Models
 * @property string $name
 * @property integer $max_capacity
 */
class MeetingAttendees extends Model
{
    use HasFactory;

    protected $fillable = ['employee_id', 'scheduled_meeting_id'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
