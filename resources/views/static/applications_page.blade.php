@extends('layouts.main')


<!-- Нащвании вкладки в браузере -->
@section("header-title")
Заявки
@endsection



@section('content')
    <div class="containers">
        <!-- header нахоится в папке resources/views/components/Header -->
        @include('components.header')
        


        <div class="applications__title">
            <div class="applications__title_wrap">
                <h3>Форма для заявки</h3>
            </div>
        </div>
    </div>
@endsection
