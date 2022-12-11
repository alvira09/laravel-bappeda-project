<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormAspirasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('formAspirasi')->insert([
            'id'=>'01',
            'nama'=>'Fasilitas publik',
            'permasalahan'=>'jalan rusak',
            'penyebab'=>'kendaraan besar',
            'lokasi'=>'Dinoyo',
            'Keterangan'=>'Aspal baru',
        ]);
    }
}
