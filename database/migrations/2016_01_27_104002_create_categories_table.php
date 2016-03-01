<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('categories')) {
            Schema::create('categories', function(Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->text('name_rewrite');
                $table->text('image');
                $table->integer('parent')->default(0);
                $table->boolean('status')->default(1);
                $table->string('language')->default('en');
                
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
        Schema::drop('categories');
    }
}
