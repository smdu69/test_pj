<?php

namespace App\Http\Controllers;


use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('author', 'coAuthors')->orderBy('title')->get();

        return view('welcome', compact('books'));
    }

    public function show($id)
    {
        //
    }
}
