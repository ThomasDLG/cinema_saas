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
        Schema::disableForeignKeyConstraints();
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('pseudo');
            $table->string('phone')->default('');
            $table->string('adress')->default('');
            $table->string('city')->default('');
            $table->string('zip')->default('');
            $table->integer('coins')->default(0);
            $table->string('email')->unique();
            $table->string('avatar')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->default('customer');
            $table->boolean('newsletter')->nullable();
            $table->unsignedBigInteger('likes_id')->nullable();
            $table->foreign('likes_id')
                ->references('id')
                ->on('likes')
                ->restrictOnUpdate()
                ->restrictOnDelete();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
