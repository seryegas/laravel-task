@extends('layout')

@section('title', 'Books with Authors')

@section('content--')
        @foreach($books as $book)
            <li class="list-group-item">{{ $book->book_name }}</li>
        @endforeach
@endsection

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Book Name</th>
            <th scope="col">Author</th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <td>{{ $book->book_name }}</td>
                <td>{{ $book->author_name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection


