<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_name' => $this->faker->word,
            'cat_id' => $this->faker->numberBetween(1, 10), // Assuming category IDs range from 1 to 10
            'sup_id' => $this->faker->numberBetween(1, 10), // Assuming supplier IDs range from 1 to 10
            'product_code' => $this->faker->unique()->ean8,
            'product_garage' => $this->faker->word,
            'product_route' => $this->faker->word,
            'product_image' => '', // assuming you have a default product image
            'product_qty' => $this->faker->numberBetween(1, 100),
            'buy_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'expire_date' => $this->faker->dateTimeBetween('now', '+1 year'),
            'buying_price' => $this->faker->randomFloat(2, 10, 1000), // Example buying price range
            'selling_price' => $this->faker->randomFloat(2, 20, 2000), // Example selling price range
        ];
    }
}
