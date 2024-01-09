<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Page_04;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page_04>
 */
class Page_04Factory extends Factory
{
    protected $model = Page_04::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id_gurdian' => 1,
            'month3_start' => $this->faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now'),
            'month3_end' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+1 month'),
            'month3_record' => $this->faker->realText(1000),
            'month4_start' => $this->faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now'),
            'month4_end' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+1 month'),
            'month4_record' => $this->faker->realText(1000),
            'last_menstrual_date' => $this->faker->date(),
            'first_consultation_date' => $this->faker->date(),
            'quickening_date' => $this->faker->date(),
            'parturition_date' => $this->faker->date(),
            'month5_start' => $this->faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now'),
            'month5_end' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+1 month'),
            'month5_record' => $this->faker->realText(1000),
            'month6_start' => $this->faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now'),
            'month6_end' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+1 month'),
            'month6_record' => $this->faker->realText(1000),
            'month7_start' => $this->faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now'),
            'month7_end' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+1 month'),
            'month7_record' => $this->faker->realText(1000),
            'month8_start' => $this->faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now'),
            'month8_end' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+1 month'),
            'month8_record' => $this->faker->realText(1000),
            'childbirth_address' => $this->faker->address(),
            'childbirth_tel' => $this->faker->phoneNumber(),
            'emergency_contact_fullname1' => $this->faker->name(),
            'emergency_contact_fullname_huri1' => $this->faker->kanaName(),
            'emergency_contact_tel1' => $this->faker->phoneNumber(),
            'emergency_contact_fullname2' => $this->faker->name(),
            'emergency_contact_fullname_huri2' => $this->faker->kanaName(),
            'emergency_contact_tel2' => $this->faker->phoneNumber(),
            'am_private_car' => $this->faker->boolean(),
            'am_taxi' => $this->faker->boolean(),
            'am_walking' => $this->faker->boolean(),
            'am_other' => $this->faker->boolean(),
            'am_other_name' => $this->faker->realText(50),
            'am_time_hours' => $this->faker->numberBetween(1, 23),
            'am_time_minutes' => $this->faker->numberBetween(1, 59),
            'helper' => $this->faker->realText(50),
            'month9_start' => $this->faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now'),
            'month9_end' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+1 month'),
            'month9_record' => $this->faker->realText(1000),
            'month10_start' => $this->faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now'),
            'month10_end' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+1 month'),
            'month10_record' => $this->faker->realText(1000),
            'week40' => $this->faker->date(),
            'birthday' => $this->faker->date(),
            'welcoming_feeling' => $this->faker->realText(1000),
        ];
    }
}
