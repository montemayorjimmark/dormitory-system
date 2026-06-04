<?php

namespace Database\Factories;

use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'room_id' => Room::query()->inRandomOrder()->value('id'),
            'student_number' => $this->faker->unique()->numerify('STU-20##-####'),
            'course' => $this->faker->randomElement(['BSIT', 'BSCS', 'BSA', 'BSED', 'BSBA']),
            'year_level' => $this->faker->randomElement(['1st Year', '2nd Year', '3rd Year', '4th Year']),
            'contact_number' => $this->faker->phoneNumber(),
            'birthdate' => $this->faker->dateTimeBetween('-24 years', '-17 years'),
            'gender' => $this->faker->randomElement(['Female', 'Male', 'Prefer not to say']),
            'address' => $this->faker->address(),
            'guardian_name' => $this->faker->name(),
            'guardian_phone' => $this->faker->phoneNumber(),
            'status' => 'active',
        ];
    }
}