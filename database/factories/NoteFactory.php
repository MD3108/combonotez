<?php

namespace Database\Factories;

use App\Models\Note;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Note::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'assistOne' => $this->faker->randomElement(['A', 'B', 'C']),
            'assistTwo' => $this->faker->randomElement(['A', 'B', 'C']),
            'damage' => rand(1,120000),
            'ki_start' => rand(0,7),
            'ki_end' => rand(0,7),
            'difficulty' => $this->faker->randomElement(['easy', 'average', 'hard', 'expert']),
            'youtube_url' => 'https://www.youtube.com/embed/'. Str::random(10),
            'user_id' => rand(1,2),
        ];
    }
}
