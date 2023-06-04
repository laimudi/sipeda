<?php

namespace Database\Seeders;

use App\Models\Anggota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnggotaSeede extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $anggotas = [
            [
                'name' => 'Mudi Admin'
            ],
            [
                'name' => 'Mudi Kepala'
            ]
        ];

        foreach ($anggotas as $anggota) {
            Anggota::create($anggota);
        }
    }
}
