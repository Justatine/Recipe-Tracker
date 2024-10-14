<?php

use App\Models\Dish;
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
        Schema::create('dishes', function (Blueprint $table) {
            $table->id('dishId');
            $table->unsignedBigInteger(column: 'userId');
            $table->foreign('userId')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });

        Dish::insert([
            [
                'userId'=>'1',
                'name'=>'Chicken Adobo',
                'description'=>'Yummy chicken',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dishes');
    }
};
