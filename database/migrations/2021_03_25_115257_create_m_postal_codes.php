<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMPostalCodes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_postal_codes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('prefecture_id');
            $table->integer('postal_code');
            $table->integer('city_code');
            $table->string('town', 200)
                ->nullable();
            $table->string('area', 200)
                ->nullable();
            $table->string('town_kana', 200)
                ->nullable();
            $table->string('area_kana', 200)
                ->nullable();
            $table->string('town_kanji', 200)
                ->nullable();
            $table->string('area_kanji', 200)
                ->nullable();
            $table->timestamps();


            $table->foreign('prefecture_id')
                ->references('id')
                ->on('prefectures')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_postal_codes');
    }
}
