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
        Schema::create('post_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('describe')->nullable();
            $table->longText('content')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('user_id')->comment('nguoi viet bai');
            $table->unsignedBigInteger('admin_id')->comment('admin duyet - null thi chua duyet')->nullable();
            $table->dateTime('approve_date')->comment('ngay duyet')->nullable();
            $table->string('image')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->index('category_id');
            $table->index('user_id');
            $table->index('admin_id');
            $table->index('created_at');
            $table->index('updated_at');
        });
        Schema::create('post_audio', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_id')->index();
            $table->string('source')->nullable();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_categories');
        Schema::dropIfExists('posts');
        Schema::dropIfExists('post_audio');
    }
};
