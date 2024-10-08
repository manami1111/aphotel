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
            $table->string('room_id');
            $table->id('roomkind_id');
            $table->string('roomnumber');
            $table->string('image_path', 255)->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    if (Schema::hasTable('rooms')) {
        Schema::dropIfExists('rooms');

    }
}
};
