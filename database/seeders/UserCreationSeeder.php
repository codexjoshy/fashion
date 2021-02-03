<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Tailor;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserCreationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => "Admin",
            'email' => "superadmin@admin.com",
            'password' => Hash::make('password'),
            'type' => 'admin'
        ]);
        $roleId = Role::where('name', 'admin')->value('id');
        $user->roles()->attach($roleId);
        Tailor::create(['user_id' => $user->id]);
    }
}