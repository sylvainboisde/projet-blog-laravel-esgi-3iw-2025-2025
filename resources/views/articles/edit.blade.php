@extends('layouts.master')

@section('content')

    <form action="{{ route('articles.update', $article) }}" method="post" class="max-w-md mx-auto">
        @csrf
        @method('PUT')
        <div class="space-y-4">
            <div>
                <label class="block" for="title">Title</label>
                <input class="w-full rounded" type="text" name="title" id="title" value="{{ old('title', $article->title) }}">
                @error('title')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label class="block" for="content">Content</label>
                <textarea class="w-full rounded" name="content" id="content">{{ old('content', $article->content) }}</textarea>
                @error('content')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label class="block" for="category_id">Content</label>
                <select class="w-full rounded" name="category_id" id="">
                    <option value="">-- Choisir --</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ (old('category_id') ?? $article->category_id) == $category->id ? 'selected' : '' }}>{{ $category->title }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="px-4 py-2 text-white bg-black rounded">Submit</button>
        </div>
    </form>

@endsection
