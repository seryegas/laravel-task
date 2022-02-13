<?php

namespace App\Http\Controllers;

use App\Models\Author;

class MainController extends Controller
{
    public function index()
    {
        $authors_with_books = Author::with('books')->get();
        return view('public_page', compact('authors_with_books'));
    }

    public function admin()
    {
        return redirect()->route('admin.books.index');
    }
}