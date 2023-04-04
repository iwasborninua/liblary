@extends('layouts.app')

@section('content')
<div class="container">
        <table class="table">
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
                    <td>{{$book->id}}</td>
                    <td>{{$book->name}}</td>
                    <td>{{$book->author}}</td>
                    <td>{{$book->isbn}}</td>
                    <td>{{$book->genre}}</td>
                    <td>
                        <a class="" href="">Detail</a>
                        <a href="">Update</a>
                        <a href="">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
</div>
@endsection
