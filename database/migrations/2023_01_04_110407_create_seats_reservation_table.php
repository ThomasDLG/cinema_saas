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
        Schema::create('seats_reservation', function (Blueprint $table) {
            $table->id();
            $table->char('name', 3);
            $table->boolean('status')->default(0);
            $table->unsignedBigInteger('movies_id');
            $table->foreign('movies_id')
                ->references('id')
                ->on('movies')
                ->restrictOnUpdate()
                ->restrictOnDelete();
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
        Schema::dropIfExists('seats_reservation');
    }
};
