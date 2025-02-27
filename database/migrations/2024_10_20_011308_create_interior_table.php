<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('interior', function (Blueprint $table) {
            $table->id('id_interior');
            $table->string('img_interior1')->nullable();
            $table->string('img_interior2')->nullable();
            $table->string('img_interior3')->nullable();
            $table->string('img_interior4')->nullable();
            $table->string('img_interior5')->nullable();
            $table->string('img_interior6')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interior');
    }
};