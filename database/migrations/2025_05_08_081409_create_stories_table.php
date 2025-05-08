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
        Schema::create('stories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("storyTypeId")->nullable();
            $table->foreign("storyTypeId")->references("id")->on("story_types");
            $table->unsignedBigInteger("taskelId")->nullable();
            $table->foreign("taskelId")->references("id")->on("tashkels");
            $table->string("summry")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stories');
    }
};
