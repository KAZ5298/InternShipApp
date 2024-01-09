<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Page_08;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page_08>
 */
class Page_08Factory extends Factory {
    protected $model = Page_08::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'user_id_gurdian' => 1,
            'attendance_date' => $this->faker->date(),
            'subject' => $this->faker->realText(50),
            'remarks' => $this->faker->realText(50),
            'spare' => $this->faker->realText(50),
        ];
    }
}
