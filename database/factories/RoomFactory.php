<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    public function definition(): array
    {
        return [
            'room_number' => $this->faker->unique()->bothify('R-###'),
            'room_type' => $this->faker->randomElement(['single', 'double', 'shared']),
            'building' => $this->faker->randomElement(['North Hall', 'South Hall', 'East Wing']),
            'floor' => $this->faker->numberBetween(1, 5),
            'capacity' => $this->faker->randomElement([2, 4, 6]),
            'occupied_slots' => 0,
            'monthly_fee' => $this->faker->randomFloat(2, 2500, 6500),
            'status' => 'available',
            'amenities' => $this->faker->randomElement([
                'WiFi, Study Desk, Cabinet',
                'WiFi, Air Conditioning',
                'Fan, Cabinet, Shared Bath'
            ]),
            'qr_code' => $this->faker->uuid(),
        ];
    }
}