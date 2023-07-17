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
        Schema::create('user_coment', function (Blueprint $table) {
            $table->id();
            $table->integer("product_id");
            $table->string("name");
            $table->string("data");
            $table->integer("marks");
            $table->text("img");
            $table->text("coment");
            $table->text("avatar");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_coment');
    }
};
