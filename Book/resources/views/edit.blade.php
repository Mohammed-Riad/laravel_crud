@extends('master')

<style>
form 
{
    /* margin-left: 500px;
    margin-top: 00px; */
    /* 0 */
    /* display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center; */
    margin-top: 150px;
    margin-left: 300px;
}
</style>
@section('section1')

<form method="post" action="/update/<?php echo $books->id;?>">
    @csrf
{{-- @method('put') --}}
  

    <div class="form-group">
        <label for="exampleInputEmail1">book_title</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="book_title" placeholder="Enter book_title" value="<?php echo $books->book_title;?>" style="width:60%" >
        @error('book_title')
        <div class="alert alert-danger" style="width:60%">{{ $message }}</div>
      @enderror
      </div>

    <div class="form-group">
      <label for="exampleInputEmail1">book_description</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="book_description" placeholder="Enter book_description" value="<?php echo $books->book_description;?>" style="width:60%">
      @error('book_description')
    <div class="alert alert-danger" style="width:60%">{{ $message }}</div>
  @enderror
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">book_author</label>
      <input type="text" class="form-control" name="book_auther" id="exampleInputPassword1" placeholder="book_author" value="<?php echo $books->book_auther;?>" style="width:60%">
      @error('book_auther')
      <div class="alert alert-danger" style="width:60%">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">book_image</label>
        <input type="text" class="form-control" name="book_image"  id="exampleInputPassword1" placeholder="book_image"  style="width:60%">
        @error('book_image')
        <div class="alert alert-danger" style="width:60%">{{ $message }}</div>
      @enderror
      </div>
   <br>
    <button type="submit" class="btn btn-dark">Submit</button>
  </form>

  
@endsection
<?php 

?>