<?php

namespace Database\Seeders;

use App\Models\masyarakat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasyarakatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['username' => 'LPMK01',], ['password'=> 'malang123',],
            ['username' => 'LPMK02',], ['password'=> 'malang123',],

        ];

        foreach ($data as $value) {
            masyarakat::insert([
                'id' => $value['id'],
                'username' => $value['name'],
                'password'=> $value['password'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
