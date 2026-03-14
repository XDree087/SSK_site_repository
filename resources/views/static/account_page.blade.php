@extends('layouts.main')

<!-- Нащвании вкладки в браузере -->
@section("header-title")
Личный кабинет
@endsection

@section('content')

    <div class="container-account d-flex">
        <div class="bg-white account_menu d-flex justify-content-between">
            <div class="account_menu__wrap d-flex justify-content-between flex-column">
                 <img class="account_img" onclick="document.location='/home'" src="{{ asset('images/logo.png') }}" alt="Лого SKK">
                <nav class="account_navigation d-flex justify-content-between align-items-start flex-column">
                     <div class="activ account_link d-flex justify-content-start" onclick="document.location='/account'">
                        <div class="  account_link__wrap d-flex align-items-center">
                            <img class="icon" src="{{ asset('images/icon-profile.png') }}" alt="">
                            <h5  class="montserrat-regular">Профиль</h5>
                        </div>
                    </div>

                    <div class="account_link d-flex justify-content-start" onclick="document.location='/account/statistic'">
                        <div class="account_link__wrap d-flex align-items-center">
                            <img class="icon" src="{{ asset('images/icon-statistics.png') }}" alt="">
                            <h5  class="montserrat-regular">Статистика</h5>
                        </div>
                    </div>
                    
                      <div class="account_link d-flex justify-content-start" onclick="document.location='/account/settings'">
                        <div class="account_link__wrap d-flex align-items-center">
                            <img class="icon" src="{{ asset('images/icon-settings.png') }}" alt="">
                            <h5  class="montserrat-regular">Настройки</h5>
                        </div>
                    </div>

                     <div class="account_link d-flex justify-content-start" onclick="document.location='/account/support'">
                        <div class="account_link__wrap d-flex align-items-center">
                            <img class="icon" src="{{ asset('images/icon-support.png') }}" alt="">
                            <h5  class="montserrat-regular">Поддержка</h5>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="account__info d-flex justify-content-between align-items-center flex-column">

            <div class="montserrat-regular bg-white account__info_welcome d-flex justify-content-center align-items-center">
                <div class="account__info_welcome_wrap d-flex justify-content-between align-items-center">
                    <h4 class='montserrat-regular'>Добро пожаловать в личный кабинет</h4>
                    <div class="account__info_welcome_name d-flex justify-content-between align-items-center">
                        <div class="small__avatar d-flex justify-content-center align-items-center">ФИ</div>
                        <p>Фамилия имя</p>
                    </div>
                </div> 
            </div>
            <div class="bg-white account__profile">
                <div class="purple_up-line"></div>
                <div class="account__profile-name d-flex justify-content-between align-items-center flex-column">
                    <div class="big__avatar d-flex justify-content-center align-items-center">ФИ</div>
                    <h2 class="montserrat-bold">Фамилия Имя</h2>
                    </div>
            </div>
            <div class="account__information">
                <div class="account__information_wrap d-flex justify-content-between flex-column">
                    <div class="main-info d-flex justify-content-center align-items-center"><h4 class="montserrat-regular">Основная информация</h4></div>
                     <div class="main-info__person montserrat-regular d-flex justify-content-between">
                        <div class="enail"><h6>Email:</h6><p>Pochta123@gmail.com</p></div>
                        <div class="number"><h6>Номер телефона</h6><p>89521233221</p></div>
                        <div class="productivity"><h6>Уровень продуктивности</h6><p>79%</p></div>
                    </div>
                    

                </div>
            </div>

             @include('components.footer')
        </div>
       
        
    </div>
 
@endsection 