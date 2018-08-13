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
        $this->call(UserTableSeeder::class);
        $this->call(PortfolioTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(MailsTableSeeder::class);
        $this->call(MailingsTableSeeder::class);
    }
}
