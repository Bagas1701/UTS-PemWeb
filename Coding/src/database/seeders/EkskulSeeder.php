<?php

namespace Database\Seeders;

use App\Models\Ekskul;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EkskulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(Ekskul::count()==0) {
             $ekskulList = [
            [
                'name' => 'Voli',
                'image' => '',
                'description' => 'Latihan voli setiap Selasa',
                'coach_name' => 'Pak Hanif',
            ],
            [
                'name' => 'Basket',
                'image' => '',
                'description' => 'Latihan basket setiap Jumat',
                'coach_name' => 'Bu Rina',
            ],
            [
                'name' => 'Paskibra',
                'image' => '',
                'description' => 'Latihan setiap Senin dan Kamis',
                'coach_name' => 'Pak Budi',
            ],
        ];

        foreach ($ekskulList as $ekskul) {
            Ekskul::create($ekskul);
            }
        }
    }
}