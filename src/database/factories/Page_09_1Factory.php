<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Page_09_1;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page_09_1>
 */
class Page_09_1Factory extends Factory
{
    protected $model = Page_09_1::class;
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
            'ei_first_examination_date' => $this->faker->date(),
            'ei_pregnancy_weeks' => $this->faker->numberBetween(1, 99),
            'ei_tooth_decay_select' => $this->faker->randomElement(['1', '2']),
            'ei_tooth_decay_count' => $this->faker->numberBetween(1, 99),
            'ei_tartar' => $this->faker->randomElement(['1', '2']),
            'ei_gums_inflammation' => $this->faker->randomElement(['1', '2', '3']),
            'ei_notices' => $this->faker->realText(50),
            'ei_factory_or_person' => $this->faker->address(),
        ];
    }
}
