<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Page_12_2;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page_12_2>
 */
class Page_12_2Factory extends Factory
{
    protected $model = Page_12_2::class;
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
            'co_use_date' => $this->faker->date(),
            'co_use_summary' => $this->faker->realText(50),
            'co_use_location' => $this->faker->address(),
        ];
    }
}
