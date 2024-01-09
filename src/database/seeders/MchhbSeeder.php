<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Page_00_cover;
use App\Models\Page_01;
use App\Models\Page_02;
use App\Models\Page_03;
use App\Models\Page_04;
use App\Models\Page_05;
use App\Models\Page_06;
use App\Models\Page_07;
use App\Models\Page_08;
use App\Models\Page_09_1;
use App\Models\Page_09_2;
use App\Models\Page_10;
use App\Models\Page_11_1;
use App\Models\Page_11_2;
use App\Models\Page_12_1;
use App\Models\Page_12_2;
use App\Models\Page_13;
use App\Models\Page_14;
use App\Models\Page_15;

class MchhbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page_00_cover::factory()->count(1)->create();
        Page_01::factory()->count(1)->create();
        Page_02::factory()->count(1)->create();
        Page_03::factory()->count(1)->create();
        Page_04::factory()->count(1)->create();
        Page_05::factory()->count(10)->create();
        Page_06::factory()->count(10)->create();
        Page_07::factory()->count(1)->create();
        Page_08::factory()->count(10)->create();
        Page_09_1::factory()->count(1)->create();
        Page_09_2::factory()->count(5)->create();
        Page_10::factory()->count(1)->create();
        Page_11_1::factory()->count(5)->create();
        Page_11_2::factory()->count(1)->create();
        Page_12_1::factory()->count(5)->create();
        Page_12_2::factory()->count(5)->create();
        Page_13::factory()->count(1)->create();
        Page_14::factory()->count(1)->create();
        Page_15::factory()->count(1)->create();
    }
}
