<?php

use Illuminate\Database\Seeder;
use App\Entity\Penyelenggara;

class PenyelenggaraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Penyelenggara::create([
            'nama_penyelenggara'  => 'Codora',
            'no_telp_penyelenggara' => '000',
            'no_rek_penyelenggara' => '0000',
            'nama_bank_penyelenggara' => 'BTN',
            'user_id' => '1'
        ]);
    }
}
