@extends('layouts.master')
@section('title')
 tambah genre
@endsection
@section('content')
<form method="post" action="/genre">
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
  <div class="mb-3">
    <label  class="form-label">genre name</label>
    <input type="text" name="email" class="form-control" >
    <div  class="form-text">name</div>
  </div>
  <div class="mb-3">
    <label  class="form-label">description</label>
  <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        
   
@endsection
@section('title')

@endsection
    
