<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('post_engagement_stats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')->constrained()->cascadeOnDelete();

            $table->date('date');

            $table->unsignedInteger('view_count')->default(0);
            $table->unsignedInteger('like_count')->default(0);
            $table->unsignedInteger('reaction_count')->default(0);

            // 将来用（今は使わなくてもOK）
            $table->unsignedInteger('score')->default(0);

            $table->timestamps();

            $table->unique(['post_id', 'date']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('post_engagement_stats');
    }
};
