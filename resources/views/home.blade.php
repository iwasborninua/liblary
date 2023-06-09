@extends('layouts.app')

@section('content')
    <div class="container">
    <section>
        <form action="" method="POST">
            @csrf
            <div class="input-group mb-3">
                <input type="text" name="query" class="form-control" placeholder="Search...">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </form>

    </section>

    <table class="table align-middle">
        <thead>
        <tr>
            <td>id</td>
            <td>Name</td>
            <td>Authot</td>
            <td>ISBN</td>
            <td>Genre</td>
            <td>Actions</td>
        </tr>
        </thead>
        @foreach($books as $book)
            <tr>
                <td >{{$book->id}}</td>
                <td>{{$book->name}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->isbn}}</td>
                <td>{{$book->genre}}</td>
                <td>
                    <a class="btn btn-info me-2" href="{{ url('/view/' . $book->id) }}">Detail</a>
                    <a class="btn btn-primary me-2" href="{{ url('/update/' . $book->id) }}">Update</a>
                    <a class="btn btn-danger"     href="{{ url('/delete/' . $book->id) }}">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
