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
        'book_image',
       
    ];


  
 

    public function scopeFilter($query, array $filters)
    {
        if ($filters["search"] ?? false) {
            $query->where("book_title", "LIKE", "%" . $filters["search"] . "%");
        }
    }


   
}
