<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('page_10s', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id_gurdian')->comment('ユーザーID（保護者）');
            $table->integer('user_id_supporter')->comment('ユーザーID（支援者）');
            $table->integer('pregnancy_weeks')->nullable()->comment('妊娠期間（週数）');
            $table->integer('pregnancy_days')->nullable()->comment('妊娠期間（日数）');
            $table->date('parturition_date')->nullable()->comment('分娩日時（年月日）');
            $table->time('parturition_time')->nullable()->comment('分娩時間');
            $table->time('parturition_required_time_start')->nullable()->comment('分娩所要時間（開始）');
            $table->time('parturition_required_time_end')->nullable()->comment('分娩所要時間（終了）');
            $table->char('parturition_progress_select', 1)->nullable()->comment('分娩経過（選択） 1:頭位 2:骨盤位 3:その他');
            $table->string('parturition_progress_other')->nullable()->comment('分娩経過（その他）');
            $table->string('parturition_progress_remarks')->nullable()->comment('分娩経過（特記事項）');
            $table->string('parturition_method')->nullable()->comment('分娩方法');
            $table->integer('parturition_required_time')->nullable()->comment('分娩所要時間');
            $table->char('bleeding_amount_select', 1)->nullable()->comment('出血量（選択） 1:少量 2:中量 3:多量');
            $table->float('bleeding_amount_ml')->nullable()->comment('出血量（量）');
            $table->char('transfusion_select', 1)->nullable()->comment('輸血（血液製剤含む）の有無（選択） 1:無 2:有');
            $table->string('transfusion_record')->nullable()->comment('輸血（血液製剤含む）の有無（記入）');
            $table->char('child_gender', 1)->nullable()->comment('性別 1:男 2:女 3:不明');
            $table->char('single_or_multiple_select', 1)->nullable()->comment('単胎妊娠か多胎妊娠（選択） 1:単 2:多');
            $table->integer('single_or_multiple_count')->nullable()->comment('単胎妊娠か多胎妊娠（数）');
            $table->float('weight')->nullable()->comment('体重');
            $table->float('height')->nullable()->comment('身長');
            $table->float('head_circumference')->nullable()->comment('頭囲');
            $table->float('chest_measurement')->nullable()->comment('胸囲');
            $table->char('special_findings_treatment', 1)->nullable()->comment('特別な所見・処置（選択） 1:死亡 2:蘇生 3:死産');
            $table->char('proof', 1)->nullable()->comment('証明（選択） 1:出生証明書 2:死産証書 3:出生証明書及び死亡診断書');
            $table->string('child_birth_location')->nullable()->comment('出産の場所');
            $table->string('parturition_handler_name_docter')->nullable()->comment('分娩取扱者（医師）');
            $table->string('parturition_handler_name_midwife')->nullable()->comment('分娩取扱者（助産師）');
            $table->string('parturition_handler_name_other')->nullable()->comment('分娩取扱者（その他）');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_10s');
    }
};
