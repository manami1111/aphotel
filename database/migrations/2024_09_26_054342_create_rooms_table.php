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
        Schema::create('rooms', function (Blueprint $table) {
            $table->string('roomid');
            $table->id('roomkindid');
            $table->string('roomnumber');
            $table->string('image_path', 255)->nullable(); // ここで直接カラムを追加
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
           // テーブルが存在する場合のみ削除
    if (Schema::hasTable('rooms')) {
        Schema::dropIfExists('rooms');

    }
}
};
