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
        Schema::create('page_13s', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id_gurdian')->comment('ユーザーID（保護者）');
            $table->integer('user_id_supporter')->comment('ユーザーID（支援者）');
            $table->date('enp_age_in_days1')->nullable()->comment('日齢１');
            $table->float('enp_weight1')->nullable()->comment('体重１');
            $table->char('enp_sucking_power1')->nullable()->comment('哺乳力１ 1:普通 2:弱');
            $table->char('enp_jaundice1')->nullable()->comment('黄疸１ 1:なし 2:普通 3:強');
            $table->string('enp_others1')->nullable()->comment('その他１');
            $table->date('enp_age_in_days2')->nullable()->comment('日齢２');
            $table->float('enp_weight2')->nullable()->comment('体重２');
            $table->char('enp_sucking_power2')->nullable()->comment('哺乳力２ 1:普通 2:弱');
            $table->char('enp_jaundice2')->nullable()->comment('黄疸２ 1:なし 2:普通 3:強');
            $table->string('enp_others2')->nullable()->comment('その他２');
            $table->date('vitamin_administration_date')->nullable()->comment('ビタミン投与日');
            $table->char('enp_abnormality_select')->nullable()->comment('出生時またはその後の異常（選択） 1:なし 2:あり');
            $table->string('enp_abnormality')->nullable()->comment('出生時またはその後の異常（記入）');
            $table->string('enp_abnormality_treatment')->nullable()->comment('出生時またはその後の異常、その処置（記入）');
            $table->date('lh_date')->nullable()->comment('退院日（年月日）');
            $table->float('lh_weight')->nullable()->comment('体重');
            $table->char('lh_nutrition_method')->nullable()->comment('栄養法 1:母乳 2:混合 3:人工乳');
            $table->string('lh_observation_matter')->nullable()->comment('要観察事項');
            $table->string('lh_factory_or_person')->nullable()->comment('施設名または担当者');
            $table->string('lh_tel')->nullable()->comment('電話番号');
            $table->date('lnp_age_in_days1')->nullable()->comment('日齢１');
            $table->float('lnp_weight1')->nullable()->comment('体重１');
            $table->char('lnp_sucking_power1')->nullable()->comment('哺乳力１ 1:普通 2:弱');
            $table->char('lnp_nutrition_method1')->nullable()->comment('栄養法１ 1:母乳 2:混合 3:人工乳');
            $table->string('lnp_factory_or_person1')->nullable()->comment('施設名または担当者１');
            $table->date('lnp_age_in_days2')->nullable()->comment('日齢２');
            $table->float('lnp_weight2')->nullable()->comment('体重２');
            $table->char('lnp_sucking_power2')->nullable()->comment('哺乳力２ 1:普通 2:弱');
            $table->char('lnp_nutrition_method2')->nullable()->comment('栄養法２ 1:母乳 2:混合 3:人工乳');
            $table->string('lnp_factory_or_person2')->nullable()->comment('施設名または担当者２');
            $table->date('nvg_date')->nullable()->comment('訪問日（年月日）');
            $table->date('nvg_age_in_days')->nullable()->comment('日齢');
            $table->float('nvg_weight')->nullable()->comment('体重');
            $table->float('nvg_height')->nullable()->comment('身長');
            $table->float('nvg_chest_measurement')->nullable()->comment('胸囲');
            $table->float('nvg_head_circumference')->nullable()->comment('頭囲');
            $table->char('nvg_nutrition_method')->nullable()->comment('栄養法 1:母乳 2:混合 3:人工乳');
            $table->string('nvg_factory_or_person')->nullable()->comment('施設名または担当者');
            $table->string('notices')->nullable()->comment('特記事項');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_13s');
    }
};
