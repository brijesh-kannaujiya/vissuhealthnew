<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = 'Admin';
        $user->email = 'vishal@gmail.com';
        $user->password = bcrypt('123456');
        $user->role_id = 1;
        $user->save();

        $user->admins()->create([
            'admin_role_id' => 1,
            'notify' => 1,
        ]);
    }
}
