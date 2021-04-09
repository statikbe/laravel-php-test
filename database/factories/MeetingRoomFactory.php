<?php

namespace Database\Factories;

use App\Models\MeetingRoom;
use Illuminate\Database\Eloquent\Factories\Factory;

class MeetingRoomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MeetingRoom::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Meeting room: ' . $this->faker->monthName,
            'max_capacity' => $this->faker->numberBetween(4, 25),
            'slug' => $this->faker->slug
        ];
    }
}
