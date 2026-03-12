@extends('layouts.main')


<!-- Нащвании вкладки в браузере -->
@section("header-title")
Главная страница
@endsection



@section('content')
    <div class="containers">
        <!-- header нахоится в папке resources/views/components/Header -->
        @include('components.header')


        <!-- ОСновная часть главной страницы сайта -->
        <main class="d-flex justify-content-between align-items-center">
            <div class="home_main-blok bg-white d-flex justify-content-center align-items-center">
                <div class="home_main-blok__wrap flex-column d-flex justify-content-between align-items-start">


                    <h1 class="montserrat-bold">Внутренний сайт<br>
                    компании SSK</h1>
                    <h6 class="montserrat-semiBold">Сайт создан для внутренних дел компании<br>
                    SSK, ввод доступен только сотрудникам<br> 
                    и никому больше</h6>

                    <button onclick="document.location='/'" class="montserrat-regular main_btn">Личный кабинет</button>

                </div>
                
            </div>

            <img src="{{ asset('images/Main_illustration.png') }}" alt="">
        </main>

        <!-- footer нахоится в папке resources/views/components/Footer-->
        @include('components.footer')
    </div>

    
@endsection

