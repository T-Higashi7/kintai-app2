<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //fakeのインスタンスを作成してその中のaddressメソッドを呼んでいる
            'address'=>fake()->address(),
            'telephone_number'=>fake()->phoneNumber(),
        ];
    }
}
