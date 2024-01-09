<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Page_11_1;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page_11_1>
 */
class Page_11_1Factory extends Factory
{
    protected $model = Page_11_1::class;
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
            'record_date' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+1 month'),
            'uterus_restoration' => $this->faker->randomElement(['1', '2']),
            'lochia' => $this->faker->randomElement(['1', '2']),
            'breast_condition' => $this->faker->realText(50),
            'blood_pressure_max' => $this->faker->randomFloat(1, 1, 200),
            'blood_pressure_min' => $this->faker->randomFloat(1, 1, 200),
            'urine_protein' => $this->faker->randomElement(['1', '2', '3']),
            'urine_sugar' => $this->faker->randomElement(['1', '2', '3']),
            'weight' => $this->faker->randomFloat(1, 1, 200),
            'epds_etc_implementation' => $this->faker->realText(50),
        ];
    }
}
