<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use App\Models\book;
use App\Policies\policy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function create()
    {
        return view('/addbook');
    }
    public function index()
    {
        $books = book::latest()->filter(request(["search"]))->get();
        // dd(policy::viewAny());

        return view("index", ["books" => $books]);
      

   
        return view('index',['books'=> $books]);

    }
    

    public function store(Request $request)
    {
  

    $validate=$request->validate(
        [
            'book_title' => 'required',
            'book_description' => 'required',
            'book_auther' =>'required',
            'book_image' =>'required'
       
        ],
        [
            'book_title.required'=>'required book title',
            'book_description.required'=>'required book description',
            'book_auther.required'=>'required book auther',
            'book_image.required'=>'required book image'

        ]
    
    
    );
   
  
    $newbook = book::create($validate);
    return redirect('/');

    }








    
     public function destroy($id) {
        $book= Book::find($id)->delete();
        return redirect('/');
       
     }

    //  public function edit($id) 
    //  {
    //     $book= Book::find($id);
    //     return view('/edit',compact('books'));
        
    //  }

    //  public function update(Request $request ,$id) 
    //  {
    //     $book= Book::find($id);
    //     return view('/edit',['books'=>book::all()]);

    //     $book = new book;
    //     $book->book_title = $request->book_title;
    //     $book->book_description = $request->book_description;
    //     $book->book_auther =$request->book_auther;
    //     $book->book_image = $request->book_image ;
    //     $book->save();
    //     return redirect('/');
        
    
    //  }

    //  

    public function edit($id) {
        $book= Book::find($id);
        return view('/edit',['books'=> $book]);
          
     }

     public function update(Request $request,$id) {

        $request->validate(
            [
                'book_title' => 'required',
                'book_description' => 'required',
                'book_auther' =>'required',
                'book_image' =>'required'
           
            ],
            [
                'book_title.required'=>'required book title',
                'book_description.required'=>'required book description',
                'book_auther.required'=>'required book auther',
                'book_image.required'=>'required book image'
    
            ]

            );

            $book= Book::find($id);
            $book->update(
            [
                    'book_title' => $request->book_title,
                    'book_description' => $request->book_description,
                    'book_auther' => $request->book_auther,
                    'book_image' => $request->book_image,
            ]);


            return redirect('/');
  
     }







     }