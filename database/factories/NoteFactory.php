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
        $combos = [ '{"inputs": ["2x","L","sep", "2x", "M", "sep", "2x", "H"]}', 
                    '{"inputs": ["2x", "L", "sep", "2x", "M", "sep", "H", "sep", "SD", "sep", "M", "sep", "L", "sep", "2", "H", "sep", "4x", "S", "sep", "2", "M"]}',
                    '{"inputs": ["2x", "L", "sep", "2x", "M", "sep", "3", "H", "sep", "H"]}',
                    '{"inputs": ["236", "L", "sep", "SD", "sep", "M", "sep", "L", "sep", "2", "H", "sep", "VN", "sep", "DR"]}',
                    '{"inputs": ["6", "3x", "L", "sep", "SD", "sep", "H"]}',
                    '{"inputs": ["2", "L", "sep", "H", "sep", "SD", "sep", "A2"]}',
                    '{"inputs": ["7x", "L", "sep", "VN", "sep", "236", "4x", "L", "sep", "A1", "sep", "DR"]}',
                    '{"inputs": ["3x", "L", "sep", "SD", "sep", "M", "sep", "L", "sep", "2", "H", "sep", "M", "sep", "L", "sep", "S", "sep", "236", "L"]}',
                    '{"inputs": ["2", "2x", "M", "sep", "8", "2", "H", "sep", "214", "3x", "H", "sep", "2x", "L", "sep", "2", "2x", "M", "sep", "H", "sep", "S", "sep", "SD", "sep", "M", "sep", "L", "sep", "9", "M", "sep", "A1", "sep", "L", "sep", "H", "sep", "214", "2x", "H", "sep", "2x", "6", "2x", "L", "sep", "S", "sep", "236", "L", "sep", "A2", "sep", "DR"]}',
                    '{"inputs": ["2", "2x", "M", "sep", "9", "M", "sep", "L", "sep", "9", "2x", "L", "sep", "H", "sep", "A1", "sep", "2", "2x", "M", "sep", "2", "S", "sep", "SD", "sep", "M", "sep", "L", "sep", "2", "H", "sep", "SD", "sep", "M", "sep", "2x", "L", "sep", "2", "H", "sep", "DL", "7", "L", "sep", "DL", "L", "sep", "S", "sep", "236", "L"]}'
                ];
        return [
            'name' => $this->faker->name(),
            'notations' => $this->faker->randomElement($combos),
            'assistOne' => rand(1,3),
            'assistTwo' => rand(1,3),
            'damage' => rand(1,10500),
            'ki_start' => rand(0,7),
            'ki_end' => rand(0,7),
            'difficulty' => rand(1,4),
            'youtube_url' => 'https://www.youtube.com/embed/'. Str::random(10),
            'user_id' => rand(1,2),
        ];
        /**/
    }
}
