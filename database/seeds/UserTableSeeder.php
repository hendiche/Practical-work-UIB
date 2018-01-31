<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Super Admin';
        $user->email = 'superadmin@admin.com';
        $user->password = bcrypt('admin');
        $user->save();

        $user->assignRole('admin');
    }
}
