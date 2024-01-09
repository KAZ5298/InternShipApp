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
        Schema::create('page_00_covers', function (Blueprint $table) {
            $table->id()->comment('母子健康手帳№');
            $table->date('issue_date')->nullable()->comment('交付日');
            $table->integer('user_id_gurdian')->comment('ロール：保護者のユーザーID');
            $table->integer('user_id_city_office')->comment('ロール：役所のユーザーID');
            $table->string('parent_fullname1')->nullable()->comment('保護者（氏名）１');
            $table->string('parent_fullname_huri1')->nullable()->comment('保護者（ふりがな）１');
            $table->string('parent_fullname2')->nullable()->comment('保護者（氏名）２');
            $table->string('parent_fullname_huri2')->nullable()->comment('保護者（ふりがな）２');
            $table->string('child_fullname')->nullable()->comment('子（氏名）');
            $table->string('child_fullname_huri')->nullable()->comment('子（ふりがな）');
            $table->integer('child_count')->nullable()->comment('第◯子');
            $table->date('child_birthday')->nullable()->comment('子（生年月日）');
            $table->char('child_gender', 1)->nullable()->comment('1:男 2:女');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_00_covers');
    }
};
