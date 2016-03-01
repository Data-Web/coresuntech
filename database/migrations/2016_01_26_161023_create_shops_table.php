<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('shops')) {
            Schema::create('shops', function(Blueprint $table) {
                $table->increments('id');
                $table->string('name')->index();
                $table->text('googlemap');
                $table->text('guide');
                $table->string('worktime');
                $table->string('dayof');
                $table->boolean('smoking')->default(1);
                $table->boolean('bring_pet')->default(1);
                $table->integer('count_seat')->default(0);
                $table->integer('count_room')->default(0);
                $table->integer('count_staff')->default(0);
                
                $table->integer('user_id')
                    ->index()
                    ->default(0)
                    ->foreign('user_id')
                    ->references('id')->on('users')
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
        Schema::drop('shops');
    }
}
