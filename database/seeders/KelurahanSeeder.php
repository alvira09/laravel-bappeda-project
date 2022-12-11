<?php

namespace Database\Seeders;

use App\Models\kelurahan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelurahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 'LPMK01',], ['role'=> 'malang123',], ['kelurahan'=> 'jatimulyo',], ['user'=> 'LPMK01',],
            ['id' => 'LPMK02',], ['role'=> 'malang123',], ['kelurahan'=> 'ddinoyo',], ['user'=> 'LPMK02',],

        ];

        foreach ($data as $value) {
           kelurahan::insert([
                'id' => $value['id'],
                'role' => $value['role'],
                'kelurahan'=> $value['kelurahan'],
                'user'=> $value['user'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
