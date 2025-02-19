<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run(): void
    {

        Admin::query()->updateOrCreate([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => \Hash::make('123123123'),
        ]);

    }
}
