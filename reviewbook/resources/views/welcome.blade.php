@extends('layouts.master')
@section('title')
home
@endsection
@section('content')



@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif
   
    <h3 class=" hover:text-danger"><a >Ayo Mulai Membaca </a></h3>
    <p class="font-mono">Membaca adalah jendela dunia, dan kini Anda bisa menjelajahinya dengan lebih mudah melalui AkibBooks web. Kami hadir sebagai platform digital yang menyediakan beragam koleksi buku dari berbagai genre, mulai dari fiksi, non-fiksi, sastra, hingga buku akademik. Dengan akses cepat dan praktis, Anda dapat menikmati bacaan favorit kapan saja dan di mana saja</p>
    @endsection

    @section('title')
    
    @endsection
