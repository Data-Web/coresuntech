<?php

use Illuminate\Database\Seeder;

class NetworksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(App\Shop::all() as $shop) {
            $shop->networks()->save(factory(App\Network::class)->make());
        }
    }
}
