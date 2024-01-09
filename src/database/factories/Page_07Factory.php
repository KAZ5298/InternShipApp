<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Page_07;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page_07>
 */
class Page_07Factory extends Factory {
    protected $model = Page_07::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'user_id_gurdian' => 1,
            'father_or_other_person_record' => $this->faker->realText(1000),
        ];
    }
}
