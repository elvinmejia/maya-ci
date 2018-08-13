<?php

use Illuminate\Database\Seeder;

use App\Customer;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::truncate();

        $customer = new Customer;
        $customer->name = 'Elvin';
        $customer->email = 'elvin.analistajr@gmail.com';
        $customer->address = 'Simón Bolivar';
        $customer->phone = '999999999';
        $customer->condition = '1';
        $customer->mailing_id = 1;
        $customer->save();

        $customer = new Customer;
        $customer->name = 'Jim';
        $customer->email = 'jim.mejia12@gmail.com';
        $customer->address = 'Simón Bolivar';
        $customer->phone = '888888888';
        $customer->condition = '1';
        $customer->mailing_id = 1;
        $customer->save();

        $customer = new Customer;
        $customer->name = 'Angela';
        $customer->email = 'angela.ayala@maya-ci.com';
        $customer->address = 'Simón Bolivar';
        $customer->phone = '777777777';
        $customer->condition = '1';
        $customer->mailing_id = 1;
        $customer->save();

    }
}
