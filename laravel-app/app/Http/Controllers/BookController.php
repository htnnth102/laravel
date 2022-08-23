<?php

namespace App\Http\Controllers;

use App\Models\Book;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $lsBook = Book::all();
        return view('welcome')->with('lsBook', $lsBook);
    }

    // public function searchByName($title) {
    //     $book = Book::find($title);
    //     return view('search')->with('book', $book);

    // }


    
}
