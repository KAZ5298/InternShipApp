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
        Schema::create('page_12_1s', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id_gurdian')->comment('ユーザーID（保護者）');
            $table->integer('user_id_supporter')->comment('ユーザーID（支援者）');
            $table->date('pc_use_date')->nullable()->comment('利用年月日');
            $table->char('pc_use_method', 1)->nullable()->comment('方法 1:宿泊 2:デイサービス 3:訪問');
            $table->string('pc_use_location')->nullable()->comment('場所');
            $table->string('pc_use_remarks')->nullable()->comment('備考');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_12_1s');
    }
};
