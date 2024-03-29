<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tables')) {
            Schema::create('tables', function(Blueprint $table) {
                $table->increments('id');
                $table->string('name');

                $table->integer('room_id')
                    ->unsigned()
                    ->index()
                    ->default(0)
                    ->foreign('room_id')
                    ->references('id')->on('rooms')
                    ->onDelete('cascade');

                $table->integer('floor_id')
                    ->index()
                    ->default(0)
                    ->foreign('floor_id')
                    ->references('id')
                    ->on('floors')
                    ->onDelete('cascade');

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
        Schema::drop('tables');
    }
}
