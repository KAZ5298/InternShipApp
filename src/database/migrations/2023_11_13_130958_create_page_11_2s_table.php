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
        Schema::create('page_11_2s', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id_gurdian')->comment('ユーザーID（保護者）');
            $table->integer('user_id_supporter')->comment('ユーザーID（支援者）');
            $table->char('mother_feeling', 1)->nullable()->comment('母親の気分に関して 1:いいえ 2:はい 3:何ともいえない');
            $table->text('mother_freespace')->nullable()->comment('自由記入欄');
            $table->date('bathing_date')->nullable()->comment('入浴（年月日）');
            $table->date('housework_date')->nullable()->comment('家事開始（年月日）');
            $table->date('work_date')->nullable()->comment('家事以外の労働開始（年月日）');
            $table->date('menstruation_start_date')->nullable()->comment('月経開始（年月日）');
            $table->char('family_plan_select', 1)->nullable()->comment('家族計画指導（選択） 1:なし 2:あり');
            $table->char('family_plan_person', 1)->nullable()->comment('家族計画指導（指導者） 1:医師 2:受胎調節実地指導員 3:助産師');
            $table->date('family_plan_date')->nullable()->comment('家族計画指導（年月日）');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_11_2s');
    }
};
