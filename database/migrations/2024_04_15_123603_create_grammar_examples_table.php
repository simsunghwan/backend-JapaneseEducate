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
    Schema::create('grammar_examples', function (Blueprint $table) {
      $table->id();
      $table->foreignId('grammar_id')->constrained('grammars')->onDelete('cascade')->onUpdate('cascade');
      $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
      $table->text('example');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('grammar_examples');
  }
};
