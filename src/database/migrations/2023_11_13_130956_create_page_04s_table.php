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
        Schema::create('page_04s', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id_gurdian')->comment('ユーザーID');
            $table->date('month3_start')->nullable()->comment('妊娠３ヶ月＿開始');
            $table->date('month3_end')->nullable()->comment('妊娠３ヶ月＿終了');
            $table->text('month3_record')->nullable()->comment('妊娠３ヶ月＿記録');
            $table->date('month4_start')->nullable()->comment('妊娠４ヶ月＿開始');
            $table->date('month4_end')->nullable()->comment('妊娠４ヶ月＿終了');
            $table->text('month4_record')->nullable()->comment('妊娠４ヶ月＿記録');
            $table->date('last_menstrual_date')->nullable()->comment('最終月経開始日');
            $table->date('first_consultation_date')->nullable()->comment('この妊娠の初診日');
            $table->date('quickening_date')->nullable()->comment('胎動を感じた日');
            $table->date('parturition_date')->nullable()->comment('分娩予定日');
            $table->date('month5_start')->nullable()->comment('妊娠５ヶ月＿開始');
            $table->date('month5_end')->nullable()->comment('妊娠５ヶ月＿終了');
            $table->text('month5_record')->nullable()->comment('妊娠５ヶ月＿記録');
            $table->date('month6_start')->nullable()->comment('妊娠６ヶ月＿開始');
            $table->date('month6_end')->nullable()->comment('妊娠６ヶ月＿終了');
            $table->text('month6_record')->nullable()->comment('妊娠６ヶ月＿記録');
            $table->date('month7_start')->nullable()->comment('妊娠７ヶ月＿開始');
            $table->date('month7_end')->nullable()->comment('妊娠７ヶ月＿終了');
            $table->text('month7_record')->nullable()->comment('妊娠７ヶ月＿記録');
            $table->date('month8_start')->nullable()->comment('妊娠８ヶ月＿開始');
            $table->date('month8_end')->nullable()->comment('妊娠８ヶ月＿終了');
            $table->text('month8_record')->nullable()->comment('妊娠８ヶ月＿記録');
            $table->string('childbirth_address')->nullable()->comment('出産前後の居住地（住所）');
            $table->string('childbirth_tel')->nullable()->comment('出産前後の居住地（電話番号）');
            $table->string('emergency_contact_fullname1')->nullable()->comment('緊急連絡先（氏名）１');
            $table->string('emergency_contact_fullname_huri1')->nullable()->comment('緊急連絡先（ふりがな）１');
            $table->string('emergency_contact_tel1')->nullable()->comment('緊急連絡先（電話番号）１');
            $table->string('emergency_contact_fullname2')->nullable()->comment('緊急連絡先（氏名）２');
            $table->string('emergency_contact_fullname_huri2')->nullable()->comment('緊急連絡先（ふりがな）２');
            $table->string('emergency_contact_tel2')->nullable()->comment('緊急連絡先（電話番号）２');
            $table->boolean('am_private_car')->default(0)->comment('分娩施設へのアクセス＿自家用車');
            $table->boolean('am_taxi')->default(0)->comment('分娩施設へのアクセス＿タクシー');
            $table->boolean('am_walking')->default(0)->comment('分娩施設へのアクセス＿徒歩');
            $table->boolean('am_other')->default(0)->comment('分娩施設へのアクセス＿その他');
            $table->string('am_other_name')->nullable()->comment('分娩施設へのアクセス＿その他（記入）');
            $table->integer('am_time_hours')->nullable()->comment('分娩施設へのアクセス（所要時間＿時間）');
            $table->integer('am_time_minutes')->nullable()->comment('分娩施設へのアクセス（所要時間＿分）');
            $table->string('helper')->nullable()->comment('出産前後、家事や育児を手伝ってくれる人');
            $table->date('month9_start')->nullable()->comment('妊娠９ヶ月＿開始');
            $table->date('month9_end')->nullable()->comment('妊娠９ヶ月＿終了');
            $table->text('month9_record')->nullable()->comment('妊娠９ヶ月＿記録');
            $table->date('month10_start')->nullable()->comment('妊娠１０ヶ月＿開始');
            $table->date('month10_end')->nullable()->comment('妊娠１０ヶ月＿終了');
            $table->text('month10_record')->nullable()->comment('妊娠１０ヶ月＿記録');
            $table->date('week40')->nullable()->comment('妊娠４０週～');
            $table->date('birthday')->nullable()->comment('出産日');
            $table->text('welcoming_feeling')->nullable()->comment('赤ちゃん誕生を迎えた気持ち');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_04s');
    }
};
