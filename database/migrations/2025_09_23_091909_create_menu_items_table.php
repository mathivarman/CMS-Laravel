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
        Schema::create('menu_items', function (Blueprint $table) {
            $table->bigInteger('id', true)->unsigned();
            $table->bigInteger('menu_id')->unsigned();
            $table->bigInteger('parent_id')->unsigned();
            $table->string('label', 255);
            $table->string('url', 255);
            $table->enum('target', ['_self', '_blank'])->default('_self');
            $table->integer('order_column')->unsigned();
            $table->tinyInteger('is_active')->unsigned();
            $table->longText('visible_roles')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_items');
    }
};
