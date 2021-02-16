<?php

use Illuminate\Database\Seeder;
use App\Entity\Tiket;

class TiketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 11; $i++) {
        Tiket::create([
            'nama_tiket'  => 'Reguler',
            'event_id_event' => $i,
            'stok_tiket' => '50',
            'satuan_tiket' => '1',
            'harga_tiket' => '10000',
            'deskripsi_tiket' => '-'
        ]);
        }
    }
}
