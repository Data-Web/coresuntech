<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(NetworksTableSeeder::class);
        $this->call(CurrenciesTableSeeder::class);
        $this->call(PhonesTableSeeder::class);
    }
}
