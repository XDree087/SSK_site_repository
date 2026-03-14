@extends('layouts.main')


<!-- Нащвании вкладки в браузере -->
@section("header-title")
Заявки
@endsection



@section('content')
    <div class="containers">
        <!-- header нахоится в папке resources/views/components/Header -->
        @include('components.header')
    
@endsection
