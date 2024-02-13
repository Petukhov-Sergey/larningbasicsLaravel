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

            $table->softDeletes();

            $table->unsignedBigInteger('category_id');

            $table->index('category_id', 'post_category_idx');

            $table->foreign('category_id', 'post_category_fk')->references('id')->on('categories');
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
