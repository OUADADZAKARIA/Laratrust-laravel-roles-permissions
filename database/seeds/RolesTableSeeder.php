<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = Role::create([
            'name' => 'super_admin',
            'display_name' => 'Super Admin',
            'description' =>'Super Admin'

        ]);


        $user = Role::create([
            'name' => 'user',
            'display_name' => 'user',
            'description' =>'user'

        ]);
    }
}
