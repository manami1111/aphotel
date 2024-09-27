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
        Schema::table('reserves', function (Blueprint $table) {
            $table->foreignId('detailid')->constrained();
            $table->foreignId('roomid')->constrained();
            $table->date('date')->nullable();
            $table->string('price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reserves', function (Blueprint $table) {
            $table->dropForeign(['detailid']); // 外部キー制約を削除
            $table->dropForeign(['roomid']); // 外部キー制約を削除
            $table->dropColumn(['detailid', 'roomid', 'date', 'price']); // カラムを削除
        });
    }
};
