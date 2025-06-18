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
            $table->string('title'); // VARCHAR(255) for post title
            $table->string('slug')->unique(); // Unique URL-friendly identifier
            $table->text('excerpt')->nullable(); // Short description, can be null
            $table->longText('content'); // Main post content
            $table->string('featured_image')->nullable(); // Image path, optional
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft'); // Post status
            $table->timestamp('published_at')->nullable(); // When post was published
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key to users
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // Foreign key to categories
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
