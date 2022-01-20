@extends('layouts.main')
@section('title')
    Список новостей @parent
@stop
@section('header')
        <h2>Список новостей</h2>
@endsection
@section('content')
    @forelse ($newslist as $news)
        <div class="news-list__item">
            <div class="news-list__photo"><img src="#" alt="picture" class="news-list__img"></div>
            <h2 class="news-list__title">
                <a href="{{ route('news.show', ['id' => $news['id']]) }}" class="news-list__link">
                    {{ $news['title'] }}
                </a>
            </h2>
            <p class="news-list__text"> <strong>{{ $news['author'] }}</strong> &nbsp; Дата добавления: {{ $news['created_at'] }}</p>
            <p class="news-list__desc">{{ $news['description'] }}</p>
        </div>
    @empty
        <h2>Новостей нет</h2>
    @endforelse
@endsection


