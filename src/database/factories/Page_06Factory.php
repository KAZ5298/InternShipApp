<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Page_06;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page_06>
 */
class Page_06Factory extends Factory {
    protected $model = Page_06::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'user_id_gurdian' => 1,
            'user_id_supporter' => 3,
            'inspection_item_name' => $this->faker->randomElement(['1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'A', 'B', 'C', 'D', 'E']),
            'inspection_item_name_other' => $this->faker->realText(50),
            'inspection_item_date' => $this->faker->date(),
            'inspection_item_remarks' => $this->faker->realText(50),
            'blood_type' => $this->faker->randomElement(['1', '2', '3', '4']),
            'blood_type_rh' => $this->faker->randomElement(['1', '2']),
            'hearing_inspection_right' => $this->faker->randomElement(['1', '2']),
            'hearing_inspection_left' => $this->faker->randomElement(['1', '2']),
            'spare' => $this->faker->realText(50),
        ];
    }
}
