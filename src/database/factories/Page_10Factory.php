<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Page_10;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page_10>
 */
class Page_10Factory extends Factory
{
    protected $model = Page_10::class;
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
            'pregnancy_weeks' => $this->faker->numberBetween(1, 99),
            'pregnancy_days' => $this->faker->numberBetween(1, 999),
            'parturition_date' => $this->faker->date(),
            'parturition_time' => $this->faker->time('H:i'),
            'parturition_required_time_start' => $this->faker->time('H:i'),
            'parturition_required_time_end' => $this->faker->time('H:i'),
            'parturition_progress_select' => $this->faker->randomElement(['1', '2', '3']),
            'parturition_progress_other' => $this->faker->realText(50),
            'parturition_progress_remarks' => $this->faker->realText(50),
            'parturition_method' => $this->faker->realText(50),
            'parturition_required_time' => $this->faker->numberBetween(1, 999),
            'bleeding_amount_select' => $this->faker->randomElement(['1', '2', '3']),
            'bleeding_amount_ml' => $this->faker->randomFloat(1, 1, 9999),
            'transfusion_select' => $this->faker->randomElement(['1', '2']),
            'transfusion_record' => $this->faker->realText(50),
            'child_gender' => $this->faker->randomElement(['1', '2', '3']),
            'single_or_multiple_select' => $this->faker->randomElement(['1', '2']),
            'single_or_multiple_count' => $this->faker->numberBetween(1, 99),
            'weight' => $this->faker->randomFloat(1, 1, 9999),
            'height' => $this->faker->randomFloat(1, 1, 200),
            'head_circumference' => $this->faker->randomFloat(1, 1, 200),
            'chest_measurement' => $this->faker->randomFloat(1, 1, 200),
            'special_findings_treatment' => $this->faker->randomElement(['1', '2', '3']),
            'proof' => $this->faker->randomElement(['1', '2', '3']),
            'child_birth_location' => $this->faker->address(),
            'parturition_handler_name_docter' => $this->faker->name(),
            'parturition_handler_name_midwife' => $this->faker->name(),
            'parturition_handler_name_other' => $this->faker->name(),
        ];
    }
}
