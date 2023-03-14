<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {   
        $id = fake()->randomNumber(8, false);
        return [
            //患者ID 
            'id'=>str_pad($id,8,0,STR_PAD_LEFT),
            'name'=>fake()->name()
        ];
    }
}
