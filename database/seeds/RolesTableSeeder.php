<?php

use Illuminate\Database\Seeder;
use App\Role;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Role();
        $admin->name = 'admin_sp';
        $admin->is_active = 1;
        $admin->is_delete = 0;
        $admin->created_by = "taitran";
        $admin->updated_by = "taitran";
        $admin->description = 'Supper admin';
        $admin->save();

        $admin1 = new Role();
        $admin1->name = 'admin_em';
        $admin1->is_active = 1;
        $admin1->is_delete = 0;
        $admin1->created_by = "admin";
        $admin1->updated_by = "admin";
        $admin1->description = 'Employee';
        $admin1->save();

        $admin2 = new Role();
        $admin2->name = 'admin_ma';
        $admin2->is_active = 1;
        $admin2->is_delete = 0;
        $admin2->created_by = "admin";
        $admin2->updated_by = "admin";
        $admin2->description = 'Manager';
        $admin2->save();


        $admin3 = new Role();
        $admin3->name = 'customer';
        $admin3 ->is_active = 1;
        $admin3->is_delete = 0;
        $admin3->created_by = "admin";
        $admin3->updated_by = "admin";
        $admin3->description = 'Customer';
        $admin3->save();
    }
}
