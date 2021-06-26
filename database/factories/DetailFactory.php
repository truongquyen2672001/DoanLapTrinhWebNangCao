<?php

namespace Database\Factories;

use App\Models\Detail;
use App\Models\Objects;
use Illuminate\Database\Eloquent\Factories\Factory;

class DetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Detail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'chapter' => $this->faker->title,
            'content' => $this->faker->text(),
            'show' => $this->faker->randomElement($array = array('0','1')),
            'object_id' => Objects::all()->random()->id,
        ];
    }
}
