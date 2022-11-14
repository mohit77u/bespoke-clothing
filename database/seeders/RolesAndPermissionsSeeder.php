<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // create permissions
        $createUsersPermission = Permission::create([
            'name' => 'create_users'
        ]);

        $createProductsPermission = Permission::create([
            'name' => 'create_products']
        );
 
        // create super_admin role
        $superAdmin = Role::create([
            'name' => 'super_admin',
        ]);

        // assign permission to super admin
        $superAdmin->givePermissionTo([$createUsersPermission, $createProductsPermission]);

        // create admin role
        $admin = Role::create([
            'name' => 'admin',
        ]);

        // assign permission to admin
        $admin->givePermissionTo($createProductsPermission);
 
        // create user role
        Role::create([
            'name' => 'user',
        ]);

        // create super admin user
        $superAdminUser = User::create([
            'name'      => 'Administrator',
            'user_id'   => 'bespokeAdministrator@123',
            'email'     => 'super-admin@bespokeclothing.com',
            'password'  => Hash::make('BeSpokeAdministrator@321'),
        ]);

        $superAdminUser->assignRole('super_admin');
        $superAdminUser->givePermissionTo([$createUsersPermission, $createProductsPermission]);


        // create super admin user
        $adminUser = User::create([
            'name'      => 'Admin',
            'user_id'   => 'bespokeAdmin@123',
            'email'     => 'admin@bespokeclothing.com',
            'password'  => Hash::make('BeSpokeAdmin@321'),
        ]);

        $adminUser->assignRole('admin');
        $adminUser->givePermissionTo([$createProductsPermission]);

    }
}
