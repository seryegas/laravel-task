<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Author;
use App\Models\Book;

class MainController extends Controller
{
    public function index()
    {
        $authors_with_books = Author::with('books')->get();
        return view('public_page', compact('authors_with_books'));
    }
}
