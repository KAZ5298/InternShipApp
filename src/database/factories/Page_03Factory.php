<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Page_03;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page_03>
 */
class Page_03Factory extends Factory
{
    protected $model = Page_03::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id_gurdian' => 1,
            'rp_work' => $this->faker->realText(50),
            'rp_work_content_environment' => $this->faker->realText(50),
            'rp_work_start_time' => $this->faker->time('H:i'),
            'rp_work_end_time' => $this->faker->time('H:i'),
            'rp_shift_system' => $this->faker->randomElement(['1', '2']),
            'rp_vehicle' => $this->faker->realText(50),
            'rp_commuting_time' => $this->faker->numberBetween(1, 999),
            'rp_congestion' => $this->faker->randomElement(['1', '2']),
            'cap_work_rest_pregnancy_weeks' => $this->faker->numberBetween(1, 99),
            'cap_work_rest_pregnancy_months' => $this->faker->numberBetween(1, 12),
            'cap_work_change_pregnancy_weeks' => $this->faker->numberBetween(1, 99),
            'cap_work_change_pregnancy_months' => $this->faker->numberBetween(1, 12),
            'cap_work_end_pregnancy_weeks' => $this->faker->numberBetween(1, 99),
            'cap_work_end_pregnancy_months' => $this->faker->numberBetween(1, 12),
            'cap_other' => $this->faker->realText(50),
            'prenatal_leave_start' => $this->faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now'),
            'prenatal_leave_end' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+1 month'),
            'postpartum_leave_start' => $this->faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now'),
            'postpartum_leave_end' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+1 month'),
            'cl_mother_start1' => $this->faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now'),
            'cl_mother_end1' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+1 month'),
            'cl_mother_start2' => $this->faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now'),
            'cl_mother_end2' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+1 month'),
            'cl_father_start1' => $this->faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now'),
            'cl_father_end1' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+1 month'),
            'cl_father_start2' => $this->faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now'),
            'cl_father_end2' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+1 month'),
            'cl_father_start3' => $this->faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now'),
            'cl_father_end3' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+1 month'),
            'tor_select' => $this->faker->randomElement(['1', '2', '3']),
            'tor_detached_house' => $this->faker->numberBetween(1, 99),
            'tor_housing_complex' => $this->faker->numberBetween(1, 99),
            'tor_housing_complex_count' => $this->faker->numberBetween(1, 99),
            'tor_elevator' => $this->faker->randomElement(['1', '2']),
            'tor_other' => $this->faker->realText(50),
            'tor_noise' => $this->faker->randomElement(['1', '2', '3']),
            'tor_sunshine' => $this->faker->randomElement(['1', '2', '3']),
            'lt_child' => $this->faker->boolean(),
            'lt_child_count' => $this->faker->numberBetween(1, 99),
            'lt_husband' => $this->faker->boolean(),
            'lt_husband_father' => $this->faker->boolean(),
            'lt_husband_mother' => $this->faker->boolean(),
            'lt_father' => $this->faker->boolean(),
            'lt_mother' => $this->faker->boolean(),
            'lt_other' => $this->faker->boolean(),
            'lt_other_count' => $this->faker->numberBetween(1, 99),
        ];
    }
}
