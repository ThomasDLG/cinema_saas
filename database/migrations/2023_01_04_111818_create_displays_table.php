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
        Schema::create('displays', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rooms_id');
            $table->foreign('rooms_id')
                ->references('id')
                ->on('rooms')
                ->restrictOnUpdate()
                ->restrictOnDelete();
            $table->date('date');
            $table->unsignedBigInteger('hours_id');
            $table->foreign('hours_id')
                ->references('id')
                ->on('hours')
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
        Schema::dropIfExists('displays');
    }
};
