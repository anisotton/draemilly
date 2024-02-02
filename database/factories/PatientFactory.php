<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'mail' => $this->faker->email(),
            'date_birth' => $this->faker->date(),
            'phone' => $this->faker->phoneNumber(),
            'cpf' => $this->faker->numerify('###.###.###-##'), // Adjust as needed
            'address' => $this->faker->address(),
            'how_find_us' => $this->faker->text(200)
        ];
    }
}
