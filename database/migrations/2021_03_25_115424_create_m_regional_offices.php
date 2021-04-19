<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMRegionalOffices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_regional_offices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('m_postal_code_id');
            $table->string('regional_office_name_jpn',45);
            $table->string('regional_office_name_eng',100);
            $table->string('address',100)
                ->nullable();
            $table->integer('phone_number')
                ->nullable();
            $table->integer('fax_number')
                ->nullable();
            $table->integer('created_by')
                ->nullable();
            $table->integer('updated_by')
                ->nullable();
            $table->timestamps();

            $table->foreign('m_postal_code_id')
                ->references('id')
                ->on('m_postal_codes')
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
        Schema::dropIfExists('m_regional_offices');
    }
}
