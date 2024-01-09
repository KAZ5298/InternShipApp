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
        Schema::create('page_08s', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id_gurdian')->comment('ユーザーID（保護者）');
            $table->date('attendance_date')->nullable()->comment('受講年月日');
            $table->string('subject')->nullable()->comment('課目');
            $table->string('remarks')->nullable()->comment('備考');
            $table->text('spare')->nullable()->comment('予備欄');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_08s');
    }
};
