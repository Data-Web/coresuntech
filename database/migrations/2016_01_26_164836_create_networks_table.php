<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNetworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('networks')) {
            Schema::create('networks', function(Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('password');

                $table->integer('shop_id')
                    ->index()
                    ->default(0)
                    ->foreign('shop_id')
                    ->references('id')
                    ->on('shops')
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
        Schema::drop('networks');
    }
}
