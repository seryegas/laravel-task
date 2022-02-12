@extends('layout')

@section('title', 'Push new book')

@section('content')
<form method="POST" action="{{ route('books.store') }}">
    @csrf
    <div class="form-group">
      <label>Book name</label>
      <input type="text" class="form-control" name="book_name"  placeholder="Book">
    </div>
    <div class="form-group">
      <label>Author name</label>
      <input type="text" class="form-control" name="author_name" placeholder="Author">
    </div>
    <button type="submit" class="btn btn-primary mt-3">Create</button>
  </form>
@endsection