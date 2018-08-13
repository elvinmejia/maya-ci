<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $user = new User;
        $user->name = 'Elvin Mejía';
        $user->email = 'elvin@gmail.com';
        $user->password = bcrypt('123456');
        $user->save();
    }
}
