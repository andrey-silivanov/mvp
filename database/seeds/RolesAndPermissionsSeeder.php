<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();



        // create roles and assign created permissions

        // this can be done as separate statements
        Role::create(['name' => 'user']);

        Role::create(['name' => 'moderator']);

        Role::create(['name' => 'admin']);
    }
}
