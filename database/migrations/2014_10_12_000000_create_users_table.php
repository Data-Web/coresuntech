<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                
                $table->increments('id');
                $table->string('name')->index();
                $table->string('email')->unique()->index();
                $table->string('password', 60);
                $table->string('phone', 32);
                $table->text('profile_photo');
                $table->string('registering_way');
                $table->char('gender', 1);
                $table->char('role', 1);

                $table->string('facebook_id', 100);
                $table->string('facebook_name', 200);
                $table->text('facebook_page');
                $table->text('facebook_token');

                $table->string('google_id', 100);
                $table->text('google_token');
                $table->text('google_page');

                $table->string('ip_address');
                $table->string('country_code');

                $table->rememberToken();
                $table->softDeletes();
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
        Schema::drop('users');
    }
}
