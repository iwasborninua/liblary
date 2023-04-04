@php /** @var \App\Models\Book $book */ @endphp


@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('book.update', $book->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Название</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $book->name }}" required>
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Автор</label>
                <input type="text" class="form-control" id="author" name="author" value="{{ $book->author }}" required>
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Жанр</label>
                <input type="text" class="form-control" id="genre" name="genre" value="{{ $book->genre }}" required>
            </div>
            <div class="mb-3">
                <label for="isbn" class="form-label">ISBN</label>
                <input type="text" class="form-control" id="isbn" name="isbn" value="{{ $book->isbn }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Обновить</button>
        </form>

    </div>
@endsection
