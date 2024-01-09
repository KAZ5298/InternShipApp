<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('page_11_1s', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id_gurdian')->comment('ユーザーID（保護者）');
            $table->integer('user_id_supporter')->comment('ユーザーID（支援者）');
            $table->date('record_date')->nullable()->comment('記録日');
            $table->char('uterus_restoration', 1)->nullable()->comment('子宮復古 1:良 2:否');
            $table->char('lochia', 1)->nullable()->comment('悪露（おろ） 1:正 2:否');
            $table->string('breast_condition')->nullable()->comment('乳房の状態');
            $table->float('blood_pressure_max')->nullable()->comment('血圧（最高）');
            $table->float('blood_pressure_min')->nullable()->comment('血圧（最低）');
            $table->char('urine_protein', 1)->nullable()->comment('尿蛋白 1:- 2:+ 3:++');
            $table->char('urine_sugar', 1)->nullable()->comment('尿糖 1:- 2:+ 3:++');
            $table->float('weight')->nullable()->comment('体重');
            $table->string('epds_etc_implementation')->nullable()->comment('EPDS等の実施など');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('page_11_1s');
    }
};
