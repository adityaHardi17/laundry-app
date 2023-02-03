<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('outlets')->insert([
            [
                'nama' => 'Asep Outlet Laundry',
                'alamat' => 'Bandung',
                'tlp' => '991928390192'
            ],
            [
                'nama' => 'Joget Outlet Laundry',
                'alamat' => 'Cibaduyut',
                'tlp' => '019238928971'
            ],
        ]);

        Db::table('users')->insert([
            [
                'nama' => 'Administator',
                'username' => 'admin',
                'password' => bcrypt('admin'),
                'role' => 'admin',
                'outlet_id' => 1,
            ],
            [
                'nama' => 'Kasir',
                'username' => 'kasir',
                'password' => bcrypt('kasir'),
                'role' => 'owner',
                'outlet_id' => 1,
            ]
        ]);

        Db::table('pakets')->insert([
            [
                'nama_paket' => 'Reguler',
                'harga' => 7000,
                'jenis' => 'kiloan',
                'outlet_id' => 1,
            ],
            [
                'nama_paket' => 'Bed Cover',
                'harga' => 5000,
                'jenis' => 'bed_cover',
                'outlet_id' => 1,
            ]
        ]);

        Db::table('members')->insert([
            [
                'nama' => 'Asep',
                'jenis_kelamin' => 'L',
                'alamat' => 'Bandung Jawa Tengah',
                'tlp' => '991928390192',
            ],
            [
                'nama' => 'Marimas',
                'jenis_kelamin' => 'P',
                'alamat' => 'Jogja Jawa Barat',
                'tlp' => '019238928971',
            ],
            [
                'nama' => 'Roger',
                'jenis_kelamin' => 'L',
                'alamat' => 'Asgard Blok M ',
                'tlp' => '019231023898',
            ]
        ]);
    }
}
