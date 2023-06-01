<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatuseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            ['status' => 'Aktif'],
            ['status' => 'Alumi'],
            ['status' => 'Berhenti'],
            ['status' => 'Belum Terdaftar']
        ];

        foreach ($statuses as $status) {
            Status::create($status);
        }
    }
}
