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
        Schema::create('roomkinds', function (Blueprint $table) {
            $table->id('roomkind_id');
            $table->string('roomname');
            $table->string('maxpeople');
        });

        Schema::table('roomkinds', function (Blueprint $table) {
            $table->string('image_path')->nullable(); // 画像パスのカラムを追加
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roomkinds');

        Schema::table('roomkinds', function (Blueprint $table) {
            $table->dropColumn('image_path'); // 画像パスのカラムを削除
        });
    }
};
