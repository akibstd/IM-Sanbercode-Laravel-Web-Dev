<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    //inisialisasi table
    protected $table ='tb_produk'; 

    //inisialisasi primarykey
   protected $primaryKey='id_produk';

   //inisialisasi database
protected $fillable=['nama_produk','harga','stok'];
    

}
