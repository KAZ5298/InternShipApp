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
        Schema::create('page_02s', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id_gurdian')->comment('ユーザーID「保護者」');
            $table->float('height')->nullable()->comment('身長');
            $table->float('weight')->nullable()->comment('体重');
            $table->boolean('mh_high_blood_pressure')->default(0)->comment('病歴_高血圧');
            $table->boolean('mh_kidney_disease')->default(0)->comment('病歴_腎臓病');
            $table->boolean('mh_diabetes')->default(0)->comment('病歴_糖尿病');
            $table->boolean('mh_hepatitis')->default(0)->comment('病歴_肝炎');
            $table->boolean('mh_heart_disease')->default(0)->comment('病歴_心臓病');
            $table->boolean('mh_thyroid_disease')->default(0)->comment('病歴_甲状腺の病気');
            $table->boolean('mh_mental_illness')->default(0)->comment('病歴_精神疾患（心の病気）');
            $table->boolean('mh_other_diseases')->default(0)->comment('病歴_その他病気');
            $table->string('mh_other_diseases_name')->nullable()->comment('病歴_その他病気（病名）');
            $table->char('rubella', 1)->nullable()->comment('感染症歴（風しん） 1:いいえ 2:はい 3:予防接種を受けた');
            $table->char('measles', 1)->nullable()->comment('感染症歴（麻しん） 1:いいえ 2:はい 3:予防接種を受けた');
            $table->char('chickenpox', 1)->nullable()->comment('感染症歴（水痘） 1:いいえ 2:はい 3:予防接種を受けた');
            $table->char('surgery_history_select', 1)->nullable()->comment('手術歴（選択） 1:なし 2:あり');
            $table->string('surgery_history_disease')->nullable()->comment('手術歴（病名）');
            $table->string('medicine')->nullable()->comment('服用中の薬（常用薬）');
            $table->string('allergy')->nullable()->comment('薬剤や食品などのアレルギー');
            $table->char('stress', 1)->nullable()->comment('日常生活のストレス 1:いいえ 2:はい');
            $table->char('pregnant_anxiety', 1)->nullable()->comment('妊娠に関して心配なこと 1:いいえ 2:はい');
            $table->string('other_anxiety')->nullable()->comment('その他心配なこと');
            $table->char('tabacco_select', 1)->nullable()->comment('煙草に関して（吸っているか） 1:いいえ 2:はい');
            $table->integer('tabacco_no_count')->nullable()->comment('煙草に関して（以前吸っていた本数）');
            $table->integer('tabacco_yes_count')->nullable()->comment('煙草に関して（吸っている本数）');
            $table->char('cohabitant_tabacco_select', 1)->nullable()->comment('同居者の煙草に関して（吸っているか） 1:いいえ 2:はい');
            $table->integer('cohabitant_tabacco_count')->nullable()->comment('同居者の煙草に関して（吸っている本数）');
            $table->char('alcohol_select', 1)->nullable()->comment('飲酒に関して（飲んでいるか） 1:いいえ 2:はい');
            $table->integer('alcohol_no_count')->nullable()->comment('飲酒に関して（以前飲んでいた量）');
            $table->integer('alcohol_yes_count')->nullable()->comment('飲酒に関して（飲んでいる量）');
            $table->char('partner_condition_select', 1)->nullable()->comment('夫・パートナーの健康状態（選択） 1:健康 2:よくない');
            $table->string('partner_condition_disease')->nullable()->comment('夫・パートナーの健康状態（病名）');
            $table->date('pch_child_birthday1')->nullable()->comment('出産年月１');
            $table->integer('pch_pregnancy_period1')->nullable()->comment('妊娠期間１');
            $table->string('pch_birth_method1')->nullable()->comment('出産方法１');
            $table->float('pch_child_weight1')->nullable()->comment('出生児の体重１');
            $table->char('pch_child_gender1', 1)->nullable()->comment('出生児の性別１ 1:男 2:女');
            $table->string('pch_child_condition1')->nullable()->comment('現在の子の状態１');
            $table->date('pch_child_birthday2')->nullable()->comment('出産年月２');
            $table->integer('pch_pregnancy_period2')->nullable()->comment('妊娠期間２');
            $table->string('pch_birth_method2')->nullable()->comment('出産方法２');
            $table->float('pch_child_weight2')->nullable()->comment('出生児の体重２');
            $table->char('pch_child_gender2', 1)->nullable()->comment('出生児の性別２ 1:男 2:女');
            $table->string('pch_child_condition2')->nullable()->comment('現在の子の状態２');
            $table->date('pch_child_birthday3')->nullable()->comment('出産年月３');
            $table->integer('pch_pregnancy_period3')->nullable()->comment('妊娠期間３');
            $table->string('pch_birth_method3')->nullable()->comment('出産方法３');
            $table->float('pch_child_weight3')->nullable()->comment('出生児の体重３');
            $table->char('pch_child_gender3', 1)->nullable()->comment('出生児の性別３ 1:男 2:女');
            $table->string('pch_child_condition3')->nullable()->comment('現在の子の状態３');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_02s');
    }
};
