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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('description', 200);
            $table->string('image', 50)->nullable(); //fillable a jeta dibo na seta aikhan theke nullable kore dite hobe
            $table->string('tags', 200)->nullable();
            $table->decimal('price',10);
            $table->tinyInteger('category_id'); // only category_id. not value length
            $table->boolean('availability')->default(0)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
