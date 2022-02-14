@extends('layout')

@section('title', 'Update book: ' . $book->book_name)

@section('content')
<form method="POST" action="{{ route('books.update', $book) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label>Book name</label>
      <input type="text" class="form-control" name="book_name"  placeholder="Book" value="{{ isset($book->book_name) ? $book->book_name : null }}">
    </div>
    <div class="form-group">
      <input type="hidden" class="form-control" name="author_id" value="{{ $author->id }}">
    </div>
    <button type="submit" class="btn btn-primary mt-3">Create</button>
  </form>
@endsection