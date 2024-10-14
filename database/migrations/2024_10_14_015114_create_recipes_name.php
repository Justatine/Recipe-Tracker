<?php

use App\Models\Recipe;
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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id('recipeId');
            $table->unsignedBigInteger(column: 'dishId');
            $table->foreign('dishId')
                ->references('dishId')
                ->on('dishes')
                ->onDelete('cascade');
            $table->text('ingredient');
            $table->timestamps();
        });

        Recipe::insert([
            [
                'dishId'=>'1',
                'ingredient'=>'2 tablespoons vegetable oil',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'dishId'=>'1',
                'ingredient'=>'1 (3 pound) chicken, cut into pieces',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'dishId'=>'1',
                'ingredient'=>'1 large onion, quartered and sliced',
                'created_at' => now(),
                'updated_at' => now()
            ],            
            [
                'dishId'=>'1',
                'ingredient'=>'2 tablespoons minced garlic',
                'created_at' => now(),
                'updated_at' => now()
            ],            
            [
                'dishId'=>'1',
                'ingredient'=>'⅔ cup low sodium soy sauce',
                'created_at' => now(),
                'updated_at' => now()
            ],            
            [
                'dishId'=>'1',
                'ingredient'=>'⅓ cup white vinegar',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'dishId'=>'1',
                'ingredient'=>'1 tablespoon garlic powder',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'dishId'=>'1',
                'ingredient'=>'2 teaspoons black pepper',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'dishId'=>'1',
                'ingredient'=>'1 bay leaf',
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
        Schema::dropIfExists('recipes');
    }
};
