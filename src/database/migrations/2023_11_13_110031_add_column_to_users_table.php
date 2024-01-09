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
        Schema::table('users', function (Blueprint $table) {
            $table->string('fullname')->after('remember_token');
            $table->string('fullname_huri')->after('fullname');
            $table->char('role', 1)->after('fullname_huri')->comment('1:保護者 2:役所 3:支援者');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('fullname');
            $table->dropColumn('fullname_huri');
            $table->dropColumn('role');
        });
    }
};
