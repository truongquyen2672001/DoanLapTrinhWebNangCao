<?php

namespace Database\Factories;

use App\Models\Objects;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;

class ObjectsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Objects::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'mota' => $this->faker->text(),
            'sochapter' => $this->faker->text(),
            'images' => $this->faker->imageUrl(),
            'author' => $this->faker->title,
            'show' => $this->faker->randomElement($array = array('0','1')),
            'type_id' => Type::all()->random()->id,
        ];
    }
}
