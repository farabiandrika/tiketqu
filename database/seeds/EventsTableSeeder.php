<?php

use Illuminate\Database\Seeder;
use App\Entity\Event;
use Faker\Factory as Faker;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::create([
            'nama_event'  => 'Dapur Mum',
            'deskripsi_event' => 'Deskripsi',
            'waktu_mulai_event' => '2020-03-22 08:00',
            'waktu_berakhir_event' => '2020-03-22 12:00',
            'lokasi_event' => 'Codora',
            'kategori_event' => 'workshop',
            'jenis_promosi' => '1',
            'penyelenggara_id_penyelenggara' => '1',
            'user_id' => '1'
        ]);
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 10; $i++) {

            // insert data ke table pegawai menggunakan Faker
            Event::create([
                'nama_event'  => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'deskripsi_event' => $faker->realText($maxNbChars = 200, $indexSize = 2),
                'waktu_mulai_event' => '2020-03-22 08:00',
                'waktu_berakhir_event' => '2020-03-22 12:00',
                'lokasi_event' => $faker->address,
                'kategori_event' => 'workshop',
                'jenis_promosi' => '0',
                'penyelenggara_id_penyelenggara' => '1',
                'user_id' => '1'
            ]);
        }
    }
}
