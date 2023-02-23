<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsuranceCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insurance_cards', function (Blueprint $table) {
            //id
            $table->id('id');
            //患者ID
            $table->foreignId('patient_id');
            //保険者番号・記号・番号
            $table->string('insurance_card_number',100);
            //資格開始日
            $table->date('start_date');
            //資格終了日
            $table->date('end_date');
            //保険証最終確認日
            $table->date('last_confirmed_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insurance_cards');
    }
}
