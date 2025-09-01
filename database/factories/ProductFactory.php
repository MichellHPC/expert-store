<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        // Forçar Faker em português
        $this->faker = \Faker\Factory::create('pt_BR');

        return [
            'name' => $this->faker->words(mt_rand(1, 3), true), // 1 a 3 palavras
            'price' => $this->faker->randomFloat(2, 5, 500), // preço entre 5 e 500
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
