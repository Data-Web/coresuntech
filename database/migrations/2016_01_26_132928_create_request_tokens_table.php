<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('request_tokens')) {
            Schema::create('request_tokens', function(Blueprint $table) {
                $table->increments('id');
                $table->text('content');
                $table->integer('user_id')->index()->default(0);
                $table->integer('device_id');
                $table->timestamp('expires_at');
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
        Schema::drop('request_tokens');
    }
}
