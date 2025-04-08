<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class daftarController extends Controller
{
    //
    public function pendaftaran(){
        return view('page.daftar');
    }

    public function welcome(Request $request){
      $fullname=$request->input('fullname');
      $lastname=$request->input('lastname');
       
      return view('page.dashboard',['fullname'=>$fullname,'lastname'=>$lastname]);
    }
}
