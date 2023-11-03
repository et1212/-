<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('techniques', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('frame_startup', 50)->nullable();
            $table->string('total_frames', 50)->nullable();
            $table->string('damage', 50)->nullable();
            $table->string('on_shield', 50)->nullable();
            $table->string('reference', 50)->nullable();//備考欄の役割
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('techniques');
    }
};
