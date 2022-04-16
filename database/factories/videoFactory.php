<?php

namespace Database\Factories;

use App\Models\category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class videoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'tumblie'=>'https://loremflickr.com/446/240/world?random='.rand(1,99),
            'length'=>50,
            'slug'=>$this->faker->slug(),
            'description'=>$this->faker->text(),
            'url'=>$this->faker->url(),
            'category_id'=> category::first()
        ];
    }
}