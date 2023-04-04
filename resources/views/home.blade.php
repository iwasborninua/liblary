@extends('layouts.app')

@section('content')
<div class="container">
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
                    <td class="">{{$book->id}}</td>
                    <td>{{$book->name}}</td>
                    <td>{{$book->author}}</td>
                    <td>{{$book->isbn}}</td>
                    <td>{{$book->genre}}</td>
                    <td>
                        <a class="btn btn-info me-2" href="">Detail</a>
                        <a class="btn btn-info me-2" href="">Update</a>
                        <a class="btn btn-info" href="">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
</div>
@endsection
