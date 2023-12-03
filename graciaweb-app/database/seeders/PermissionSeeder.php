<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::updateOrCreate(
            [
                'name' => 'admin',
            ],

            ['name' => 'admin']
        );

        $role_teacher = Role::updateOrCreate(
            [
                'name' => 'teacher',
            ],

            ['name' => 'teacher']
        );

        $role_student = Role::updateOrCreate(
            [
                'name' => 'student',
            ],

            ['name' => 'student']
        );

        $permission = Permission::updateOrCreate(
            [
                'name' => 'listadmin',
            ],

            ['name' => 'listadmin']
        );

        $permission2 = Permission::updateOrCreate(
            [
                'name' => 'listadmin',
            ],

            ['name' => 'listadmin']
        );

        $role_admin->givePermissionTo($permission);

    }
}
