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
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('content');
            $table->foreignId('author_id')->constrained('users')->onDelete('restrict');
            $table->json('tags')->nullable();
            $table->boolean('is_hidden')->default(false);
            $table->dateTime('published_at')->nullable();
            $table->dateTime('hidden_at')->nullable();
            $table->string('featured_image')->nullable();
            $table->softDeletes(); // Add soft deletes column
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
