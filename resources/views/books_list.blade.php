@extends('layout')

@section('title', 'Books with Authors')

@section('content')
    <a type="button" class="btn btn-primary mb-3" href="{{ route('home') }}">To main page</a>
    <a type="button" class="btn btn-primary mb-3" href="{{ route('authors.index') }}">To authors page</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Book Name</th>
            <th scope="col">Author</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <td>{{ $book->book_name }}</td>
                <td>{{ $book->author_name }}</td>
                <td>{{ $book->author_name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection


