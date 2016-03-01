<?php

use Illuminate\Database\Seeder;

class CurrenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(App\Shop::all() as $shop) {
            $shop->currencies()->save(factory(App\Currency::class)->make());
        }
    }
}
