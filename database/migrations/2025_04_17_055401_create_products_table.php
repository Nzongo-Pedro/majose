<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_category')->constrained('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_subcategory')->constrained('sub_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_size')->constrained('sizes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_color')->constrained('colors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_gender')->constrained('genders')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_old')->constrained('olds')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name');
            $table->decimal('price', 8, 2);
            $table->string('discount');
            $table->longText('description');
            $table->timestamps();
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
