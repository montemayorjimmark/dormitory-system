<?php

namespace Database\Factories;

use App\Models\Room;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomApplicationFactory extends Factory
{
    public function definition(): array
    {
        return [
            'student_id' => Student::query()->inRandomOrder()->value('id'),
            'room_id' => Room::query()->inRandomOrder()->value('id'),
            'application_date' => $this->faker->dateTimeBetween('-2 months', 'now'),
            'status' => $this->faker->randomElement(['pending', 'approved', 'rejected']),
            'reason' => $this->faker->sentence(12),
            'remarks' => $this->faker->optional()->sentence(),
        ];
    }
}