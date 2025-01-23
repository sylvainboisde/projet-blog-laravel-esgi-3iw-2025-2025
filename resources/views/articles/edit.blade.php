@extends('layouts.master')

@section('content')

    <form action="{{ route('articles.update', $article) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title', $article->title) }}">
            @error('title')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="content">Content</label>
            <textarea name="content" id="content">{{ old('content', $article->content) }}</textarea>
            @error('content')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Submit</button>
    </form>

@endsection
