@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Book
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
      <form method="post" action="{{ route('books.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Book Name:</label>
              <input type="text" class="form-control" name="book_name"/>
          </div>
          <div class="form-group">
              <label for="price">ISBN Number :</label>
              <input type="text" class="form-control" name="isbn_no"/>
          </div>
          <div class="form-group">
              <label for="author_name">Author Name :</label>
              <input type="text" class="form-control" name="author_name"/>
          </div>
          <div class="form-group">
              <label for="publisher_name">Publisher Name :</label>
              <input type="text" class="form-control" name="publisher_name"/>
          </div>
          <div class="form-group">
              <label for="publication_year">Publication Year :</label>
              <input type="number" class="form-control" name="publication_year"/>
          </div>

          <button type="submit" class="btn btn-primary">Create Book</button>
      </form>
  </div>
</div>
@endsection