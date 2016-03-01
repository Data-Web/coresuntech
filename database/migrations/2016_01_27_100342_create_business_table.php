<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('business')) {
            Schema::create('business', function(Blueprint $table) {
                $table->increments('id');
                $table->string('name')->index()->unique();
                $table->text('name_rewrite');
                $table->integer('parent')->default(0);
                $table->boolean('status')->default(1);
                $table->string('language')->default('en');
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
        Schema::drop('business');
    }
}
