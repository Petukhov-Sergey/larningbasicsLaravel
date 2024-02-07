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
            $table->text('body');
            $table->unsignedBigInteger('likes')->nullable();
            $table->boolean('is_published')->default(1);
//            $table->unsignedBigInteger('author_id')->nullable();
//            $table->foreign('author_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
//        Schema::table('post', function (Blueprint $table) {
//            $table->dropForeign(['author_id']);
//        });
        Schema::dropIfExists('posts');
    }
};
