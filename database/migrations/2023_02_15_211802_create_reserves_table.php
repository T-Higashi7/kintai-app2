<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserves', function (Blueprint $table) {
            //id
            $table->id();
            //患者ID
            $table->foreignId('patient_id');
            //予約日
            $table->date('day');
            //予約時間
            $table->time('time');
            //予約種別(ex 検査、診察、リハビリ、栄養指導等)
            $table->string('kinds',5);
            //予約コメント
            $table->text('comment')->nullable();
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
        Schema::dropIfExists('reserves');
    }
};
