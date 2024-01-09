<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Page_13;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page_13>
 */
class Page_13Factory extends Factory
{
    protected $model = Page_13::class;
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
            'enp_age_in_days1' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+1 week'),
            'enp_weight1' => $this->faker->randomFloat(1, 1, 9999),
            'enp_sucking_power1' => $this->faker->randomElement(['1', '2']),
            'enp_jaundice1' => $this->faker->randomElement(['1', '2', '3']),
            'enp_others1' => $this->faker->realText(50),
            'enp_age_in_days2' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+1 week'),
            'enp_weight2' => $this->faker->randomFloat(1, 1, 9999),
            'enp_sucking_power2' => $this->faker->randomElement(['1', '2']),
            'enp_jaundice2' => $this->faker->randomElement(['1', '2', '3']),
            'enp_others2' => $this->faker->realText(50),
            'vitamin_administration_date' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+1 week'),
            'enp_abnormality_select' => $this->faker->randomElement(['1', '2']),
            'enp_abnormality' => $this->faker->realText(50),
            'enp_abnormality_treatment' => $this->faker->realText(50),
            'lh_date' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+4 week'),
            'lh_weight' => $this->faker->randomFloat(1, 1, 9999),
            'lh_nutrition_method' => $this->faker->randomElement(['1', '2', '3']),
            'lh_observation_matter' => $this->faker->realText(50),
            'lh_factory_or_person' => $this->faker->address(),
            'lh_tel' => $this->faker->phoneNumber(),
            'lnp_age_in_days1' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+4 week'),
            'lnp_weight1' => $this->faker->randomFloat(1, 1, 9999),
            'lnp_sucking_power1' => $this->faker->randomElement(['1', '2']),
            'lnp_nutrition_method1' => $this->faker->randomElement(['1', '2', '3']),
            'lnp_factory_or_person1' => $this->faker->address(),
            'lnp_age_in_days2' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+4 week'),
            'lnp_weight2' => $this->faker->randomFloat(1, 1, 9999),
            'lnp_sucking_power2' => $this->faker->randomElement(['1', '2']),
            'lnp_nutrition_method2' => $this->faker->randomElement(['1', '2', '3']),
            'lnp_factory_or_person2' => $this->faker->address(),
            'nvg_date' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+4 week'),
            'nvg_age_in_days' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+4 week'),
            'nvg_weight' => $this->faker->randomFloat(1, 1, 9999),
            'nvg_height' => $this->faker->randomFloat(1, 1, 200),
            'nvg_chest_measurement' => $this->faker->randomFloat(1, 1, 200),
            'nvg_head_circumference' => $this->faker->randomFloat(1, 1, 200),
            'nvg_nutrition_method' => $this->faker->randomElement(['1', '2', '3']),
            'nvg_factory_or_person' => $this->faker->address(),
            'notices' => $this->faker->realText(100),
        ];
    }
}
