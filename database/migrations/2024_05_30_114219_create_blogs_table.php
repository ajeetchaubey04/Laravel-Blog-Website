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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('blog_title', 200);
            $table->string('url_slug')->unique();
            $table->text('description');
            $table->string('image')->nullable();
            $table->unsignedBigInteger('category_id'); // or $table->foreignId('category_id');
            $table->unsignedBigInteger('user_id')->nullable(); // or $table->foreignId('user_id');
            $table->tinyInteger('display_on_homepage');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->string('thumbnail', 40);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
