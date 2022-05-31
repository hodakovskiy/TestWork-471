<?php

namespace Database\Factories;

use App\Models\Records;
use App\Models\Tags;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecordsTagsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
             'records_id' => Records::factory(),
             'tags_id' => Tags::factory(),
             'description' => $this->faker->text(),
        ];
    }
}
