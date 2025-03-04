@extends('layouts.main')

@section('styles')
    @vite(['resources/css/article.css'])
@endsection

@section('content')
    <section class="article">
        @foreach ($articles as $article)
            <a href="{{ route('articles.show', $article->id) }}" class="article__card">
                <img src="{{ $article->imageSrc }}" alt="" class="article__img">
                <h3 class="article__title">{{ $article->title }}</h3>
            </a>       
        @endforeach
    </section>
@endsection