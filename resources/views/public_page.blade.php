@extends('layout')

@section('title', 'MainPage')

@section('content')
    <a type="button" class="btn btn-primary mb-3" href="{{ route('books.index')}}">To admin panel</a>
    @foreach ($authors_with_books as $author)
        <h3>{{ $author->author_name }}</h3>
        <ol class="list-group list-group-numbered">
        @foreach ($author->books as $book)
            <li class="list-group-item">{{ $book->book_name }}</li>
        @endforeach
        </ol>
    @endforeach
@endsection