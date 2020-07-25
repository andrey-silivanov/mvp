<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;
use TCG\Voyager\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() === 0) {
            $role = Role::where('name', 'admin')->firstOrFail();

            factory(App\Models\User::class, [])->create([
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'role_id'        => $role->id,
            ]);
        }
    }
}
