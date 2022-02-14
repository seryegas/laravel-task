<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

class TestApiController extends Controller
{
    public function index()
    {
        $books = DB::table('books')
            ->select(DB::raw('books.id as book_id, authors.id as author_id, books.book_name, authors.author_name'))
            ->join('authors', 'books.author_id', '=', 'authors.id')
            ->orderBy('book_id', 'asc')
            ->get();
        return $books->toJson(JSON_PRETTY_PRINT);
    }

    public function show($id)
    {
        return Book::find($id);
    }

    public function update(Request $request)
    {
        $book_id = $request->get('book_id');
        $book = Book::get()->find($book_id);
        $book->update($request->only(['book_name']));
        return $book->toJson(JSON_PRETTY_PRINT);
    }

    public function destroy($id)
    {
        return Book::destroy($id);
    }
}
