<?php

namespace Database\Factories;
use App\Models\Category;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;

class TypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Type::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'typename' => $this->faker->name(),
            'category_id' => Category::all()->random()->id,
        ];
    }
}
