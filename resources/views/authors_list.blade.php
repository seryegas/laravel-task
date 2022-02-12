@extends('layout')

@section('title', 'Authors with books count')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Author</th>
            <th scope="col">Books count</th>
            <th scope="col">Actions</th>
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
