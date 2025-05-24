<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    //inisialisasi table
    protected $table ='tb_produk'; 

    //inisialisasi primarykey
   protected $primaryKey='id_produk';

   //inisialisasi data yang bisa di isi
protected $fillable=['nama_produk','harga','deskripsi_produk','kategori_id'];

//inisialisasi data yang tidak boleh di isi
protected $guarded=['id_produk'];
    

}
