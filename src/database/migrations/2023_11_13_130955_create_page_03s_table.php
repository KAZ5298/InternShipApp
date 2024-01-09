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
        Schema::create('page_03s', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id_gurdian')->comment('ユーザーID（保護者）');
            $table->string('rp_work')->nullable()->comment('職業');
            $table->string('rp_work_content_environment')->nullable()->comment('仕事の内容と職場環境');
            $table->time('rp_work_start_time')->nullable()->comment('仕事をする時間（開始時間）');
            $table->time('rp_work_end_time')->nullable()->comment('仕事をする時間（終了時間）');
            $table->char('rp_shift_system', 1)->nullable()->comment('交代制 1:あり 2:なし');
            $table->string('rp_vehicle')->nullable()->comment('通勤や仕事に利用する乗り物');
            $table->integer('rp_commuting_time')->nullable()->comment('通勤時間');
            $table->char('rp_congestion', 1)->nullable()->comment('混雑の程度 1:ひどい 2:普通');
            $table->integer('cap_work_rest_pregnancy_weeks')->nullable()->comment('仕事を休んだ（妊娠何周）');
            $table->integer('cap_work_rest_pregnancy_months')->nullable()->comment('仕事を休んだ（第何月）');
            $table->integer('cap_work_change_pregnancy_weeks')->nullable()->comment('仕事を変えた（妊娠何周）');
            $table->integer('cap_work_change_pregnancy_months')->nullable()->comment('仕事を変えた（第何月）');
            $table->integer('cap_work_end_pregnancy_weeks')->nullable()->comment('仕事をやめた（妊娠何周）');
            $table->integer('cap_work_end_pregnancy_months')->nullable()->comment('仕事をやめた（第何月）');
            $table->string('cap_other')->nullable()->comment('その他');
            $table->date('prenatal_leave_start')->nullable()->comment('産前休業（開始）');
            $table->date('prenatal_leave_end')->nullable()->comment('産前休業（終了）');
            $table->date('postpartum_leave_start')->nullable()->comment('産後休業（開始）');
            $table->date('postpartum_leave_end')->nullable()->comment('産後休業（終了）');
            $table->date('cl_mother_start1')->nullable()->comment('母親（開始）１');
            $table->date('cl_mother_end1')->nullable()->comment('母親（終了）１');
            $table->date('cl_mother_start2')->nullable()->comment('母親（開始）２');
            $table->date('cl_mother_end2')->nullable()->comment('母親（終了）２');
            $table->date('cl_father_start1')->nullable()->comment('父親（開始）１');
            $table->date('cl_father_end1')->nullable()->comment('父親（終了）１');
            $table->date('cl_father_start2')->nullable()->comment('父親（開始）２');
            $table->date('cl_father_end2')->nullable()->comment('父親（終了）２');
            $table->date('cl_father_start3')->nullable()->comment('父親（開始）３');
            $table->date('cl_father_end3')->nullable()->comment('父親（終了）３');
            $table->char('tor_select', 1)->nullable()->comment('住宅の種類 1:一戸建て 2:集合住宅 3:その他');
            $table->integer('tor_detached_house')->nullable()->comment('一戸建て（階数）');
            $table->integer('tor_housing_complex')->nullable()->comment('集合住宅（階数）');
            $table->integer('tor_housing_complex_count')->nullable()->comment('集合住宅（住んでる階数）');
            $table->char('tor_elevator', 1)->nullable()->comment('集合住宅（エレベーター有無） 1:有 2:無');
            $table->string('tor_other')->nullable()->comment('その他');
            $table->char('tor_noise', 1)->nullable()->comment('騒音 1:静 2:普通 3:騒');
            $table->char('tor_sunshine', 1)->nullable()->comment('日当たり 1:良 2:普通 3:悪');
            $table->boolean('lt_child')->default(0)->comment('同居＿子供');
            $table->integer('lt_child_count')->nullable()->comment('同居＿子供（人数）');
            $table->boolean('lt_husband')->default(0)->comment('同居＿夫');
            $table->boolean('lt_husband_father')->default(0)->comment('同居＿夫の父');
            $table->boolean('lt_husband_mother')->default(0)->comment('同居＿夫の母');
            $table->boolean('lt_father')->default(0)->comment('同居＿実父');
            $table->boolean('lt_mother')->default(0)->comment('同居＿実母');
            $table->boolean('lt_other')->default(0)->comment('同居＿その他');
            $table->integer('lt_other_count')->nullable()->comment('同居＿その他（人数）');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_03s');
    }
};
