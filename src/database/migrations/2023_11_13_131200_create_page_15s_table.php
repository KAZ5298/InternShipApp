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
        Schema::create('page_15s', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id_gurdian')->comment('ユーザーID（保護者）');
            $table->date('month1_date')->nullable()->comment('実施年月日（１ヶ月児）');
            $table->float('month1_weight')->nullable()->comment('体重（１ヶ月児）');
            $table->float('month1_height')->nullable()->comment('身長（１ヶ月児）');
            $table->float('month1_head_circumference')->nullable()->comment('頭囲（１ヶ月児）');
            $table->char('month1_nutritional_status', 1)->nullable()->comment('栄養状態（１ヶ月児）');
            $table->char('month1_nutritional_method', 1)->nullable()->comment('栄養法（１ヶ月児）');
            $table->string('month1_health_observation')->nullable()->comment('健康・要観察（１ヶ月児）');
            $table->string('month1_notices')->nullable()->comment('特記事項（１ヶ月児）');
            $table->string('month1_factory_or_person')->nullable()->comment('施設名または担当者名（１ヶ月児）');
            $table->date('month1_date_next')->nullable()->comment('実施年月日＿次回');
            $table->float('month1_moon_phase_next')->nullable()->comment('月齢＿次回');
            $table->float('month1_weight_next')->nullable()->comment('体重＿次回');
            $table->float('month1_height_next')->nullable()->comment('身長＿次回');
            $table->string('month1_notices_next')->nullable()->comment('特記事項＿次回');
            $table->string('month1_factory_or_person_next')->nullable()->comment('施設名または担当者名＿次回');
            $table->date('month2_date')->nullable()->comment('実施年月日（２ヶ月児）');
            $table->float('month2_weight')->nullable()->comment('体重（２ヶ月児）');
            $table->float('month2_height')->nullable()->comment('身長（２ヶ月児）');
            $table->float('month2_head_circumference')->nullable()->comment('頭囲（２ヶ月児）');
            $table->char('month2_nutritional_status', 1)->nullable()->comment('栄養状態（２ヶ月児）');
            $table->char('month2_nutritional_method', 1)->nullable()->comment('栄養法（２ヶ月児）');
            $table->string('month2_health_observation')->nullable()->comment('健康・要観察（２ヶ月児）');
            $table->string('month2_notices')->nullable()->comment('特記事項（２ヶ月児）');
            $table->string('month2_factory_or_person')->nullable()->comment('施設名または担当者名（２ヶ月児）');
            $table->date('month2_date_next')->nullable()->comment('実施年月日＿次回');
            $table->float('month2_moon_phase_next')->nullable()->comment('月齢＿次回');
            $table->float('month2_weight_next')->nullable()->comment('体重＿次回');
            $table->float('month2_height_next')->nullable()->comment('身長＿次回');
            $table->string('month2_notices_next')->nullable()->comment('特記事項＿次回');
            $table->string('month2_factory_or_person_next')->nullable()->comment('施設名または担当者名＿次回');
            $table->date('month3_4_date')->nullable()->comment('実施年月日（３～４ヶ月児）');
            $table->float('month3_4_weight')->nullable()->comment('体重（３～４ヶ月児）');
            $table->float('month3_4_height')->nullable()->comment('身長（３～４ヶ月児）');
            $table->float('month3_4_head_circumference')->nullable()->comment('頭囲（３～４ヶ月児）');
            $table->char('month3_4_nutritional_status', 1)->nullable()->comment('栄養状態（３～４ヶ月児）');
            $table->char('month3_4_nutritional_method', 1)->nullable()->comment('栄養法（３～４ヶ月児）');
            $table->char('month3_4_hip_opening_restriction', 1)->nullable()->comment('股関節開排制限');
            $table->string('month3_4_health_observation')->nullable()->comment('健康・要観察（３～４ヶ月児）');
            $table->string('month3_4_notices')->nullable()->comment('特記事項（３～４ヶ月児）');
            $table->string('month3_4_detailed_exam_date')->nullable()->comment('精密検査実施日（３～４ヶ月児）');
            $table->string('month3_4_factory_or_person')->nullable()->comment('施設名または担当者名（３～４ヶ月児）');
            $table->date('month3_4_date_next')->nullable()->comment('実施年月日＿次回');
            $table->float('month3_4_moon_phase_next')->nullable()->comment('月齢＿次回');
            $table->float('month3_4_weight_next')->nullable()->comment('体重＿次回');
            $table->float('month3_4_height_next')->nullable()->comment('身長＿次回');
            $table->string('month3_4_notices_next')->nullable()->comment('特記事項＿次回');
            $table->string('month3_4_factory_or_person_next')->nullable()->comment('施設名または担当者名＿次回');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_15s');
    }
};
