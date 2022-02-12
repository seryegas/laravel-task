@extends('layout')

@section('title', 'Books with Authors')

@section('content')
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


