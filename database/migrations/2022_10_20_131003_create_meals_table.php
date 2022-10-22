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
        Schema::create('meals', function (Blueprint $table) {
            $table->id();
           
            // $table->foreignId('cat_id')->references('id')->on('categories')
            // ->onDelete('cascade');
            $table->foreignId('menu_id')->constrained('menus')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name');
            $table->string('image');
            $table->decimal('price');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meals');
    }
};
