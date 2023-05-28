<?php

namespace Database\Seeders;

use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['nama' => 'admin'],
            ['nama' => 'anggota'],
            ['nama' => 'ketua_org'],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
        // Schema::disableForeignKeyConstraints();
        // Role::truncate();
        // Schema::enableForeignKeyConstraints();

        // $data = [
        //     'nama' => 'Admin',
        //     'nama' => 'Anggota',
        //     'nama' => 'KetuaOrg',
        //     'nama' => 'KetuaAsm'
        // ];
        // foreach ($data as $value) {
        //     Role::insert([
        //         'nama' => $value['nama'],
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ]);
        // }
    }
}
