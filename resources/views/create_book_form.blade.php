@extends('layout')

@section('title', 'Push new book of ' . $author->author_name)

@section('content')
<form method="POST" action="{{ route('books.store') }}">
    @csrf
    <div class="form-group">
      <label>Book name</label>
      <input type="text" class="form-control" name="book_name"  placeholder="Book">
    </div>
    <div class="form-group">
      <input type="hidden" class="form-control" name="author_id" value="{{ $author->id }}">
    </div>
    <button type="submit" class="btn btn-primary mt-3">Create</button>
  </form>
@endsection