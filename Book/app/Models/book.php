<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    // public $books;
    use HasFactory;

    protected $fillable = [
       
        'book_title',
        'book_description',
        'book_auther',
        'book_image'
    ];



    // public function allBooks()
    // {
    //     $this->books = [
    //         [
                
    //             "id" => 1, 
    //             "book_title" => "book1",
    //             "book_description" => "This description for a book 1",
    //             "book_author" => "mohammed",
    //             "book_image" => "https://www.fillmurray.com/640/360",
                
    //         ],
    //         [
    //             "id" => 2,
    //             "book_title" => "book2",
    //             "book_description" => "This description for a book 2",
    //             "book_author" => "laith",
    //             "book_image" => "https://placekitten.com/640/360",
               
    //         ],
    //         [
    //             "id" => 3, 
    //             "book_title" => "book3",
    //             "book_description" => "This description for a book 3",
    //             "book_author" => "riad",
    //             "book_image" => "https://www.fillmurray.com/640/360",
               
    //         ],
    //         [
    //             "id" => 4,
    //             "book_title" => "book4",
    //             "book_description" => "This description for a book 4",
    //             "book_author" => "rose",
    //             "book_image" => "https://loremflickr.com/640/360",
                
    //         ],
    //         [
    //             "id" => 5, 
    //             "book_title" => "book5",
    //             "book_description" => "This description for a book 5",
    //             "book_author" => "khaled",
    //             "book_image" => "https://loremflickr.com/640/360",
            
    //         ],

    //         [
    //             "id" => 6, 
    //             "book_title" => "book6",
    //             "book_description" => "This description for a book 6",
    //             "book_author" => "jak",
    //             "book_image" => "https://loremflickr.com/640/360",
    //             "book"=>"bigjak"
    //         ]
    //     ];

    //     return $this->books;
    // }

//  public function create()
//  {
//     return view('addbook');
//  }
}
