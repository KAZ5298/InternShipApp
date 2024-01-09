<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Page_00_cover;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page_00_cover>
 */
class Page_00_coverFactory extends Factory {
    protected $model = Page_00_cover::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'issue_date' => now(),
            'user_id_gurdian' => 1,
            'user_id_city_office' => 2,
            'parent_fullname1' => $this->faker->name('female'),
            'parent_fullname_huri1' => $this->faker->kanaName('female'),
            'parent_fullname2' => $this->faker->name('male'),
            'parent_fullname_huri2' => $this->faker->kanaName('male'),
            'child_fullname' => $this->faker->name(),
            'child_fullname_huri' => $this->faker->kanaName(),
            'child_count' => $this->faker->randomNumber(1),
            'child_birthday' => now(),
            'child_gender' => $this->faker->randomElement(['1', '2']),
        ];
    }
}
