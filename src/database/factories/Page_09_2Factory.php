<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Page_09_2;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page_09_2>
 */
class Page_09_2Factory extends Factory
{
    protected $model = Page_09_2::class;
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
            'tc_upper_jaw_left1' => $this->faker->randomElement(['', '1', '2', '3', '4']),
            'tc_upper_jaw_left2' => $this->faker->randomElement(['', '1', '2', '3', '4']),
            'tc_upper_jaw_left3' => $this->faker->randomElement(['', '1', '2', '3', '4']),
            'tc_upper_jaw_left4' => $this->faker->randomElement(['', '1', '2', '3', '4']),
            'tc_upper_jaw_left5' => $this->faker->randomElement(['', '1', '2', '3', '4']),
            'tc_upper_jaw_left6' => $this->faker->randomElement(['', '1', '2', '3', '4']),
            'tc_upper_jaw_left7' => $this->faker->randomElement(['', '1', '2', '3', '4']),
            'tc_upper_jaw_left8' => $this->faker->randomElement(['', '1', '2', '3', '4']),
            'tc_lower_jaw_left1' => $this->faker->randomElement(['', '1', '2', '3', '4']),
            'tc_lower_jaw_left2' => $this->faker->randomElement(['', '1', '2', '3', '4']),
            'tc_lower_jaw_left3' => $this->faker->randomElement(['', '1', '2', '3', '4']),
            'tc_lower_jaw_left4' => $this->faker->randomElement(['', '1', '2', '3', '4']),
            'tc_lower_jaw_left5' => $this->faker->randomElement(['', '1', '2', '3', '4']),
            'tc_lower_jaw_left6' => $this->faker->randomElement(['', '1', '2', '3', '4']),
            'tc_lower_jaw_left7' => $this->faker->randomElement(['', '1', '2', '3', '4']),
            'tc_lower_jaw_left8' => $this->faker->randomElement(['', '1', '2', '3', '4']),
            'tc_upper_jaw_right1' => $this->faker->randomElement(['', '1', '2', '3', '4']),
            'tc_upper_jaw_right2' => $this->faker->randomElement(['', '1', '2', '3', '4']),
            'tc_upper_jaw_right3' => $this->faker->randomElement(['', '1', '2', '3', '4']),
            'tc_upper_jaw_right4' => $this->faker->randomElement(['', '1', '2', '3', '4']),
            'tc_upper_jaw_right5' => $this->faker->randomElement(['', '1', '2', '3', '4']),
            'tc_upper_jaw_right6' => $this->faker->randomElement(['', '1', '2', '3', '4']),
            'tc_upper_jaw_right7' => $this->faker->randomElement(['', '1', '2', '3', '4']),
            'tc_upper_jaw_right8' => $this->faker->randomElement(['', '1', '2', '3', '4']),
            'tc_lower_jaw_right1' => $this->faker->randomElement(['', '1', '2', '3', '4']),
            'tc_lower_jaw_right2' => $this->faker->randomElement(['', '1', '2', '3', '4']),
            'tc_lower_jaw_right3' => $this->faker->randomElement(['', '1', '2', '3', '4']),
            'tc_lower_jaw_right4' => $this->faker->randomElement(['', '1', '2', '3', '4']),
            'tc_lower_jaw_right5' => $this->faker->randomElement(['', '1', '2', '3', '4']),
            'tc_lower_jaw_right6' => $this->faker->randomElement(['', '1', '2', '3', '4']),
            'tc_lower_jaw_right7' => $this->faker->randomElement(['', '1', '2', '3', '4']),
            'tc_lower_jaw_right8' => $this->faker->randomElement(['', '1', '2', '3', '4']),
            'tc_pregnancy_weeks' => $this->faker->numberBetween(1, 99),
            'tc_tartar' => $this->faker->randomElement(['1', '2']),
            'tc_gums_inflammation' => $this->faker->randomElement(['1', '2', '3']),
            'tc_notices' => $this->faker->realText(50),
            'tc_first_examination_date' => $this->faker->date(),
            'tc_factory_or_person' => $this->faker->address(),
        ];
    }
}
