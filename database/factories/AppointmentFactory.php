<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'patient_id' => \App\Models\Patient::factory(),
            'date' => $this->faker->date(),
            'start_time' => $this->faker->time(),
            'end_time' => $this->faker->time(),
            'reason' => $this->faker->sentence,
            'procedure' => $this->faker->word,
            'return_date' => $this->faker->date(),
        ];
    }
}
