<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 10)->create()->each(function($u) {
            $u->shops()->save(factory(App\Shop::class)->make());
        });

        App\User::create([
            'name' => "Pham Ky Khoi",
            'email' => "phamkykhoi.info@gmail.com",
            'password' => Hash::make('11111111'),
            'phone' => "0912876421",
            'profile_photo' => "",
            'registering_way' => "email",
            'gender' => "1",
            'role' => "1",
            'facebook_id' => "",
            'facebook_name' => "",
            'facebook_page' => "",
            'facebook_token' => "",
            'google_id' => "",
            'google_token' => "",
            'google_page' => "",
            'ip_address' => "192.168.2.228",
            'country_code' => "VN"
        ]);
    }
}
