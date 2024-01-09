<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Page_15;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page_15>
 */
class Page_15Factory extends Factory
{
    protected $model = Page_15::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id_gurdian' => 1,
            'month1_date' => $this->faker->dateTimeBetween($startDate = '+1 months', $endDate = '+1 months'),
            'month1_weight' => $this->faker->randomFloat(1, 1, 9999),
            'month1_height' => $this->faker->randomFloat(1, 1, 200),
            'month1_head_circumference' => $this->faker->randomFloat(1, 1, 200),
            'month1_nutritional_status' => $this->faker->randomElement(['1', '2']),
            'month1_nutritional_method' => $this->faker->randomElement(['1', '2', '3']),
            'month1_health_observation' => $this->faker->realText(50),
            'month1_notices' => $this->faker->realText(50),
            'month1_factory_or_person' => $this->faker->address(),
            'month1_date_next' => $this->faker->dateTimeBetween($startDate = '+1 months', $endDate = '+1 months'),
            'month1_moon_phase_next' => $this->faker->randomFloat(1, 1, 99),
            'month1_weight_next' => $this->faker->randomFloat(1, 1, 9999),
            'month1_height_next' => $this->faker->randomFloat(1, 1, 200),
            'month1_notices_next' => $this->faker->realText(50),
            'month1_factory_or_person_next' => $this->faker->address(),
            'month2_date' => $this->faker->dateTimeBetween($startDate = '+2 months', $endDate = '+2 months'),
            'month2_weight' => $this->faker->randomFloat(1, 1, 9999),
            'month2_height' => $this->faker->randomFloat(1, 1, 200),
            'month2_head_circumference' => $this->faker->randomFloat(1, 1, 200),
            'month2_nutritional_status' => $this->faker->randomElement(['1', '2']),
            'month2_nutritional_method' => $this->faker->randomElement(['1', '2', '3']),
            'month2_health_observation' => $this->faker->realText(50),
            'month2_notices' => $this->faker->realText(50),
            'month2_factory_or_person' => $this->faker->address(),
            'month2_date_next' => $this->faker->dateTimeBetween($startDate = '+2 months', $endDate = '+2 months'),
            'month2_moon_phase_next' => $this->faker->randomFloat(1, 1, 99),
            'month2_weight_next' => $this->faker->randomFloat(1, 1, 9999),
            'month2_height_next' => $this->faker->randomFloat(1, 1, 200),
            'month2_notices_next' => $this->faker->realText(50),
            'month2_factory_or_person_next' => $this->faker->address(),
            'month3_4_date' => $this->faker->dateTimeBetween($startDate = '+3 months', $endDate = '+4 months'),
            'month3_4_weight' => $this->faker->randomFloat(1, 1, 9999),
            'month3_4_height' => $this->faker->randomFloat(1, 1, 200),
            'month3_4_head_circumference' => $this->faker->randomFloat(1, 1, 200),
            'month3_4_nutritional_status' => $this->faker->randomElement(['1', '2']),
            'month3_4_nutritional_method' => $this->faker->randomElement(['1', '2', '3']),
            'month3_4_hip_opening_restriction' => '',
            'month3_4_health_observation' => $this->faker->realText(50),
            'month3_4_notices' => $this->faker->realText(50),
            'month3_4_detailed_exam_date' => $this->faker->dateTimeBetween($startDate = '+3 months', $endDate = '+4 months'),
            'month3_4_factory_or_person' => $this->faker->address(),
            'month3_4_date_next' => $this->faker->dateTimeBetween($startDate = '+3 months', $endDate = '+4 months'),
            'month3_4_moon_phase_next' => $this->faker->randomFloat(1, 1, 99),
            'month3_4_weight_next' => $this->faker->randomFloat(1, 1, 9999),
            'month3_4_height_next' => $this->faker->randomFloat(1, 1, 200),
            'month3_4_notices_next' => $this->faker->realText(50),
            'month3_4_factory_or_person_next' => $this->faker->address(),
        ];
    }
}
