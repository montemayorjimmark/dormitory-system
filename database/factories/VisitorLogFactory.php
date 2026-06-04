<?php

namespace Database\Factories;

use App\Models\Tenant;
use Illuminate\Database\Eloquent\Factories\Factory;

class VisitorLogFactory extends Factory
{
    public function definition(): array
    {
        $timeIn = $this->faker->dateTimeBetween('-1 month', 'now');

        return [
            'tenant_id' => Tenant::query()->inRandomOrder()->value('id'),
            'visitor_name' => $this->faker->name(),
            'visitor_phone' => $this->faker->phoneNumber(),
            'visit_date' => $timeIn,
            'purpose' => $this->faker->randomElement([
                'Family visit',
                'Study group',
                'Delivery',
                'Maintenance'
            ]),
            'time_in' => $timeIn,
            'time_out' => $this->faker->optional()->dateTimeBetween($timeIn, 'now'),
        ];
    }
}