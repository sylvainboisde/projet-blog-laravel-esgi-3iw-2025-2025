@extends('layouts.master')

@section('content')
    <div class="max-w-xl mx-auto">



        <div class="p-4 my-2 space-y-4 bg-slate-50">
            <h2 class="text-xl">
                <a href="{{ route('articles.show', $article) }}" class="hover:underline">{{ $article->title }}</a>
            </h2>
            <p class="text-sm text-slate-500">Créé {{ $article->created_at->diffForHumans() }}</p>
            <p>{{ $article->content }}</p>

            <div class="flex gap-4">


                <a href="{{ route('articles.edit', $article) }}" class="text-blue-500 hover:underline">Modifier</a>

                <form action="{{ route('articles.destroy', $article) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="text" name="test" id="">
                    <button type="submit" class="text-red-500 hover:underline">Supprimer</button>
                </form>
            </div>
        </div>

    </div>
@endsection
