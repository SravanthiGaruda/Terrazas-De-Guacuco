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
        Schema::create('chat_databases', function (Blueprint $table) {
            // $table->id();
            // $table->string('sender')->nullable();
            // $table->string('receiver')->nullable();
            $table->string('senderName')->nullable();
            $table->string('recieverName')->nullable();
            $table->longText('message')->nullable();
            // $table->string('id')->nullable();
            // $table->string('email')->nullable();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chat_databases');
    }
};
