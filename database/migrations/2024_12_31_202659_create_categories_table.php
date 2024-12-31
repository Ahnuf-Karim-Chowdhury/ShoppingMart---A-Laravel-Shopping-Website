<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('department_id')
                ->index()
                ->constrained();
            $table->foreignId('parent_id')
                ->nullable()
                ->index()
                ->constrained('categories');
            $table->boolean('active')
                ->default(true);
            $table->timestamps();
        });
        
        //  order By Desc Time Here 
        DB::statement('ALTER TABLE categories ADD COLUMN order_attribute TIMESTAMP DEFAULT CURRENT_TIMESTAMP');
        DB::statement('CREATE INDEX order_attribute_index ON categories (order_attribute DESC)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
