<?php

namespace Database\Seeders;

use App\Models\role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => '1',], ['ussrname'=> 'LPMK01',], ['password'=> 'malang01',],
            ['id' => '2',], ['username'=> 'LPMK02',], ['ussrname'=> 'malang01',],

        ];

        foreach ($data as $value) {
            role::insert([
                'id' => $value['id'],
                'username' => $value['name'],
                'password'=> $value['password'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
