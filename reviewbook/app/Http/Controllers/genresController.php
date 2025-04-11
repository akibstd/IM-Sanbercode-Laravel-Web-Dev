<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class genresController extends Controller
{
    //
    public function create(){
        return view('genre.tambah');
    }
   

    public function store(request $request){
        $request->validate([
            'name' => ['required','min:5'],
            'description' => ['required']
        ]);
         
        $now=carbon::now();
        DB::table('genres')->insert([
            'name' =>$request->input ("name"),
            'description' =>$request->input ('description'),
            'created_at'=>$now,
            'updated_at'=>$now,

           
        ]);  

        return redirect('/master');
    }

}
