@extends('layout')

@section('title', 'MainPage')

@section('content')
    @foreach ($authors_with_books as $author)
        <h3>{{ $author->author_name }}</h3>
        <ol class="list-group list-group-numbered">
        @foreach ($author->books as $book)
            <li class="list-group-item">{{ $book->book_name }}</li>
        @endforeach
        </ol>
    @endforeach
@endsection