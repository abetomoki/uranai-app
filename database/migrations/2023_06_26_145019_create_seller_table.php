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
        Schema::create('seller', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nickname', 255);
            $table->timestamp('last_login_time')->nullable();
            $table->enum('availability_status', ['available', 'unavailable']);
            $table->enum('gender', ['male', 'female']);
            $table->unsignedInteger('age');
            $table->unsignedInteger('sales_record');
            $table->decimal('rating', 2, 1);
            $table->unsignedInteger('follower_count');
            $table->unsignedInteger('coconala_user_id');
            $table->string('search_text', 512);
            $table->text('detail');
            $table->string('profile_image', 2083);
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->timestamp('deleted_at')->nullable();

            $table->index('search_text');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seller');
    }
};

