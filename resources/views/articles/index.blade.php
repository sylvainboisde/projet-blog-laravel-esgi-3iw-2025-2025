@extends('layouts.master')

@section('content')
    <div class="max-w-xl mx-auto">
        <a href="{{ route('articles.create') }}">Ajouter un article</a>

        @foreach ($articles as $article)
            <div class="p-4 my-2 space-y-4 bg-slate-50">
                <h2 class="text-xl">
                    <a href="{{ route('articles.show', $article) }}" class="hover:underline">{{ $article->title }}</a>
                </h2>
                <p class="text-sm text-slate-500">Créé {{ $article->created_at->diffForHumans() }}</p>
                <p>{{ $article->content }}</p>
            </div>
        @endforeach

        {{ $articles->links() }}
    </div>
@endsection
