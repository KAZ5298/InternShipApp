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
        Schema::create('page_06s', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id_gurdian')->comment('ユーザーID（保護者）');
            $table->integer('user_id_supporter')->comment('ユーザーID（支援者）');
            $table->char('inspection_item_name', 1)->nullable()->comment('検査項目名');
            $table->string('inspection_item_name_other')->nullable()->comment('検査項目名（その他）');
            $table->date('inspection_item_date')->nullable()->comment('検査年月日');
            $table->string('inspection_item_remarks')->nullable()->comment('検査項目備考');
            $table->char('blood_type', 1)->nullable()->comment('血液型');
            $table->char('blood_type_rh', 1)->nullable()->comment('血液型RH');
            $table->char('hearing_inspection_right', 1)->nullable()->comment('聴覚検査（右）');
            $table->char('hearing_inspection_left', 1)->nullable()->comment('聴覚検査（左）');
            $table->text('spare')->nullable()->comment('予備');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_06s');
    }
};
