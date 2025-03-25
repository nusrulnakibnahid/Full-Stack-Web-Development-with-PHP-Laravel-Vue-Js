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
            $table->string('title');
            $table->text('description')->index();
            $table->string('email')->unique();
            $table->decimal('price', 8, 2);
            $table->double('rating', 8, 2)->nullable();
            $table->boolean('is_published')->default(false);
            $table->date('published_at');
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft');

            // Declaring a foreign key - one way
            // $table->foreignId('user_id')->constrained();
            // $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreignId('user_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate()->restrictOnDelete()->restrictOnUpdate();


            // Declaring a foreign key - another way
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

            // Equivalent to the above
            // $table->foreignId('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();

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
