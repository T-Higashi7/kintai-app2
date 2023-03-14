<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Gairai>
 */
class GairaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //受付日は当日の日付を設定する。
            'day'=>'20230309',
            'no' =>fake()->numberBetween(0, 100),
            'time'=>fake()->time(),
            //患者IDは外部キーとなり、patientのレコードも同時に作成されて関連付けされるので不要
            //診察呼出日時
            'call_of_consultation_date'=> null,
            //診察終了日時
            'finished_consltation_date'=> null,
            //診療録記載日時
            'medical_record_entry_date'=> null,
            //受付コメント
            'comment'=> null,
            //会計終了日時
            'accounted_date'=> null
        ];
    }
}
