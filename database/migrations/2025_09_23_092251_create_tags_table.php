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
        Schema::create('tags', function (Blueprint $table) {
            $table->bigInteger('id', true)->unsigned();
            $table->string('name', 255);
            $table->string('slug', 255);
            $table->timestamps();
        });

        Schema::create('post_tag', function (Blueprint $table) {
            $table->bigInteger('id', true)->unsigned();
            $table->bigInteger('post_id',)->unsigned();
            $table->bigInteger('tag_id')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
    }
};
