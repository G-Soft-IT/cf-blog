
@extends('layouts.app')

@section('title', 'Edit Article')

@section('content')
<!-- Styles -->
<link rel="stylesheet" href="{{ asset('styles/articles/edit-create.blade.css') }}">

<div class="form-container">
    <h1>Edit Article</h1>

    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('articles.update', $article->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $article->title) }}" required maxlength="30">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea id="content" name="content" class="form-control" rows="5" required>{{ old('content', $article->content) }}</textarea>
        </div>
        <button type="submit" class="btn btn-success mt-3">Update Article</button>
    </form>
</div>
@endsection
