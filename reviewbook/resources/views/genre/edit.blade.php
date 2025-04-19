@extends('layouts.master')
@section('title')
 edit genre
@endsection
@section('content')




  

 <form action="/genre/{{$genre->id}}" method="post"  >
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
     @endif
    @method('put')
  @csrf
     
  <div class="mb-3">
    <label  class="form-label">genre name</label>
    <input type="text" name="name" class="form-control" value="{{$genre->name}}" >
    
  </div>
  <div class="mb-3">
    <label  class="form-label">description</label>
  <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$genre->description}}</textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        
   
@endsection
@section('title')

@endsection
    
