<?php

namespace Database\Seeders;

use App\Models\graciaUser;
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
                'name' => 'indexguru',
            ],

            ['name' => 'indexguru']
        );

        $role_admin->givePermissionTo($permission);
        $role_admin->givePermissionTo($permission2);
        $role_teacher->givePermissionTo($permission2);


        $user = graciaUser::find(1);

        $user2 = graciaUser::find(7);

        $user->assignRole('admin');

        $user2->assignRole('teacher');

    }
}
