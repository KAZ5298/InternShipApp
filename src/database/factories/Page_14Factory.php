<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Page_14;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page_14>
 */
class Page_14Factory extends Factory
{
    protected $model = Page_14::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id_gurdian' => 1,
            'week2_record_date' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+2 week'),
            'week2_question1' => $this->faker->randomElement(['1', '2']),
            'week2_question2' => $this->faker->randomElement(['1', '2']),
            'week2_question3' => $this->faker->randomElement(['1', '2']),
            'week2_question4' => $this->faker->randomElement(['1', '2']),
            'week2_question5' => $this->faker->randomElement(['1', '2']),
            'week2_question6' => $this->faker->randomElement(['1', '2', '3']),
            'week2_freespace' => $this->faker->realText(500),
            'month1_record_date' => $this->faker->dateTimeBetween($startDate = '+1 months', $endDate = '+1 months'),
            'month1_question1' => $this->faker->randomElement(['1', '2']),
            'month1_question2' => $this->faker->randomElement(['1', '2']),
            'month1_question3' => $this->faker->randomElement(['1', '2']),
            'month1_question4' => $this->faker->randomElement(['1', '2']),
            'month1_question5' => $this->faker->randomElement(['1', '2']),
            'month1_question6' => $this->faker->randomElement(['1', '2']),
            'month1_question7' => $this->faker->randomElement(['1', '2']),
            'month1_question8' => $this->faker->randomElement(['1', '2']),
            'month1_question9' => $this->faker->randomElement(['1', '2', '3']),
            'month1_freespace' => $this->faker->realText(500),
            'month2_record_date' => $this->faker->dateTimeBetween($startDate = '+2 months', $endDate = '+2 months'),
            'month2_question1' => $this->faker->randomElement(['1', '2']),
            'month2_question2' => $this->faker->randomElement(['1', '2']),
            'month2_question3' => $this->faker->randomElement(['1', '2']),
            'month2_question4' => $this->faker->randomElement(['1', '2']),
            'month2_question5' => $this->faker->randomElement(['1', '2']),
            'month2_question6' => $this->faker->randomElement(['1', '2']),
            'month2_question7' => $this->faker->randomElement(['1', '2', '3']),
            'month2_freespace' => $this->faker->realText(500),
            'month3_4_record_date' => $this->faker->dateTimeBetween($startDate = '+3 months', $endDate = '+4 months'),
            'month3_4_question1' => $this->faker->dateTimeBetween($startDate = '+3 months', $endDate = '+4 months'),
            'month3_4_question2' => $this->faker->randomElement(['1', '2']),
            'month3_4_question3' => $this->faker->randomElement(['1', '2']),
            'month3_4_question4' => $this->faker->randomElement(['1', '2']),
            'month3_4_question5' => $this->faker->randomElement(['1', '2']),
            'month3_4_question6' => $this->faker->randomElement(['1', '2']),
            'month3_4_question7' => $this->faker->randomElement(['1', '2']),
            'month3_4_question8' => $this->faker->randomElement(['1', '2']),
            'month3_4_question9' => $this->faker->randomElement(['1', '2']),
            'month3_4_question10' => $this->faker->randomElement(['1', '2', '3']),
            'month3_4_freespace' => $this->faker->realText(500),
        ];
    }
}
