<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('phones')) {
            Schema::create('phones', function(Blueprint $table) {
                $table->increments('id');
                $table->string('country_code');
                $table->string('label');
                $table->string('phone_number');
                $table->string('landline_number');
                $table->string('fax_number');
                
                $table->integer('shop_id')
                    ->index()
                    ->default(0)
                    ->foreign('shop_id')
                    ->references('id')->on('shops')
                    ->onDelete('cascade');

                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('phones');
    }
}
