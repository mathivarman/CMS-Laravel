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
        Schema::create('categories', function (Blueprint $table) {
            $table->bigInteger('id', true)->unsigned();
            $table->string('name',255);
            $table->string('slug',255);
            $table->bigInteger('parent_id')->unsigned();
            $table->text('description')->nullable();
            $table->integer('order_column')->unsigned();
            $table->timestamps();
        });

        Schema::create('category_post', function (Blueprint $table) {
            $table->bigInteger('id', true)->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('post_id')->unsigned();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
