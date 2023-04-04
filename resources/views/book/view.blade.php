@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-striped">
        <tr>
            <td>id</td>
            <td>{{$book->id}}</td>
        </tr>
        <tr>
            <td>Name</td>
            <td>{{$book->name}}</td>
        </tr>
        <tr>
            <td>Author</td>
            <td>{{$book->author}}</td>
        </tr>
        <tr>
            <td>Genre</td>
            <td>{{$book->genre}}</td>
        </tr>
        <tr>
            <td>ISBN</td>
            <td>{{$book->isbn}}</td>
        </tr>
        <tr>
            <td>Create</td>
            <td>{{$book->created_at}}</td>
        </tr>


    </table>
</div>
@endsection
