@extends('layout')

@section('title', 'Authors with books count')

@section('content') 
    <a type="button" class="btn btn-primary mb-3" href="{{ route('home') }}">To main page</a>
    <a type="button" class="btn btn-primary mb-3" href="{{ route('books.index') }}">To books page</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Author</th>
            <th scope="col">Books count</th>
        </tr>
        </thead>
        <tbody>
        @foreach($authors as $author)
            <tr>
                <td><a href="{{ route('authors.show', $author) }}">{{ $author->author_name }}</a></td>
                <td>{{ $author->books_count }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
