<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMProperties extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('regional_office_id');
            $table->unsignedBigInteger('portfolio_id');
            $table->string('fig_code', 5)
                ->nullable();
            $table->integer('jeed_no')
                ->unique();
            $table->string('property_name_eng',100)
                ->nullable();
            $table->string('property_name_jpn',450)
                ->nullable();
            $table->string('rank',3)
                ->nullable();
            $table->string('address',100)
                ->nullable();
            $table->enum('parking_flag',['no', 'yes']);
            $table->date('acquistion_date')
                ->nullable();
            $table->text('location_map');
            $table->string('property_latitude')
                ->nullable();
            $table->string('property_longitude')
                ->nullable();
            $table->integer('zoom')
                ->nullable();
            $table->integer('create_by')
                ->nullable();
            $table->integer('updated_by')
                ->nullable();
            $table->string('property_post_code',45)
                ->nullable();
            $table->integer('regional_office_bank_account')
                ->nullable();
            $table->timestamps();

            $table->foreign('regional_office_id')
                ->references('id')
                ->on('m_regional_offices')
                ->onDelete('restrict');

            $table->foreign('portfolio_id')
                ->references('id')
                ->on('m_portfolios')
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
        Schema::dropIfExists('m_properties');
    }
}
