<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Detail book view
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function view($id)
    {
        $book = Book::find($id);


        return view('book.view', [
            'book' => $book
        ]);
    }
}
