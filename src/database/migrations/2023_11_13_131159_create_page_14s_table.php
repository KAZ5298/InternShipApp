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
        Schema::create('page_14s', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id_gurdian')->comment('ユーザーID（保護者）');
            $table->date('week2_record_date')->nullable()->comment('記録日');
            $table->char('week2_question1', 1)->nullable()->comment('設問１ 「泣き声やお乳を飲む力が弱いと思いますか。」 1:はい 2:いいえ');
            $table->char('week2_question2', 1)->nullable()->comment('設問２ 「寝かせるときは、あお向けに寝かせていますか。」 1:はい 2:いいえ');
            $table->char('week2_question3', 1)->nullable()->comment('設問３ 「自動車に乗るとき、チャイルドシートを使用していますか。」 1:はい 2:いいえ');
            $table->char('week2_question4', 1)->nullable()->comment('設問４ 「保護者ご自身の睡眠で困っていることはありますか。」 1:はい 2:いいえ');
            $table->char('week2_question5', 1)->nullable()->comment('設問５ 「子育てについて気軽に相談できる人はいますか。」 1:はい 2:いいえ');
            $table->char('week2_question6', 1)->nullable()->comment('設問６ 「子育てについて不安や困難を感じることはありますか。」 1:はい 2:いいえ 3:何ともいえない');
            $table->text('week2_freespace')->nullable()->comment('自由記入欄');
            $table->date('month1_record_date')->nullable()->comment('記録日');
            $table->char('month1_question1', 1)->nullable()->comment('設問１ 「裸にすると手足をよく動かしますか。」 1:はい 2:いいえ');
            $table->char('month1_question2', 1)->nullable()->comment('設問２ 「お乳をよく飲みますか。」 1:はい 2:いいえ');
            $table->char('month1_question3', 1)->nullable()->comment('設問３ 「大きな音にビクッと手足を伸ばしたり、泣き出すことがありますか。」 1:はい 2:いいえ');
            $table->char('month1_question4', 1)->nullable()->comment('設問４ 「おへそはかわいていますか。」 1:はい 2:いいえ');
            $table->char('month1_question5', 1)->nullable()->comment('設問５ 「寝かせるときは、あお向けに寝かせていますか。」 1:はい 2:いいえ');
            $table->char('month1_question6', 1)->nullable()->comment('設問６ 「自動車に乗るとき、チャイルドシートを使用していますか。」 1:はい 2:いいえ');
            $table->char('month1_question7', 1)->nullable()->comment('設問７ 「保護者ご自身の睡眠で困っていることはありますか。」 1:はい 2:いいえ');
            $table->char('month1_question8', 1)->nullable()->comment('設問８ 「子育てについて気軽に相談できる人はいますか。」 1:はい 2:いいえ');
            $table->char('month1_question9', 1)->nullable()->comment('設問９ 「子育てについて不安や困難を感じることはありますか。」 1:はい 2:いいえ 3:何ともいえない');
            $table->text('month1_freespace')->nullable()->comment('自由記入欄');
            $table->date('month2_record_date')->nullable()->comment('記録日');
            $table->char('month2_question1', 1)->nullable()->comment('設問１ 「お乳をよく飲みますか。」 1:はい 2:いいえ');
            $table->char('month2_question2', 1)->nullable()->comment('設問２ 「目を動かして物を追って見ますか。」 1:はい 2:いいえ');
            $table->char('month2_question3', 1)->nullable()->comment('設問３ 「寝かせるときは、あお向けに寝かせていますか。」 1:はい 2:いいえ');
            $table->char('month2_question4', 1)->nullable()->comment('設問４ 「自動車に乗るとき、チャイルドシートを使用していますか。」 1:はい 2:いいえ');
            $table->char('month2_question5', 1)->nullable()->comment('設問５ 「保護者ご自身の睡眠で困っていることはありますか。」 1:はい 2:いいえ');
            $table->char('month2_question6', 1)->nullable()->comment('設問６ 「子育てについて気軽に相談できる人はいますか。」 1:はい 2:いいえ');
            $table->char('month2_question7', 1)->nullable()->comment('設問７ 「子育てについて不安や困難を感じることはありますか。」 1:はい 2:いいえ 3:何ともいえない');
            $table->text('month2_freespace')->nullable()->comment('自由記入欄');
            $table->date('month3_4_record_date')->nullable()->comment('記録日');
            $table->date('month3_4_question1')->nullable()->comment('設問１ 「首がすわったのはいつですか。」 ◯月◯日頃');
            $table->char('month3_4_question2', 1)->nullable()->comment('設問２ 「あやすとよく笑いますか。」 1:はい 2:いいえ');
            $table->char('month3_4_question3', 1)->nullable()->comment('設問３ 「目つきや目の動きがおかしいのではないかと気になりますか。」 1:はい 2:いいえ');
            $table->char('month3_4_question4', 1)->nullable()->comment('設問４ 「見えない方向から声をかけてみると、そちらの方を見ようとしますか。」 1:はい 2:いいえ');
            $table->char('month3_4_question5', 1)->nullable()->comment('設問５ 「外気浴をしていますか。」 1:はい 2:いいえ');
            $table->char('month3_4_question6', 1)->nullable()->comment('設問６ 「自動車に乗るとき、チャイルドシートを使用していますか。」 1:はい 2:いいえ');
            $table->char('month3_4_question7', 1)->nullable()->comment('設問７ 「お子さんの睡眠で困っていることはありますか。」 1:はい 2:いいえ');
            $table->char('month3_4_question8', 1)->nullable()->comment('設問８ 「保護者ご自身の睡眠で困っていることはありますか。」 1:はい 2:いいえ');
            $table->char('month3_4_question9', 1)->nullable()->comment('設問９ 「子育てについて気軽に相談できる人はいますか。」 1:はい 2:いいえ');
            $table->char('month3_4_question10', 1)->nullable()->comment('設問１０ 「子育てについて不安や困難を感じることはありますか。」 1:はい 2:いいえ 3:何ともいえない');
            $table->text('month3_4_freespace')->nullable()->comment('自由記入欄');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_14s');
    }
};
