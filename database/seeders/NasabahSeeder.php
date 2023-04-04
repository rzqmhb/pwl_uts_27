<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NasabahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'no_rek' => '10018',
                'nama' => 'Brando',
                'alamat' => 'Jl. Windah Basudara',
                'jenis_tabungan' => 'Gold',
                'saldo' => '10000000',
            ],
            [
                'no_rek' => '10019',
                'nama' => 'awikwok',
                'alamat' => 'Jl. Windah Basudara',
                'jenis_tabungan' => 'Silver',
                'saldo' => '10000000',
            ],
            [
                'no_rek' => '10020',
                'nama' => 'Brando',
                'alamat' => 'Jl. Windah Basudara',
                'jenis_tabungan' => 'Gold',
                'saldo' => '10000000',
            ],
            [
                'no_rek' => '10021',
                'nama' => 'Saya',
                'alamat' => 'Jl. Windah Basudara',
                'jenis_tabungan' => 'Silver',
                'saldo' => '10000000',
            ],
            [
                'no_rek' => '10022',
                'nama' => 'Brando',
                'alamat' => 'Jl. Windah Basudara',
                'jenis_tabungan' => 'Gold',
                'saldo' => '10000000',
            ],
            [
                'no_rek' => '10023',
                'nama' => 'Brando',
                'alamat' => 'Jl. Windah Basudara',
                'jenis_tabungan' => 'Gold',
                'saldo' => '10000000',
            ],
        ];
        DB::table('nasabahs')->insert($data);
    }
}
