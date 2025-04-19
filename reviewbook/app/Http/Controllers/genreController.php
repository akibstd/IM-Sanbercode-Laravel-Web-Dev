<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class genreController extends Controller
{
    //
    public function create(){
        return view('genre.tambah');
    }
   

    public function store(Request $request)
    {
        
        $request->validate([
            
            'name' => ['required','min:5'],
            'description' => ['required'],
        ]);
    
         
        $now=carbon::now();
        DB::table('genres')->insert([
            'name' =>$request->input('name'),
            'description' =>$request->input ('description'),
            'created_at'=>$now,
            'updated_at'=>$now

           
        ]);  

        return redirect('/genre');
    }

    public function index(){
        $genres = DB::table('genres')->get();
 
        return view('genre.tampil', ['genres' => $genres]);
    }

    public function show($id){
      $genre=DB::table('genres')->  find($id);

      return view('genre.detail',['genre'=>$genre]);
    }

    public function edit($id){
        $genre=DB::table('genres')->  find($id);

        return view('genre.edit',['genre'=>$genre]);

    }

    public function update($id,Request $request){
        $request->validate([
            
            'name' => ['required','min:5'],
            'description' => ['required'],
        ]);
    
         
        $now=carbon::now();

         DB::table('genres')
           ->where('id', $id)
             ->update(
                [
                'name' =>$request->input('name'),
                'description' =>$request->input ('description'),
                'updated_at'=>$now

             ]
            );
             return redirect('/genre');

    }

    public function destroy($id){
         DB::table('genres')->where('id', $id)->delete();

         return redirect('/genre');
    }



}


