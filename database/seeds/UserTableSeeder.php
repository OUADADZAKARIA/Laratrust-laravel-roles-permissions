<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' =>'super admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin@gmail.com')
        ]);


        $user->attachRole('super_admin');
    }
}
