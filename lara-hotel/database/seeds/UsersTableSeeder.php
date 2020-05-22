<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name'              => 'Achraf Yahya',
            'email'             => 'achraf@mail.com',
            'password'          => Hash::make('password'),
        ]);
    }
}
