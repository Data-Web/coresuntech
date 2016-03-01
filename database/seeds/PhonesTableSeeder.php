<?php

use Illuminate\Database\Seeder;

class PhonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(App\Shop::all() as $shop) {
            $shop->phones()->save(factory(App\Phone::class)->make());
        }
    }
}
