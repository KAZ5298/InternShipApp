<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Page_01;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page_01>
 */
class Page_01Factory extends Factory {
    protected $model = Page_01::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'user_id_gurdian' => 1,
            'user_id_city_office' => 2,
            'mother_fullname' => $this->faker->name('female'),
            'mother_fullname_huri' => $this->faker->kanaName('female'),
            'mother_birthday' => $this->faker->dateTimeBetween($startDate = '-32 years', $endDate = 'now'),
            'mother_work' => $this->faker->jobTitle(),
            'father_fullname' => $this->faker->name('male'),
            'father_fullname_huri' => $this->faker->kanaName('male'),
            'father_birthday' => $this->faker->dateTimeBetween($startDate = '-32 years', $endDate = 'now'),
            'father_work' => $this->faker->jobTitle(),
            'another_relationship' => '',
            'another_fullname' => $this->faker->name(),
            'another_fullname_huri' => $this->faker->kanaName(),
            'another_birthday' => $this->faker->dateTimeBetween($startDate = '-56 years', $endDate = 'now'),
            'another_work' => $this->faker->jobTitle(),
            'address1' => $this->faker->address(),
            'tel1' => $this->faker->phoneNumber(),
            'address2' => $this->faker->address(),
            'tel2' => $this->faker->phoneNumber(),
            'address3' => $this->faker->address(),
            'tel3' => $this->faker->phoneNumber(),
            'brc_child_fullname' => $this->faker->name(),
            'brc_child_gender' => $this->faker->randomElement(['1', '2']),
            'brc_child_birth_location' => $this->faker->address(),
            'brc_child_birthday' => now(),
            'brc_date' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+1 week'),
            'brc_mayor_fullname' => $this->faker->name(),
        ];
    }
}
