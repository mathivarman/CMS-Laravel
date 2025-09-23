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
        Schema::create('media_assects', function (Blueprint $table) {
            $table->bigInteger('id', true)->unsigned();
            $table->string('disk', 100);
            $table->string('path',255);
            $table->string('mime_type',100);
            $table->integer('size_kb')->unsigned();
            $table->integer('width')->unsigned();
            $table->integer('height')->unsigned();
            $table->string('alt',255);
            $table->longText('variants');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media_assects');
    }
};
