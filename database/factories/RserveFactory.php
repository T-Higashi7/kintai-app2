<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Rserve>
 */
class RserveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //予約日 一週間前から一週間後
            'day'=>fake()->dateTimeBetween('-1 week', '+4 week'),
            'time'=>fake()->time(),
            'kinds'=>fake()->randomElement(['診察', 'CT', 'リハビリ', '栄養指導','MRI'])
        ];
    }
}
