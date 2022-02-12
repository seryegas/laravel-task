@extends('layout')

@section('title', 'Author: ' . $author->author_name)

@section('content')
    @if (count($books) == 0)
        <h4>The author has no books</h4>
    @else
        <ol class="list-group list-group-numbered">
        @foreach ($author->books as $book)
            <li class="list-group-item"><a href="{{ route('books.show', $book) }}">{{ $book->book_name }}</a></li>
        @endforeach
        </ol>
        <a type="button" class="btn btn-danger mt-3" href="{{ route('authors.show', $author) }}">{{ $author->author_name }}</a>
    @endif
@endsection