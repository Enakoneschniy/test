<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin',
            'description' => 'Administrator'
        ]);
        Role::create([
            'name' => 'moderator',
            'description' => 'Moderator'
        ]);
        Role::create([
            'name' => 'user',
            'description' => 'User'
        ]);
    }
}
