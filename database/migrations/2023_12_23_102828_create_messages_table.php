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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->text('located')->nullable();
            $table->boolean('received')->default(false); // يشير إذا كانت الرسالة مستلمة أم مرسلة
            $table->integer('received_id')->nullable(); // يشير إذا كانت الرسالة مستلمة أم مرسلة
            $table->integer('user_id'); // يشير إذا كانت الرسالة مستلمة أم مرسلة

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
