<?php

namespace App\Http\Controllers;


use App\Models\produk;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index(){
        $toko=[
            'nama_toko'=>'toko gue',
            'alamat'=>'nganjuk',
            'type'=>'ruko'

        ];
        $data=Produk::get();//mengambil data dari model produk

       // $QueryBuilder=DB::table('tb_produk')->get(); //ini query builder


         return view('layouts.product.show',$toko,[

            'data_produk'=>$data
                 ]);
    }

     public function create(){
         return  view('layouts.product.add');
    }

     public function store(Request $request)
     {
     $request->validate([
        'nama_produk'=>'required|min:8|max:150',
        'harga_produk'=>'required',
         'deskripsi'=>'required',

     ],[
         'nama_produk.required'=>'Nama produk harus diisi',
         'nama_produk.min'=>'minimal 8 kata',
         'nama_produk.max'=>'maksimal  150 kata',
          'harga_produk.required'=>'Harga produk harus diisi',
         'deskripsi.required'=>'Deskripsi harus diisi'

     ]);

     //DB::table('tb_produk')->create([]); juka mengunakan query builder

     produk::create([
        'nama_produk'=>$request->nama_produk,
        'harga'=>$request->harga_produk,
        'deskripsi_produk'=>$request->deskripsi,
        'kategori_id'=>'2'
     ]);

     return redirect(route('index'))->with('massage','berhasil di tambahkan');


    }

    public function show($id){
      //query perintah eloquen orm
       $data=produk::findOrFail($id);
       //jikaquerybuilder
       //DB::table('tb_produk)->where('id_produk',$id)->firstorfail();
         
        return view('layouts.product.detail',['produk'=>$data]);
    }

    public function edit($id){
        $data=produk::findOrFail($id);

       return view('layouts.product.edit',[
        'data'=>$data
       ]);
    }

     public function update($id,Request $request){
           $request->validate([
        'nama_produk'=>'required|min:8|max:150',
        'harga_produk'=>'required',
         'deskripsi'=>'required',

     ],[
         'nama_produk.required'=>'Nama produk harus diisi',
         'nama_produk.min'=>'minimal 8 kata',
         'nama_produk.max'=>'maksimal  150 kata',
          'harga_produk.required'=>'Harga produk harus diisi',
         'deskripsi.required'=>'Deskripsi harus diisi'

     ]);
     // query untuk  update data berdasarkan id
     produk::where('id_produk',$id)->update([
        'nama_produk'=>$request->nama_produk,
        'harga'=>$request->harga_produk,
        'deskripsi_produk'=>$request->deskripsi,
        'kategori_id'=>'2'
     ]);
     return redirect(route('index'))->with('massage','data  berhasil di edit');
     }

     public function destroy($id){
       produk::where('id_produk',$id)->delete();

       return redirect(route('index'))->with('massage','data berhasil di apus');
     }
}

//findorfile berdasarkan
