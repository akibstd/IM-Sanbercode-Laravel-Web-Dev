@extends('layouts.master')
@section('title')
  daftar
@endsection

@section('content')

   <h1>buat akun baru</h1>
  <h2>sign up form </h2>
  <form action="/welcome" method="POST">
    @csrf
    <label for="">fulname</label><br>
    <input type="text" name="fullname"><br> <br>
    <label for="">lastname</label><br>
    <input type="text" name="lastname" cols="30" rows="10"></input><br> <br>

    <label>gender</label><br>

    <input type="radio" value="man">
    <label>man</label><br>
    <input type="radio" value="ladies">
    <label>ladies</label><br> <br>
    
    <label >country</label>
    <select name="" id="">
      <option value="indo">indo</option>
      <option value="malay">malay</option>
      <option value="zimbabwe">zimbabwe</option>
    </select><br> <br>

    <label for="">masukan pesan dan kesan</label><br><br>
    <textarea name="text" cols="30" rows="10">

  </textarea><br><br>
    <input type="submit" value="daftar"><br>
  </form>

  <h5><a href="/">kembali</a></h5>
@endsection

@section('title')

@endsection