<?php

namespace Database\Factories;

use App\Models\Tenant;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'tenant_id' => Tenant::query()->inRandomOrder()->value('id'),
            'amount' => $this->faker->randomFloat(2, 2500, 6500),
            'payment_date' => $this->faker->dateTimeBetween('-8 months', 'now'),
            'due_date' => $this->faker->dateTimeBetween('-8 months', '+1 month'),
            'payment_method' => $this->faker->randomElement(['cash', 'gcash', 'bank_transfer']),
            'reference_number' => $this->faker->unique()->bothify('PAY-######'),
            'status' => $this->faker->randomElement(['paid', 'pending', 'overdue']),
            'notes' => $this->faker->optional()->sentence(),
        ];
    }
}