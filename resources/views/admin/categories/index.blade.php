@extends('layouts.admin')
@section('header')
    <h2>Список категорий</h2>
    <a href="{{ route('admin.categories.create') }}">Добавить категорию</a>
@endsection
@section('content')
    <div class="">
        Список категорий
    </div>
@endsection
