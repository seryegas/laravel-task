@extends('layout')

@section('title', 'Book: ' . $book->book_name)

@section('content')
<div class="card" style="width: 18rem;">
    <div class="card-header">
        {{ $book->book_name }}
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Id : {{ $book->id }}</li>
      <li class="list-group-item">Book name: {{ $book->book_name }}</li>
      <li class="list-group-item">Book author: {{ $author[0]->author_name }}</li>
    </ul>
  </div>
  <a type="button" class="btn btn-secondary mt-3" href="{{ route('books.update', $book) }}">Update</a>
  <a type="button" class="btn btn-danger mt-3" href="{{ route('books.destroy', $book) }}">Destroy</a>
@endsection
