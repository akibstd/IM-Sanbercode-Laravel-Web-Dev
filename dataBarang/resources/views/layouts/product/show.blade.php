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
  <form class=" card-header d-flex justify-content-between align-content-between">
    @csrf
    Daftar Produk 
    <div class="input-group mb-3" style="width:350px">
  <input type="text" name="keyword" class="form-control" placeholder="cari data" >
  <button class="btn btn-success" type="button" id="button-addon2">Button</button>
</div>
    
  </form>
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
      <td class=" row ">

         <button type="submit" class="btn btn-primary col-3  " data-bs-toggle="modal" data-bs-target="#hapus{{$item->id_produk}}">
           <i class="bi bi-trash-fill"></i>
          </button>

        <a href="/product/{{$item->id_produk}}/edit"class="btn btn-success col-3 ">
          <i class="bi bi-pencil-fill"></i>
         </a>
        <a href="/product/{{$item->id_produk}}" class="btn btn-danger col-3 ">
         <i class="bi bi-exposure"></i>
          </a>

       
      </td>




    @endforeach ($data_produk as $item)


  </tbody>
</table>
  </div>
</div>
<!-- Modal -->
  @foreach ($data_produk as $item )
   <div class="modal fade" id="hapus{{$item->id_produk}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="POST"  action="/product/{{$item->id_produk}}/destroy" class="modal-content">
      @method('DELETE')
      @csrf
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Apakah Anda Yakin Ingin Menghapus</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        apakah anda yakin ingin Menhapus :{{$item->nama_produk}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       <button type="submit" class="btn btn-primary">Hapus Data</button>
      </div>
       
    </form>
  </div>
</div>
  @endforeach

@endsection


