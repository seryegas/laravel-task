<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function books()
    {
        $books = DB::table('books')
            ->join('authors', 'books.author_id', '=', 'authors.id')
            ->get();
        return view('books_list', compact('books'));
    }

    public function authors()
    {
        $authors = Author::withCount('books')->get();
        return view('authors_list', compact('authors'));
    }
}
