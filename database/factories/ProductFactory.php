<?php

namespace Database\Factories;

use App\Models\Unit;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = Category::pluck('id')->toArray();
        $units = Unit::pluck('id')->toArray();

        return [
            'category_id' => !empty($categories) ? $this->faker()->randomElement($categories) : Category::factory(),
            'unit_id' => !empty($units) ? $this->faker()->randomElement($units) : Unit::factory(),
            'sku' => 'P.' . date('ymd') . '.' . strtoupper($this->faker()->unique()->lexify('????')),
            'name' => $this->faker()->words(3, true),
            'description' => $this->faker()->sentence(),
            'purchase_price' => $this->faker()->numberBetween(10000, 500000),
            'selling_price' => $this->faker()->numberBetween(550000, 1000000),
            'quantity' => $this->faker()->numberBetween(0, 100),
            'min_stock' => $this->faker()->numberBetween(5, 20),
            'is_active' => $this->faker()->boolean(90),
            'created_at' => $this->faker()->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
