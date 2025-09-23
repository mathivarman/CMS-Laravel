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
        Schema::create('posts', function (Blueprint $table) {
            $table->bigInteger('id', true)->unsigned();
            $table->bigInteger('auther_id')->unsigned();
            $table->bigInteger('editor_id')->unsigned();
            $table->string('title',255);
            $table->string('slug',255);
            $table->string('excerpt',400);
            $table->longText('body',400);
            $table->enum('status',['draft','scheduled','published']);
            $table->timestamp('published_at');
            $table->timestamp('expires_at');
            $table->tinyInteger('is_featured');
            $table->bigInteger('featured_media_id')->unsigned();
            $table->longText('meta');
            $table->timestamp('deleted_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
