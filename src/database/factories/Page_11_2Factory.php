<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Page_11_2;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page_11_2>
 */
class Page_11_2Factory extends Factory
{
    protected $model = Page_11_2::class;
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
            'mother_feeling' => $this->faker->randomElement(['1', '2', '3']),
            'mother_freespace' => $this->faker->realText(100),
            'bathing_date' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+3 month'),
            'housework_date' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+3 month'),
            'work_date' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+3 month'),
            'menstruation_start_date' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+3 month'),
            'family_plan_select' => $this->faker->randomElement(['1', '2']),
            'family_plan_person' => $this->faker->randomElement(['1', '2', '3']),
            'family_plan_date' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+3 month'),
        ];
    }
}
