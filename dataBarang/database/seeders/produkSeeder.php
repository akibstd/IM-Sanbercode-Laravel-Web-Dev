<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;



class produkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('tb_produk')->insert([
           'nama_produk'=>'smart tv',
           'harga'=>'200',
           'deskripsi_produk'=>'ini  deskripsidummy',
           'kategori_id'=>'1',
           'created_at'=>now()
           
       ],[
        'nama_produk'=>'lenovo',
           'harga'=>'200000',
           'deskripsi_produk'=>'ini barang',
           'kategori_id'=>'2',
           'created_at'=>now()
        ]);

    }
}
