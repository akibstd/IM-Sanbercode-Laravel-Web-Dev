@extends('layouts.master')
@section('title')
 tambah books
@endsection
@section('content')




  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
     @endif

 <form action="/books" method="Post" enctype="multipart/form-data" >
  @csrf

  <div class="mb-3">
    <label  class="form-label">genre</label>
    <select name="genre_id" id="" class="form-control">
        <option value="">--select genre</option>
        @forelse ($genres as $item)
        <option value="{{$item->id}}">{{$item->name}}</option>
            
        @empty
          <option value="">tidak ada genre</option>   
        @endforelse
    </select>
    
  </div>   

  <div class="mb-3">
    <label  class="form-label">title name</label>
    <input type="text" name="title" class="form-control" >
    
  </div>
 

  <div class="mb-3">
    <label  class="form-label">content</label>
  <textarea name="content"  cols="30" rows="10" class="form-control"></textarea>
  </div>

  <div class="mb-3">
    <label  class="form-label">image name</label>
    <input type="file" name="image" class="form-control" >
    
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        
   
@endsection
@section('title')

@endsection
    
