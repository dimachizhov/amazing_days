<?php

use Illuminate\Database\Seeder;
use HttpOz\Roles\Models\Role;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'description' => 'Custodians of the system.',
            'group' => 'administrators',
        ]);

        Role::create([
            'name' => 'Moderator',
            'slug' => 'moderator',
            'group' => 'administrators',
        ]);
    }
}
