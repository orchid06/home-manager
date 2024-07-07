<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name'      => 'Admin',
            'username'  => 'admin',
            'email'     => 'admin@admin.com',
            'phone'     => '01700000011',
            'password'  => '123123'
        ]);
    }
}
