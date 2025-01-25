<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_barangs')->insert([
            'nama' =>'lenovo',
            'kategori' => 'laptop',
            'deskripsi' => 'lenovo idpad merek 008',
            'stock' => '5',
        ]);
    }
}
