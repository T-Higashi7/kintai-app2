<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\InsuranceCard>
 */
class InsuranceCardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //保険者番号
            'insurance_card_number'=>fake()->randomNumber(8, true),
            //記号
            'symbol'=>fake()->bothify('?????-#####'),
            //番号 4桁までのランダムな数字
            'number'=>fake()->randomNumber(4, false),
            //枝番 2桁 指定した配列randomElementの要素をランダムで取得
            'branch_number'=>fake()->randomElement(['00', '01', '02', '03', '04','05','06','07']),
            //資格開始日 今日までのランダムな日付
            'start_date'=>fake()->date(),
            //資格有効 trueかfalseか
            'insurance_card_valid'=>fake()->boolean(),
            //保険証最終確認日
            'last_confirmed_date'=>fake()->dateTimeBetween('-1 month','now')
        ];
    }
}
