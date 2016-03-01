<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('products')) {
            Schema::create('products', function(Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->text('name_rewrite');
                $table->text('description');
                $table->float('price_in')->default(0);
                $table->float('price_out')->default(0);
                $table->integer('inventory')->default(0);
                $table->text('image');
                $table->boolean('status')->default(1);
                $table->string('language')->default('en');

                $table->integer('shop_id')
                    ->index()
                    ->default(0)
                    ->foreign('shop_id')
                    ->references('id')
                    ->on('shops')
                    ->onDelete('cascade');

                $table->integer('category_id')
                    ->index()
                    ->default(0)
                    ->foreign('category_id')
                    ->references('id')
                    ->on('categories')
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
        Schema::drop('products');
    }
}
