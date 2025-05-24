@extends('layouts.master')

@section('konten')

<hr>

<a type="button" href="{{route('create')}}" class="btn btn-primary mb-2"><i class="bi bi-house-add-fill"></i>Tambah data</a>
<div class="alert alert-secondary" role="alert">



  <b>Nama Toko:</b>{{$nama_toko}}
  <br>
  <b>Alamat:</b>{{$alamat}}
  <br>
   <b>Tipe Toko:</b>{{$type}}

</div>
@if (session('massage'))
      <div class="alert alert-primary">{{session('massage')}}</div>
   @endif

<div class="card">
  <div class=" card-header">
    Daftar Produk
  </div>
  <div class="card-body">

    <table class="table table-striped table-hover table-bordered table-sm">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nama Product</th>
      <th scope="col">Harga</th>
        <th scope="col">deskripsi</th>
      <th scope="col"> Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data_produk as $item )

    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$item->nama_produk}}</td>
      <td>{{$item->harga}}</td>
      <td>{{$item->deskripsi_produk}}</td>
      <td class="row-cols-lg-2">

        <a href="/product/{{$item->id_produk}}/edit"class="btn btn-success">
          <i class="bi bi-credit-card-2-back-fill"></i>
          Edit
         </a>
        <a href="/product/{{$item->id_produk}}" class="btn btn-danger">
          <i class="bi bi-eraser-fill"></i>
          detail</a>
            
        <form action="/product/{{$item->id_produk}}/destroy" method="POST">
          <div class="d-grid mt-1">
          @csrf
          @method('DELETE')
          <input type="submit" class="btn btn-danger mt-1 w-9 " value="DELETE">
          </div>
        </form>
      </td>




    @endforeach ($data_produk as $item)


  </tbody>
</table>
  </div>
</div>

@endsection


