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
            $table->id();
            //受付日
            $table->date('uke_day');
            //当日受付番号
            $table->integer('uke_no');
            //当日受付時間
            $table->time('uke_time');
            //外部キーの場合は外部キーとしての定義の仕方がある。foreignId
            //患者ID
            $table->foreignId('patient_id');
            //診察呼出日時
            $table->dateTime('call_of_consultation_date')->nullable();
            //診察終了日時
            $table->dateTime('finished_consltation_date')->nullable();
            //診療録記載日時
            $table->dateTime('chart_entry')->nullable();
            //文字数が決まっているものはstring 決まっていないものはtext
            //受付コメント
            $table->text('comment')->nullable();
            //会計終了日時
            $table->dateTime('accounting_end')->nullable();;
            $table->timestamps();
            //受付時間と受付番号を複合キーにして重複不可とする。
            //最近のフレームワークは複合キーを使用できないので、仮にIDを主キーとする。
            $table->unique(['uke_day','uke_no']);

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
