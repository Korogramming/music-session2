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
        Schema::create('post_videos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('youtube_url')->nullable();
            $table->timestamps(); //created_at
            $table->string('description');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_videos');
    }
};
