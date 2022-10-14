<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;

class BookController extends Controller
{
    public function create()
    {
        return view('/addbook');
    }
    public function index()
    {
       
   
        return view('index',['books'=>book::all()]);

    }
    

    public function store(Request $request)
    {
        
    //  $formfields=$request->validate(
        
    //     [
    //         'book_title' => 'required',
    //         'book_description' => 'required',
    //         'book_auther' => 'required',
    //         'book_image' => 'required',
    //     ]);
    //     // dd($formfields);
    //     book::create($formfields);
    //     return redirect('/');

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
   
    $book = new book;
    $book->book_title = $request->book_title;
    $book->book_description = $request->book_description;
    $book->book_auther =$request->book_auther;
    $book->book_image = $request->book_image ;
    $book->save();
    return redirect('/');

    }







    // public function id($id)
    // {
    //     foreach ($books  as $book) {
    //         if ($book["id"] == $id) {
    //             return view("index");
    //         }
    //     }
    // }


    
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
    //     $book->update();
    //     return redirect('/');
        
    
    //  }

    //  

    public function edit($id) {
        $book= Book::find($id);
        return view('/edit',['books'=>$book]);
          
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