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
        Schema::create('diners_reservation', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reservations_id');
            $table->foreign('reservations_id')
                ->references('id')
                ->on('reservations')
                ->restrictOnUpdate()
                ->restrictOnDelete();
            $table->unsignedBigInteger('diners_id');
            $table->foreign('diners_id')
                ->references('id')
                ->on('diners')
                ->restrictOnUpdate()
                ->restrictOnDelete();
            $table->integer('quantity')->default(0);
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
        Schema::dropIfExists('diners_reservation');
    }
};
