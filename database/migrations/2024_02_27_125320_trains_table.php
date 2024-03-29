<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string('company',64);
            $table->string('departure_station',64);
            $table->string('arrival_station',64);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->smallInteger('code', 7)->unique();
            $table->tinyInteger('number_carriages')->nullable()->unsigned();
            $table->boolean('on_time')->default(true);
            $table->boolean('cancelled')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};