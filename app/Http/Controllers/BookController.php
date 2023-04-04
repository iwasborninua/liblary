<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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

    /**
     * Detail book delete
     *
     */
    public function delete($id)
    {
        $book = $book = Book::find($id);

        if($book->delete()) {
            return Redirect::to('/');
        } else {
            return 'Мои соболезнования';
        }
    }


    /**
     * Detail book update
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function update($id)
    {
        $book = Book::find($id);


        return view('book.update', [
            'book' => $book
        ]);
    }
}
