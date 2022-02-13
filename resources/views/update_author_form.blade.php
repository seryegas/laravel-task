@extends('layout')

@section('title', 'Update ' . $author->author_name)

@section('content')
  <form method="POST" action="{{ route('authors.update', $author) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label>Author name</label>
      <input type="text" class="form-control" name="author_name"  placeholder="Author" value="{{ $author->author_name }}">
    </div>
    <button type="submit" class="btn btn-warning mt-3">Update author</button>
  </form>
@endsection