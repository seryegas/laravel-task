@extends('layout')

@section('title', 'Create author')

@section('content')
  <form method="POST" action="{{ route('authors.store') }}">
    @csrf
    <div class="form-group">
      <label>Author name</label>
      <input type="text" class="form-control" name="author_name"  placeholder="Author">
    </div>
    <button type="submit" class="btn btn-primary mt-3">Create author</button>
  </form>
@endsection