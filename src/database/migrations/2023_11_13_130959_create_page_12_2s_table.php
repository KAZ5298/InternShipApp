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
        Schema::create('page_12_2s', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id_gurdian')->comment('ユーザーID（保護者）');
            $table->integer('user_id_supporter')->comment('ユーザーID（支援者）');
            $table->date('co_use_date')->nullable()->comment('利用年月日');
            $table->string('co_use_summary')->nullable()->comment('概要');
            $table->string('co_use_location')->nullable()->comment('場所');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_12_2s');
    }
};
