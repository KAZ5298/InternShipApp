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
        Schema::create('page_09_1s', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id_gurdian')->comment('ユーザーID（保護者）');
            $table->integer('user_id_supporter')->comment('ユーザーID（支援者）');
            $table->date('ei_first_examination_date')->nullable()->comment('初診診査日');
            $table->integer('ei_pregnancy_weeks')->nullable()->comment('妊娠週数');
            $table->char('ei_tooth_decay_select', 1)->nullable()->comment('要治療の虫歯（選択） 1:なし 2:あり');
            $table->integer('ei_tooth_decay_count')->nullable()->comment('要治療の虫歯（本数）');
            $table->char('ei_tartar', 1)->nullable()->comment('歯石 1:なし 2:あり');
            $table->char('ei_gums_inflammation', 1)->nullable()->comment('歯肉の炎症  1:なし 2:あり(要指導) 3:あり(要治療)');
            $table->string('ei_notices')->nullable()->comment('特記事項');
            $table->string('ei_factory_or_person')->nullable()->comment('施設名または担当者名');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_09_1s');
    }
};
