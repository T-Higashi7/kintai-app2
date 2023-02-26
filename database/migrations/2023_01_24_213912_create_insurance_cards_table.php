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
            $table->id();
            //患者ID
            $table->foreignId('patient_id');
            //保険者番号
            $table->char('insurance_card_number',8);
            //記号
            $table->string('symbol',20);
            //番号
            $table->string('number');
            //枝番
            $table->char('branch_number',2)->nullable();
            //資格開始日
            $table->date('start_date');
            //資格有効
            $table->boolean('insurance_card_valid');
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
