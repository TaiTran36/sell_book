<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin  = Role::where('name', 'admin_sp')->first();
        $admin1 = Role::where('name', 'admin_em')->first();
        $admin3 = Role::where('name', 'admin_ma')->first();
        $admin3 = Role::where('name', 'customer')->first();


        $admin = new User();
        $admin->name = 'TaiTran';
        $admin->email = 'admin0@gmail.com';
        $admin->password = bcrypt('123456');
        $admin->save();
        $admin->roles()->attach($admin);

        $admin1 = new User();
        $admin1->name = 'Nam';
        $admin1->email = 'admin1@gmail.com';
        $admin1->password = bcrypt('123456');
        $admin1->save();
        $admin1->roles()->attach($admin1);

        $admin2 = new User();
        $admin2->name = 'Ha';
        $admin2->email = 'admin2@gmail.com';
        $admin2->password = bcrypt('123456');
        $admin2->save();
        $admin2->roles()->attach($admin2);

        $admin3 = new User();
        $admin3->name = 'Ngan';
        $admin3->email = 'ngan98@gmail.com';
        $admin3->password = bcrypt('123456');
        $admin3->save();
        $admin3->roles()->attach($admin3);
    }
}
