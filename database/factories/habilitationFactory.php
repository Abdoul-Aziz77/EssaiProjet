<?php

namespace Database\Factories;

use App\Models\habilitation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\habilitation>
 */
class habilitationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = habilitation::class;
     
    public function definition()
    {
        return [
            //

            "libelle"=>$this->faker->title(),
            "description"=>$this->faker->text(),
        ];
    }
}
