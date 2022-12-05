<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Toko::create([
            'nama_toko' => 'Astrodyy Store',
            'alamat_toko' => 'Tembalang',
            'nohp_toko' => '696969696'
        ]);

        \App\Models\Karyawan::create([
            'nama_karyawan' => 'Oddy Ramadhan',
            'alamat_karyawan' => 'Tembalang',
            'nohp_karyawan' => '12345',
            'password' => bcrypt('12345')
        ]);

        \App\Models\Karyawan::create([
            'nama_karyawan' => 'Fauzan Z',
            'alamat_karyawan' => 'Tembalang',
            'nohp_karyawan' => '123456',
            'password' => bcrypt('12345')
        ]);

        \App\Models\Handphone::create([
            'merk_hp' => 'Samsung',
            'tipe_hp' => 'Galaxy Fold 2',
            'rating' => '4',
            'harga' => '14.000.000'
        ]);

        \App\Models\Handphone::create([
            'merk_hp' => 'Samsung',
            'tipe_hp' => 'Galaxy Fold 3',
            'rating' => '4',
            'harga' => '18.000.000'
        ]);

        \App\Models\Handphone::create([
            'merk_hp' => 'Samsung',
            'tipe_hp' => 'Galaxy Fold 4',
            'rating' => '4',
            'harga' => '24.000.000'
        ]);

        \App\Models\Handphone::create([
            'merk_hp' => 'Apple',
            'tipe_hp' => 'iPhone 14 Pro',
            'rating' => '5',
            'harga' => '18.000.000'
        ]);

        \App\Models\Handphone::create([
            'merk_hp' => 'Apple',
            'tipe_hp' => 'iPhone 14 Pro Max',
            'rating' => '5',
            'harga' => '24.000.000'
        ]);

        \App\Models\Handphone::create([
            'merk_hp' => 'Esia',
            'tipe_hp' => 'Hidayah',
            'rating' => '5',
            'harga' => '24.000.000'
        ]);

        \App\Models\Handphone::create([
            'merk_hp' => 'Vivo',
            'tipe_hp' => 'Vivo 14 Pro Max',
            'rating' => '5',
            'harga' => '24.000.000'
        ]);

        \App\Models\Handphone::create([
            'merk_hp' => 'Apple',
            'tipe_hp' => 'iPhone 14 Pro Max',
            'rating' => '5',
            'harga' => '24.000.000'
        ]);

        \App\Models\Handphone::create([
            'merk_hp' => 'Apple',
            'tipe_hp' => 'iPhone 14 Pro Max',
            'rating' => '5',
            'harga' => '24.000.000'
        ]);

        \App\Models\Handphone::create([
            'merk_hp' => 'Apple',
            'tipe_hp' => 'iPhone 14 Pro Max',
            'rating' => '5',
            'harga' => '24.000.000'
        ]);

        \App\Models\Handphone::create([
            'merk_hp' => 'Apple',
            'tipe_hp' => 'iPhone 14 Pro Max',
            'rating' => '5',
            'harga' => '24.000.000'
        ]);

        \App\Models\Handphone::create([
            'merk_hp' => 'Apple',
            'tipe_hp' => 'iPhone 14 Pro Max',
            'rating' => '5',
            'harga' => '24.000.000'
        ]);

        \App\Models\Handphone::create([
            'merk_hp' => 'Apple',
            'tipe_hp' => 'iPhone 14 Pro Max',
            'rating' => '5',
            'harga' => '24.000.000'
        ]);

        \App\Models\Handphone::create([
            'merk_hp' => 'Apple',
            'tipe_hp' => 'iPhone 14 Pro Max',
            'rating' => '5',
            'harga' => '24.000.000'
        ]);

        \App\Models\Handphone::create([
            'merk_hp' => 'Apple',
            'tipe_hp' => 'iPhone 14 Pro Max',
            'rating' => '5',
            'harga' => '24.000.000'
        ]);

        \App\Models\Handphone::create([
            'merk_hp' => 'Apple',
            'tipe_hp' => 'iPhone 14 Pro Max',
            'rating' => '5',
            'harga' => '24.000.000'
        ]);

        \App\Models\Invoice::create([
            'persetujuan' => 'Oddy Ramadhan',
            'nama_pembeli' => 'Ahmad',
            'nohp_pembeli' => '081291203344',
            'merk_hp' => 'Apple',
            'tipe_hp' => 'A53',
            'harga' => '20.000.000',
            'isApprove' => '1'
        ]);

        // \App\Models\Handphone::factory()->count(16)->create();

        \App\Models\Invoice::create([
            'persetujuan' => 'Oddy Ramadhan',
            'nama_pembeli' => 'Sukro',
            'nohp_pembeli' => '081291203344',
            'merk_hp' => 'Samsung',
            'tipe_hp' => 'Galaxy Fold 4',
            'harga' => '20.000.000'
        ]);
    }
}
