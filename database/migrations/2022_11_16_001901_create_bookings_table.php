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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('members');
            $table->foreignId('car_id')->nullable()->constrained('cars');
            $table->foreignId('driver_id')->nullable()->constrained('drivers');
            $table->string('name');
            $table->string('description');
            $table->string('dt_origin');
            $table->string('dt_destination');
            $table->integer('numbers');
            $table->string('distance')->nullable();
            $table->boolean('status')->nullable();
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
        Schema::dropIfExists('bookings');
    }
};
