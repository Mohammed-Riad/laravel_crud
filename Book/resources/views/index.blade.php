@extends('master')

@section('nav')
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      @if (auth()->user())
            <a class="nav-link" href="" style="color:white">Hi {{auth()->user()->name}}</a>
            <li class="nav-item">
              <a class="nav-link" href="/logout" style="color:white">Logout </a>
            </li>
        @endif

      <li class="nav-item active">
        <a class="nav-link" href="/" style="color:white">Home </a>
      </li>
  
      
     
   
  </div>
</nav>
@endsection

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
{{-- <div class="input-group">
  <div class="form-outline">
    <label class="form-label" for="form1">Search</label>
    <input type="search" id="form1" class="form-control" />
  </div>
 
</div> --}}

<form action="/" style="margin-left:100px;"> 
  <input type="text" name="search" placeholder="Search using title" 
  class="form-control  mt-3 mb-1" style="width:15%;">
  <button type="submit" class="btn btn-dark">Search</button>
  </form>



   @if (auth()->user())
    
<a href="add" class="btn btn-dark" id="add">Add Book</a>
  @endif

<div class="container">
    
 



@foreach ($books as $book)

{{-- @if (isset(auth::user()->id) && auth::user()->id == $bookid)
  
@endif --}}

<div class="card" style="width: 18rem;">
    <img src="{{$book["book_image"] }}" alt="">
    <div class="card-body">
      <h5 class="card-title">{{$book["book_title"] }}</h5>
      <p class="card-text">{{$book["id"] }}</p>
      <p class="card-text">{{$book["book_description"] }}</p>
      <p class="card-text">{{$book["book_author"] }}</p>
      <div class="btn">
        

        @if (auth()->user())
        <td><a href = 'delete/{{ $book["id"] }}' class="btn btn-danger" onclick="return confirm('Are you sure');  ">Delete</a></td>
      <a href="edit/{{ $book["id"] }}" class="btn btn-dark">Edit</a>
    @endif
       
      </div>
      
    </div>
  </div>
 

@endforeach
</div>
@endsection


