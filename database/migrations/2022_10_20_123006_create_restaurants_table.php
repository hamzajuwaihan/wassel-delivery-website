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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('location')->nullable();
            $table->float('latitude', 10, 6);
            $table->float('longitude', 10, 6);
            $table->decimal('delivery_fee');
            $table->enum('status', ['Available', 'Closed','Busy'])->default('Available');
            $table->foreignId('category_id')->constrained('categories')->onUpdate('cascade')
            ->onDelete('cascade');

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
        Schema::dropIfExists('restaurants');
    }
};
