<?php

namespace Database\Factories;

use App\Models\Resource;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResourceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Resource::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'title' => $this->faker->words(6, true),
          'description' => $this->faker->paragraphs(2, true),
          'button' => $this->faker->words(3, true),
          'image' => $this->faker->imageUrl(360, 360, 'animals', true),
          'file' => $this->faker->fileExtension('pdf'),
          'downloads' => $this->faker->randomNumber(5, false),
        ];
    }
}
