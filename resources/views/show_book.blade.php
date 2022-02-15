@extends('layout')

@section('title', 'Book: ' . $book->book_name)

@section('content')
<a type="button" class="btn btn-primary mb-3" href="{{ route('books.index') }}">Back to books</a>
<div class="card" style="width: 18rem;">
    <div class="card-header">
        {{ $book->book_name }}
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Id : {{ $book->id }}</li>
      <li class="list-group-item">Book name: {{ $book->book_name }}</li>
      <li class="list-group-item">Book author: {{ $author->author_name }}</li>
    </ul>
  </div>
  <a type="button" class="btn btn-secondary mt-3" href="{{ route('books.edit', $book) }}">Update</a>
  <form method="POST" action="{{ route('books.destroy', $book) }}">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger mt-3">Delete book</button>
</form>
@endsection
