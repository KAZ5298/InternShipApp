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
        Schema::create('page_05s', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id_gurdian')->comment('ユーザーID（保護者）');
            $table->integer('user_id_supporter')->comment('ユーザーID（支援者）');
            $table->date('consultation_date')->comment('診察月日');
            $table->integer('pregnancy_week_count')->nullable()->comment('妊娠（週数）');
            $table->integer('pregnancy_day_count')->nullable()->comment('妊娠（日数）');
            $table->float('uterine_fundal_length')->nullable()->comment('子宮底長');
            $table->float('waist')->nullable()->comment('腹囲');
            $table->float('weight_before_pregnancy')->nullable()->comment('体重（妊娠前）');
            $table->float('weight_after_pregnancy')->nullable()->comment('体重（妊娠後）');
            $table->float('blood_pressure_max')->nullable()->comment('血圧（最高）');
            $table->float('blood_pressure_min')->nullable()->comment('血圧（最低）');
            $table->char('edema', 1)->nullable()->comment('浮腫 1:- 2:+ 3:++');
            $table->char('urine_protein', 1)->nullable()->comment('尿蛋白 1:- 2:+ 3:++');
            $table->char('urine_sugar', 1)->nullable()->comment('尿糖 1:- 2:+ 3:++');
            $table->string('other_tests')->nullable()->comment('その他の検査');
            $table->string('notices')->nullable()->comment('特記事項');
            $table->string('factory_or_person')->nullable()->comment('施設名または担当者名');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_05s');
    }
};
