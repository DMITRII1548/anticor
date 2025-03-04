@extends('layouts.main')

@section('styles')
    @vite(['resources/css/article_show.css'])
@endsection

@section('content')
    <section class="article-show">
        <h1 class="article-show__title">{{ $article->title }}</h1>

        <div class="article-show__text">
            {!! $article->content !!}
        </div>
    </section>
@endsection
