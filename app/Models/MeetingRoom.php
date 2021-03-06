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
class MeetingRoom extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'max_capacity'];
}
