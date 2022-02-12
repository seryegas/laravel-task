@extends('layout')

@section('title', 'Authors with books count')

@section('content')
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
                <td>{{ $author->author_name }}</td>
                <td>{{ $author->books_count }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
