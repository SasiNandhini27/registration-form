@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Book
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('books.update', $book->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Book Name:</label>
              <input type="text" class="form-control" name="book_name" value="{{$book->book_name}}"/>
          </div>
          <div class="form-group">
              <label for="isbn_no">Book ISBN Number :</label>
              <input type="text" class="form-control" name="isbn_no" value="{{$book->isbn_no}}"/>
          </div>
          <div class="form-group">
              <label for="author_name">Author Name :</label>
              <input type="text" class="form-control" name="author_name" value="{{$book->author_name}}"/>
          </div>
          <div class="form-group">
              <label for="publisher_name">Publisher Name :</label>
              <input type="text" class="form-control" name="publisher_name" value="{{$book->publisher_name}}"/>
          </div>
          <div class="form-group">
              <label for="publication_year">Publication Year :</label>
              <input type="text" class="form-control" name="publication_year" value="{{$book->publication_year}}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Book</button>
      </form>
  </div>
</div>
@endsection