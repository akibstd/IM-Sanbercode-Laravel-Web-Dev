@extends('layouts.master')
@section('title')
 detail books
@endsection
@section('content')

<img src="{{asset('image'.$books->image)}}" class="card-img-top" height="300px" >
<h1>{{$books->title}}</h1>
<p>{{$books->content}}</p>
<a href="/books" class="btn btn-info btn-lg">kembali</a>


@endsection