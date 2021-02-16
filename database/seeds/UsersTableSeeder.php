<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'no_identitas'  => '0',
            'username' => 'user',
            'nama' => 'user',
            'tanggal_lahir' => '1998-07-23',
            'jenkel' => 'L',
            'alamat' => 'JL. Jalan',
            'email' => 'user@tiketqu.id',
            'password' => bcrypt('farabiandrika'),
            'no_hp' => '0',
        ]);
    }
}
