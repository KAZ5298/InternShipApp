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
        Schema::create('page_01s', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id_gurdian')->nullable()->comment('ユーザーID（保護者）');
            $table->integer('user_id_city_office')->nullable()->comment('ユーザーID（役所）');
            $table->string('mother_fullname')->nullable()->comment('母（氏名）');
            $table->string('mother_fullname_huri')->nullable()->comment('母（ふりがな）');
            $table->date('mother_birthday')->nullable()->comment('母（生年月日）');
            $table->string('mother_work')->nullable()->comment('母（職業）');
            $table->string('father_fullname')->nullable()->comment('父（氏名）');
            $table->string('father_fullname_huri')->nullable()->comment('父（ふりがな）');
            $table->date('father_birthday')->nullable()->comment('父（生年月日）');
            $table->string('father_work')->nullable()->comment('父（職業）');
            $table->string('another_relationship')->nullable()->comment('三人目（続柄）');
            $table->string('another_fullname')->nullable()->comment('三人目（氏名）');
            $table->string('another_fullname_huri')->nullable()->comment('三人目（ふりがな）');
            $table->date('another_birthday')->nullable()->comment('三人目（生年月日）');
            $table->string('another_work')->nullable()->comment('三人目（職業）');
            $table->string('address1')->nullable()->comment('居住地１（住所）');
            $table->string('tel1')->nullable()->comment('居住地１（電話番号）');
            $table->string('address2')->nullable()->comment('居住地２（住所）');
            $table->string('tel2')->nullable()->comment('居住地２（電話番号）');
            $table->string('address3')->nullable()->comment('居住地３（住所）');
            $table->string('tel3')->nullable()->comment('居住地３（電話番号）');
            $table->string('brc_child_fullname')->nullable()->comment('子（氏名）');
            $table->char('brc_child_gender', 1)->nullable()->comment('子（性別） 1:男 2:女');
            $table->string('brc_child_birth_location')->nullable()->comment('子（出生の場所）');
            $table->date('brc_child_birthday')->nullable()->comment('子（出生の年月日）');
            $table->date('brc_date')->nullable()->comment('証明年月日');
            $table->string('brc_mayor_fullname')->nullable()->comment('市区町村長氏名');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_01s');
    }
};
