@extends('layouts.master')

@section('konten')
 <div class="card mb-96">
  <div class="card-header">
    tambah produk
  </div>
<div class="card-body">
  <form action="{{route('store')}}" method="POST">
    @csrf
    <div class="row">

  <div class="mb-3 mt-2  col-sm-6">
    <label  class="form-label">Nama produk</label><br>
    <input type="text" name="nama_produk" value="{{old('nama_produk')}}">
    @error('nama_produk')
    <div class="text text-danger">{{$message}}</div>
    @enderror
  </div>
   <div class="mb-3 col-sm-6 mt-2 ">
    <label for="harga" class="form-label">harga</label> <br>
    <input type="number" name="harga_produk" value="{{old('harga_produk')}}">
     @error('harga_produk')
    <div class="text text-danger">{{$message}}</div>
    @enderror
  </div>
  </div>

  <div class="form-floating">
  <textarea class="form-control" name="deskripsi" placeholder="deskripsi" style="height:100px;" value="{{old('deskripsi')}}"></textarea>
  <label for="floatingTextarea">deskripsi</label>
   @error('deskripsi')
    <div class="text text-danger">{{$message}}</div>
    @enderror
</div>

  <button type="submit" class="btn btn-primary mx-2 mt-3">
  <i class="bi bi-house-add-fill"></i>
    Tambah data</button>
</form>
</div>
 </div>


@endsection