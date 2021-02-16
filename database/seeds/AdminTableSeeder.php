<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name'  => 'admin',
            'username' => 'admin',
            'email' => 'admin@tiketqu.id',
            'password'  => bcrypt('farabiandrika')
        ]);
    }
}
