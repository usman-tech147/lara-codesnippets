<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMPortfolios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('name_eng',100);
            $table->string('name_jpn',100);
            $table->date('acquisition_date')
                ->nullable();
            $table->string('portfolio_manager',100)
                ->nullable();
            $table->integer('status')
                ->nullable();
            $table->integer('created_by')
                ->nullable();
            $table->integer('updated_by')
                ->nullable();
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
        Schema::dropIfExists('m_portfolios');
    }
}
