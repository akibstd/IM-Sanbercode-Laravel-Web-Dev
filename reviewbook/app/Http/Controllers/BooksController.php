<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\genres;
use App\Models\books;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use App\Http\Middleware\IsAdmin;
use Exception;
use File;
class BooksController extends Controller implements HasMiddleware
{

    public static function middleware(): array
    {
        return [
          
            new Middleware(['auth',IsAdmin::class], except: ['show','index']),
            
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books=books::all();
        return view('books.tampil',['books'=>$books]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genre=genres::all();
        
        return view('books.tambah',['genres'=>$genre]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //
        $request->validate([
            'title'=>'required',
            'content'=>'required',
            'genre_id'=>'required',
            
            'image' => 'required|mimes:img,jpg,jpeg|max:2048',
        ]);
        //buat nama gambar uniq
        $imageUniqName = time().'.'.$request->image->extension();  
         
        $request->image->move(public_path('image'), $imageUniqName );
       
        /*  
            Write Code Here for
            Store $fileName name in DATABASE from HERE 
        */
         // insert data
         $books = new books; 
 
          $books->title = $request->input('title');
          $books->content = $request->input('content');
          $books->genre_id = $request->input('genre_id');
          $books->image = $imageUniqName;

          $books->save();

          return redirect('/books');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $books=books::find($id);

        return view('books.detail',['books'=>$books]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $books=books::find($id);
        $genre=genres::all();
        return view('books.edit',['books'=>$books,'genres'=>$genre]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'=>'required',
            'content'=>'required',
            'genre_id'=>'required',
            'image' => 'mimes:img,jpg,jpeg|max:2048',
        ]);
        $books=books::find($id);

        if($request->has('image')){
            //hapus data lama
            File::delete('image/'.$books->image);

            $imageUniqName = time().'.'.$request->image->extension();  
         
         $request->image->move(public_path('image'), $imageUniqName );
         $books->image=$imageUniqName;
        }
        $books->title=$request->input('title');
        $books->content=$request->input('content');
        $books->genre_id=$request->input('genre_id');
        $books->save();

        return redirect('/books');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $books=books::find($id);

        
        File::delete('image/'.$books->image);
        $books->delete();

         return redirect('/books');
    }
    
}
