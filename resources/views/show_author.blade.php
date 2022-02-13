@extends('layout')

@section('title', 'Author: ' . $author->author_name)

@section('content')
    <a type="button" class="btn btn-primary mb-3" href="{{ route('authors.index') }}">Back to authors</a>
    <div class="column">
        <a type="button" class="btn btn-success mb-3" href="{{ route('books.create', ['author_id' => $author->id]) }}">Add new author's book</a>
        <a type="button" class="btn btn-warning mb-3" href="{{ route('authors.edit', $author) }}">Update author</a>
        <form method="POST" action="{{ route('authors.destroy', $author) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger mb-3">Delete author</button>
        </form>
    </div>
    @if (count($books) == 0)
        <h4>The author has no books</h4>
    @else
        <ol class="list-group list-group-numbered">
        @foreach ($author->books as $book)
            <li class="list-group-item"><a href="{{ route('books.show', $book->id) }}">{{ $book->book_name }}</a></li>
        @endforeach
        </ol>
    @endif
@endsection