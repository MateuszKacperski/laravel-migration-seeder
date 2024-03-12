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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company',100);
            $table->string('dep_station',50);
            $table->string('arr_station',50);
            $table->string('dep_time',20);
            $table->string('arr_time',20);
            $table->string('train_code',20);
            $table->tinyInteger('train_wagons')->unsigned();
            $table->boolean('on_train')->default(1);
            $table->boolean('deleted')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
