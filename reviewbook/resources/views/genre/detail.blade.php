@extends('layouts.master')
@section('title')
 detail genre
@endsection
@section('content')

<h1 class="text-primary">{{$genre->name}}</h1>
<hr>
<p class="text-primary">{{$genre->description}}</p>

<a href="/genre" class="btn btn-secondary">kembali</a>




        
   
@endsection
@section('title')

@endsection
    
