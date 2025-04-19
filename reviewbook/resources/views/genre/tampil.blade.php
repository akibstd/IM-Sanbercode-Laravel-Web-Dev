@extends('layouts.master')
@section('title')
    list genre
@endsection
@section('content')
@auth
@if (Auth()->user()->role=== 'admin')
  <a href="/genre/create" class="btn btn-primary btn-sm m-3">tambah</a>
  @endif
@endauth
    <table class="table">
        <thead>
            <tr>
                <th scope="col">no</th>
                <th scope="col">name</th>
                <th scope="col">action</th>
              
            </tr>
        </thead>
        <tbody>
          
            @forelse ($genres as $item)
                
             <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$item->name}}</td>
                    {{-- <td>{{$item->description}}</td> --}}

                    <td> 
                       
                      <form action="/genre/{{$item->id}}" method="Post">
                        @method("DELETE")
                        @csrf
                        <a href="/genre/{{$item->id}}" class="btn btn-info">detail</a> 
                        @auth
                        @if (Auth()->user()->role=== 'admin')
                    
                         <a href="/genre/{{$item->id}}/edit" class="btn btn-success">edit</a>
                         <input type="submit" value="delete" class="btn btn-danger small-sm">
                         @endif
                        @endauth
                       
                    </td>
                </form>
                   
             </tr>
            @empty
                <p>No users</p>
            @endforelse
            


        </tbody>
    </table>


    



@endsection
@section('title')

@endsection