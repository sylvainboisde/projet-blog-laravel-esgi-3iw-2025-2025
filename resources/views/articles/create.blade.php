@extends('layouts.master')

@section('content')

    <form action="{{ route('articles.store') }}" method="post">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
            @error('title')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="content">Content</label>
            <textarea name="content" id="content">{{ old('content') }}</textarea>
            @error('content')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Submit</button>
    </form>

@endsection
