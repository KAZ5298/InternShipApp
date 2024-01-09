<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('page_09_2s', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id_gurdian')->comment('ユーザーID（保護者）');
            $table->integer('user_id_supporter')->comment('ユーザーID（支援者）');
            $table->char('tc_upper_jaw_left1', 1)->nullable()->comment('上顎左１ 1:／ 2:Ｃ 3:◯ 4:△');
            $table->char('tc_upper_jaw_left2', 1)->nullable()->comment('上顎左２ 1:／ 2:Ｃ 3:◯ 4:△');
            $table->char('tc_upper_jaw_left3', 1)->nullable()->comment('上顎左３ 1:／ 2:Ｃ 3:◯ 4:△');
            $table->char('tc_upper_jaw_left4', 1)->nullable()->comment('上顎左４ 1:／ 2:Ｃ 3:◯ 4:△');
            $table->char('tc_upper_jaw_left5', 1)->nullable()->comment('上顎左５ 1:／ 2:Ｃ 3:◯ 4:△');
            $table->char('tc_upper_jaw_left6', 1)->nullable()->comment('上顎左６ 1:／ 2:Ｃ 3:◯ 4:△');
            $table->char('tc_upper_jaw_left7', 1)->nullable()->comment('上顎左７ 1:／ 2:Ｃ 3:◯ 4:△');
            $table->char('tc_upper_jaw_left8', 1)->nullable()->comment('上顎左８ 1:／ 2:Ｃ 3:◯ 4:△');
            $table->char('tc_lower_jaw_left1', 1)->nullable()->comment('下顎左１ 1:／ 2:Ｃ 3:◯ 4:△');
            $table->char('tc_lower_jaw_left2', 1)->nullable()->comment('下顎左２ 1:／ 2:Ｃ 3:◯ 4:△');
            $table->char('tc_lower_jaw_left3', 1)->nullable()->comment('下顎左３ 1:／ 2:Ｃ 3:◯ 4:△');
            $table->char('tc_lower_jaw_left4', 1)->nullable()->comment('下顎左４ 1:／ 2:Ｃ 3:◯ 4:△');
            $table->char('tc_lower_jaw_left5', 1)->nullable()->comment('下顎左５ 1:／ 2:Ｃ 3:◯ 4:△');
            $table->char('tc_lower_jaw_left6', 1)->nullable()->comment('下顎左６ 1:／ 2:Ｃ 3:◯ 4:△');
            $table->char('tc_lower_jaw_left7', 1)->nullable()->comment('下顎左７ 1:／ 2:Ｃ 3:◯ 4:△');
            $table->char('tc_lower_jaw_left8', 1)->nullable()->comment('下顎左８ 1:／ 2:Ｃ 3:◯ 4:△');
            $table->char('tc_upper_jaw_right1', 1)->nullable()->comment('上顎右１ 1:／ 2:Ｃ 3:◯ 4:△');
            $table->char('tc_upper_jaw_right2', 1)->nullable()->comment('上顎右２ 1:／ 2:Ｃ 3:◯ 4:△');
            $table->char('tc_upper_jaw_right3', 1)->nullable()->comment('上顎右３ 1:／ 2:Ｃ 3:◯ 4:△');
            $table->char('tc_upper_jaw_right4', 1)->nullable()->comment('上顎右４ 1:／ 2:Ｃ 3:◯ 4:△');
            $table->char('tc_upper_jaw_right5', 1)->nullable()->comment('上顎右５ 1:／ 2:Ｃ 3:◯ 4:△');
            $table->char('tc_upper_jaw_right6', 1)->nullable()->comment('上顎右６ 1:／ 2:Ｃ 3:◯ 4:△');
            $table->char('tc_upper_jaw_right7', 1)->nullable()->comment('上顎右７ 1:／ 2:Ｃ 3:◯ 4:△');
            $table->char('tc_upper_jaw_right8', 1)->nullable()->comment('上顎右８ 1:／ 2:Ｃ 3:◯ 4:△');
            $table->char('tc_lower_jaw_right1', 1)->nullable()->comment('下顎右１ 1:／ 2:Ｃ 3:◯ 4:△');
            $table->char('tc_lower_jaw_right2', 1)->nullable()->comment('下顎右２ 1:／ 2:Ｃ 3:◯ 4:△');
            $table->char('tc_lower_jaw_right3', 1)->nullable()->comment('下顎右３ 1:／ 2:Ｃ 3:◯ 4:△');
            $table->char('tc_lower_jaw_right4', 1)->nullable()->comment('下顎右４ 1:／ 2:Ｃ 3:◯ 4:△');
            $table->char('tc_lower_jaw_right5', 1)->nullable()->comment('下顎右５ 1:／ 2:Ｃ 3:◯ 4:△');
            $table->char('tc_lower_jaw_right6', 1)->nullable()->comment('下顎右６ 1:／ 2:Ｃ 3:◯ 4:△');
            $table->char('tc_lower_jaw_right7', 1)->nullable()->comment('下顎右７ 1:／ 2:Ｃ 3:◯ 4:△');
            $table->char('tc_lower_jaw_right8', 1)->nullable()->comment('下顎右８ 1:／ 2:Ｃ 3:◯ 4:△');
            $table->integer('tc_pregnancy_weeks')->nullable()->comment('妊娠・産後週数');
            $table->char('tc_tartar')->nullable()->comment('歯石');
            $table->char('tc_gums_inflammation')->nullable()->comment('歯肉の炎症');
            $table->string('tc_notices')->nullable()->comment('特記事項');
            $table->date('tc_first_examination_date')->nullable()->comment('診査日');
            $table->string('tc_factory_or_person')->nullable()->comment('施設名または担当者名');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_09_2s');
    }
};
