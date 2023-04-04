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

    public function bookUpdate(Request $request, Book $book) {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'isbn' => 'required|string|max:255',
        ]);

        $book->name = $validatedData['name'];
        $book->author = $validatedData['author'];
        $book->genre = $validatedData['genre'];
        $book->isbn = $validatedData['isbn'];
        $book->save();
        $book->touch();

        return redirect()->route('book.view', $book->id);
    }

    // BookController.php
    public function createBook(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'isbn' => 'required|string|max:255',
        ]);

        $book = new Book;
        $book->name = $validatedData['name'];
        $book->author = $validatedData['author'];
        $book->genre = $validatedData['genre'];
        $book->isbn = $validatedData['isbn'];
        $book->save();

        return redirect()->route('/');
    }

    public function showCreateForm()
    {
        return view('book.create');
    }

}
