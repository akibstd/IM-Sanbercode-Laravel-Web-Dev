@extends('layouts.master')

@section('konten')






  

</div>
@if (session('massage'))
      <div class="alert alert-primary">{{session('massage')}}</div>
   @endif

<div class="card">
  <div class=" card-header">
    Detail Produk
  </div>
  <div class="card-body">
  <img src="https://placehold.co/100" class="img-fluid" alt="">
  <p>nama produk : {{$produk->id_produk}}</p>
  <p>harga : {{$produk->harga}}</p>
  <p>deskripsi: {{$produk->deskripsi_produk}}</p>
  <p>kategory : elektronik</p>
  <p>stock : 3</p>
  <a href="{{route('index')}}" class="btn btn-primary">kembali ke halaman produk</a>
    
  </div>
</div>

@endsection


