<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppVersionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('app_versions')) {
            Schema::create('app_versions', function(Blueprint $table) {
                $table->increments('id');
                $table->float('version', 10);
                $table->char('type_update', 10);
                $table->string('os', 32);
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
        Schema::drop('app_versions');
    }
}
