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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')
                ->references('id')
                ->on('users')
                ->restrictOnUpdate()
                ->restrictOnDelete();
            $table->unsignedBigInteger('seats_reservation_id');
            $table->foreign('seats_reservation_id')
                ->references('id')
                ->on('seats_reservation')
                ->restrictOnUpdate()
                ->restrictOnDelete();
            $table->unsignedBigInteger('movies_id');
            $table->foreign('movies_id')
                ->references('id')
                ->on('movies')
                ->restrictOnUpdate()
                ->restrictOnDelete();
            $table->date('date');
            $table->time('hour');
            $table->decimal('price', $precision = 8, $scale = 2);
            $table->char('download', 255);
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
        Schema::dropIfExists('reservations');
    }
};
