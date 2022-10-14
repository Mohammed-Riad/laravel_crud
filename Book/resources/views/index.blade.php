@extends('master')

<style>
    #add
    {
        margin-left: 100px;
        margin-top: 50px;
    }
    .card
    {
        margin: 10px;
    }
    .container
    {
        display: flex;  
        flex-wrap: wrap;
        margin-top: 70px;
    }
    .btn
    {
        display: flex;
        
    }
</style>
@section('section1')

<a href="add" class="btn btn-dark" id="add">Add Book</a>
<div class="container">
    
@foreach ($books as $book)

<div class="card" style="width: 18rem;">
    <img src="{{$book["book_image"] }}" alt="">
    <div class="card-body">
      <h5 class="card-title">{{$book["book_title"] }}</h5>
      <p class="card-text">{{$book["id"] }}</p>
      <p class="card-text">{{$book["book_description"] }}</p>
      <p class="card-text">{{$book["book_author"] }}</p>
      <div class="btn">
        <td><a href = 'delete/{{ $book["id"] }}' class="btn btn-dark">Delete</a></td>
      <a href="edit/{{ $book["id"] }}" class="btn btn-dark">Edit</a>
      </div>
      
    </div>
  </div>
 

@endforeach
</div>
@endsection


