<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Page_02;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page_02>
 */
class Page_02Factory extends Factory
{
    protected $model = Page_02::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id_gurdian' => 1,
            'height' => $this->faker->randomFloat(1, 1, 200),
            'weight' => $this->faker->randomFloat(1, 1, 200),
            'mh_high_blood_pressure' => $this->faker->boolean(),
            'mh_kidney_disease' => $this->faker->boolean(),
            'mh_diabetes' => $this->faker->boolean(),
            'mh_hepatitis' => $this->faker->boolean(),
            'mh_heart_disease' => $this->faker->boolean(),
            'mh_thyroid_disease' => $this->faker->boolean(),
            'mh_mental_illness' => $this->faker->boolean(),
            'mh_other_diseases' => $this->faker->boolean(),
            'mh_other_diseases_name' => $this->faker->realText(50),
            'rubella' => $this->faker->randomElement(['1', '2', '3']),
            'measles' => $this->faker->randomElement(['1', '2', '3']),
            'chickenpox' => $this->faker->randomElement(['1', '2', '3']),
            'surgery_history_select' => $this->faker->randomElement(['1', '2']),
            'surgery_history_disease' => $this->faker->realText(50),
            'medicine' => $this->faker->realText(50),
            'allergy' => $this->faker->realText(50),
            'stress' => $this->faker->randomElement(['1', '2']),
            'pregnant_anxiety' => $this->faker->randomElement(['1', '2']),
            'other_anxiety' => $this->faker->realText(50),
            'tabacco_select' => $this->faker->randomElement(['1', '2']),
            'tabacco_no_count' => $this->faker->numberBetween(1, 99),
            'tabacco_yes_count' => $this->faker->numberBetween(1, 99),
            'cohabitant_tabacco_select' => $this->faker->randomElement(['1', '2']),
            'cohabitant_tabacco_count' => $this->faker->numberBetween(1, 99),
            'alcohol_select' => $this->faker->randomElement(['1', '2']),
            'alcohol_no_count' => $this->faker->numberBetween(1, 9999),
            'alcohol_yes_count' => $this->faker->numberBetween(1, 9999),
            'partner_condition_select' => $this->faker->randomElement(['1', '2']),
            'partner_condition_disease' => $this->faker->realText(50),
            'pch_child_birthday1' => $this->faker->dateTime(),
            'pch_pregnancy_period1' => $this->faker->numberBetween(1, 99),
            'pch_birth_method1' => $this->faker->realText(50),
            'pch_child_weight1' => $this->faker->randomFloat(1, 1, 9999),
            'pch_child_gender1' => $this->faker->randomElement(['1', '2']),
            'pch_child_condition1' => $this->faker->realText(50),
            'pch_child_birthday2' => $this->faker->dateTime(),
            'pch_pregnancy_period2' => $this->faker->numberBetween(1, 99),
            'pch_birth_method2' => $this->faker->realText(50),
            'pch_child_weight2' => $this->faker->randomFloat(1, 1, 9999),
            'pch_child_gender2' => $this->faker->randomElement(['1', '2']),
            'pch_child_condition2' => $this->faker->realText(50),
            'pch_child_birthday3' => $this->faker->dateTime(),
            'pch_pregnancy_period3' => $this->faker->numberBetween(1, 99),
            'pch_birth_method3' => $this->faker->realText(50),
            'pch_child_weight3' => $this->faker->randomFloat(1, 1, 9999),
            'pch_child_gender3' => $this->faker->randomElement(['1', '2']),
            'pch_child_condition3' => $this->faker->realText(50),
        ];
    }
}
