<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function getProduk(){
        $data_toko=[
            'nama_toko'=>'toko gue',
            'alamat'=>'nganjuk',
            'type'=>'ruko'

        ];
         return  view('layouts.product',$data_toko);
    }

     public function addProduk(){
         return  view('layouts.tambahProduk');
    }
}
