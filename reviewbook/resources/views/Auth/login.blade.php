@extends('layouts.master')
@section('title')
     login 
@endsection
@section('content')



<form action="/login" method="post" enctype="multipart/form-data" >
  @csrf
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
     @endif
  @csrf

 

  <div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="email" name="email" class="form-control" placeholder="masukan Email" >
  </div>

  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" name="password" class="form-control" placeholder="masukan Password">
  </div>

  
 
  <button type="submit" class="btn btn-primary ">Login</button>
</form>
        
   
@endsection
@section('title')

@endsection
    
