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
            $table->id();
            $table->string('category_name', 200);
            $table->string('url_slug', 300); // Changed from 'url-slug' to 'url_slug'
            $table->unsignedBigInteger('user_id');
            $table->tinyInteger('status')->default(1); // Assuming 1 for active, 0 for inactive
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->softDeletes(); // Automatically adds 'deleted_at' column
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
