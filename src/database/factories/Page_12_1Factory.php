<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Page_12_1;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page_12_1>
 */
class Page_12_1Factory extends Factory
{
    protected $model = Page_12_1::class;
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
            'pc_use_date' => $this->faker->date(),
            'pc_use_method' => $this->faker->randomElement(['1', '2', '3']),
            'pc_use_location' => $this->faker->address(),
            'pc_use_remarks' => $this->faker->realText(50),
        ];
    }
}
