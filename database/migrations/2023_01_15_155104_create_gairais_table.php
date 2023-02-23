<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGairaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gairais', function (Blueprint $table) {
            //$table->bigIncrements('id');
            //受付日
            $table->date('uke_day');
            //当日受付番号
            $table->integer('uke_no');
            //当日受付時間
            $table->time('uke_time');
            //外部キーの場合は外部キーとしての定義の仕方がある。foreignId
            //患者ID
            $table->foreignId('patient_id');
            //診察呼出済
            $table->boolean('call_of_consultation')->nullable();
            //診察終了済
            $table->boolean('is_finished_consltation')->nullable();
            //診療録記載日時
            $table->dateTime('chart_entry')->nullable();
            //文字数が決まっているものはstring 決まっていないものはtext
            //受付コメント
            $table->text('comment')->nullable();
            //会計終了日時
            $table->time('accounting_end')->nullable();
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
        Schema::dropIfExists('gairais');
    }
}
