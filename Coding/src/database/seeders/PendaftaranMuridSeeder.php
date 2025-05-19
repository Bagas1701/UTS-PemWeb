<?php

namespace Database\Seeders;

use App\Models\PendaftaranMurid;
use App\Models\Ekskul;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PendaftaranMuridSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ekskuls = Ekskul::all();

        if (PendaftaranMurid::count() == 0 && $ekskuls->count() >= 2) {
            $pendaftarans = [
                [
                    'student_name' => 'Ahmad Ramadhan',
                    'class' => '10',
                    'nisn' => '1234567890',
                    'jenis_kelamin' => 'Laki-laki',
                    'alamat' => 'Jl. Merdeka No. 45',
                    'ekskul_id' => $ekskuls[0]->id,
                ],
                [
                    'student_name' => 'Siti Aminah',
                    'class' => '10',
                    'nisn' => '0987654321',
                    'jenis_kelamin' => 'Perempuan',
                    'alamat' => 'Jl. Kenangan No. 10',
                    'ekskul_id' => $ekskuls[1]->id,
                ],
                ];

            foreach ($pendaftarans as $data) {
                PendaftaranMurid::create($data);
            }
        }
    }
}