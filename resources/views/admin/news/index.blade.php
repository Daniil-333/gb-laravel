@extends('layouts.admin')
@section('header')
    <h2>Список новостей</h2>
    <a href="{{ route('admin.news.create') }}">Добавить новость</a>
@endsection
@section('content')
    <div class="">
        Список новостей
    </div>
@endsection
