<?php

namespace Database\Factories;

use App\Models\MeetingAttendees;
use Illuminate\Database\Eloquent\Factories\Factory;

class MeetingAttendeesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MeetingAttendees::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'employee_id' => $this->faker->numberBetween(1, 25),
            'scheduled_meeting_id' => $this->faker->numberBetween(1, 2),
        ];
    }
}
