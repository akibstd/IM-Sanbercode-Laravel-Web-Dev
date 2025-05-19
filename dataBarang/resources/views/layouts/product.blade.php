@extends('layouts.master')

@section('konten')

<hr>

<a type="button" href="{{route('tambah/product')}}" class="btn btn-primary mb-2">+Tambah data</a>
<div class="alert alert-secondary" role="alert">
 
      
  
  <b>Nama Toko:</b>{{$nama_toko}}  
  <br>
  <b>Alamat:</b>{{$alamat}}
  <br>
   <b>Tipe Toko:</b>{{$type}}
   
</div>

<div class="card">
  <div class=" card-header">
    Daftar Produk
  </div>
  <div class="card-body">

    <table class="table table-striped table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nama Product</th>
      <th scope="col">Stock</th>
      <th scope="col">Harga</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>sopte</td>
      <td>jambi</td>
      <td>2000</td>
      <td>
        <a href=""class="btn btn-success">Edit</a>
        <a href="" class="btn btn-danger">Hapus</a></td>
    </tr>
      <tr>
      <th scope="row">2</th>
      <td>sopte</td>
      <td>jambi</td>
      <td>2000</td>
      <td>
        <a href=""class="btn btn-success">Edit</a>
        <a href="" class="btn btn-danger">Hapus</a></td>
    </tr>
    
    
    
  </tbody>
</table>
  </div>
</div>
@endsection