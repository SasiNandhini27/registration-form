@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <a href="{{ route('books.create')}}" class="btn btn-primary">Add Book</a>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Book Name</td>
          <td>ISBN Number</td>
          <td>Author Name</td>
          <td>Publisher Name</td>
          <td>Publication Year</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
        <tr>
            <td>{{$book->id}}</td>
            <td>{{$book->book_name}}</td>
            <td>{{$book->isbn_no}}</td>
            <td>{{$book->author_name}}</td>
            <td>{{$book->publisher_name}}</td>
            <td>{{$book->publication_year}}</td>
            <td><a href="{{ route('books.edit',$book->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('books.destroy', $book->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection