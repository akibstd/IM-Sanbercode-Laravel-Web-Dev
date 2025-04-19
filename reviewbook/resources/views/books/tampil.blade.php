@extends('layouts.master')
@section('title')
 tampil books
@endsection
@section('content')

@auth
@if (Auth()->user()->role === 'admin')


<a href="{{ route('books.tambah') }}" class="btn btn-primary my3">+Tambah</a>

@endif
@endauth
<div class="row mt-2">

    @forelse ($books as $item)

    <div class="col-4">
        <div class="card" >
            <img src="{{('image/'.$item->image)}}" class="card-img-top" height="300px" >
            <div class="card-body">
              <h5 class="card-title text-primary">{{$item->title}}</h5>
              <p class="card-text">{{Str::limit($item->content,100)}}</p>
              <div class="d-grid">
              <a href="/books/{{$item->id}}" class="btn btn-info">read move</a>
              @auth
              @if (Auth()->user()->role==='admin')
             <div class="row my-1">
             
              <div class="col">
                <div class="d-grid">
                    
                 <a href="/books/{{$item->id}}/edit" class="btn btn-warning">edit</a>
                 </div>
              </div>

              <div class="col">
                <form action="/books/{{$item->id}}" method="POST">
                <div class="d-grid">
                    
                      @csrf
                      @method('DELETE')
                      <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                 </div>
              </div>
              @endif
              @endauth
             

            </div>

            </div>
            </div>
          </div>

    </div>
        
    @empty
        <h5>tidak ada berita</h5>
    @endforelse

   
</div>

@endsection