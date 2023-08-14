<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prescription>
 */
class PrescriptionFactory extends Factory
{
    use WithFaker;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'patient_id' => $this->faker->numberBetween(10000000, 99999999),
            'patient_name' => $this->faker->name(),
            'patient_address' => $this->faker->address(),
            'patient_phone' => $this->faker->phoneNumber(),
            'patient_email' => $this->faker->email(),
            'medication_name' => $this->faker->word(),
            'medication_dosage' => $this->faker->numberBetween(10, 40),
            'medication_frequency' => $this->faker->numberBetween(1, 4),
            'medication_duration' => $this->faker->numberBetween(1, 4),
            'medication_quantity' => $this->faker->numberBetween(1, 4),
            'medication_refills' => $this->faker->numberBetween(1, 4),
            'medication_notes' => $this->faker->sentence(),
            'medication_prescriber' => $this->faker->name(),
        ];
    }
}
