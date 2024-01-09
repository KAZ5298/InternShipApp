<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Page_05;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page_05>
 */
class Page_05Factory extends Factory
{
    protected $model = Page_05::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id_gurdian' => 1,
            'user_id_supporter' => 3,
            'consultation_date' => $this->faker->date(),
            'pregnancy_week_count' => $this->faker->numberBetween(1, 99),
            'pregnancy_day_count' => $this->faker->numberBetween(1, 999),
            'uterine_fundal_length' => $this->faker->randomFloat(1, 1, 200),
            'waist' => $this->faker->randomFloat(1, 1, 200),
            'weight_before_pregnancy' => $this->faker->randomFloat(1, 1, 200),
            'weight_after_pregnancy' => $this->faker->randomFloat(1, 1, 200),
            'blood_pressure_max' => $this->faker->randomFloat(1, 1, 200),
            'blood_pressure_min' => $this->faker->randomFloat(1, 1, 200),
            'edema' => $this->faker->randomElement(['1', '2', '3']),
            'urine_protein' => $this->faker->randomElement(['1', '2', '3']),
            'urine_sugar' => $this->faker->randomElement(['1', '2', '3']),
            'other_tests' => $this->faker->realText(50),
            'notices' => $this->faker->realText(50),
            'factory_or_person' => $this->faker->address(),
        ];
    }
}
