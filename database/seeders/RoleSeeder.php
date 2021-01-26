<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authority = ['customer', 'admin', 'tailor'];
        foreach ($authority as $auth) {
            Role::create(["name" => $auth]);
        }
    }
}
