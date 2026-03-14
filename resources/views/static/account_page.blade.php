@extends('layouts.main')

<!-- Нащвании вкладки в браузере -->
@section("header-title")
Личный кабинет
@endsection

@section('content')

    <div class="container-account">
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
                    
                      <div class="account_link d-flex justify-content-start" onclick="document.location=''">
                        <div class="account_link__wrap d-flex align-items-center">
                            <img class="icon" src="{{ asset('images/icon-settings.png') }}" alt="">
                            <h5  class="montserrat-regular">Настройки</h5>
                        </div>
                    </div>

                     <div class="account_link d-flex justify-content-start" onclick="document.location=''">
                        <div class="account_link__wrap d-flex align-items-center">
                            <img class="icon" src="{{ asset('images/icon-support.png') }}" alt="">
                            <h5  class="montserrat-regular">Поддержка</h5>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="account__info"></div>
    </div>
 
@endsection