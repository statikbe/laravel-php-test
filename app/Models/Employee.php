<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee
 *
 * @package App\Models
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $function
 * @property string $avatar
 */
class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'email', 'function', 'avatar'];
}
