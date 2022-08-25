<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://fonts.cdnfonts.com/css/circe?styles=15451,81159,81160,81161" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css"
    integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('front/')}}/./css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('front/')}}/./css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('front/')}}/./css/reset.css">
    <link rel="stylesheet" href="{{asset('front/')}}/./css/style.css">
    <link rel="stylesheet" href="{{asset('front/')}}/./css/config.css">
    <title>hr</title>
</head>

<body>
    <!--Header Start-->
    <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="social">
                        <a target="__blank" href="{{$contact_info->ln}}">
                            <img src="{{asset('front/')}}/./img/linkedin.svg" alt="">
                        </a>
                        <a target="__blank" href="{{$contact_info->fb}}">
                            <img src="{{asset('front/')}}/./img/facebook.svg" alt="">
                        </a>
                        <a target="__blank" href="{{$contact_info->inst}}">
                            <img src="{{asset('front/')}}/./img/instagram.svg" alt="">
                        </a>
                        <a target="__blank" href="{{$contact_info->tw}}">
                            <img src="{{asset('front/')}}/./img/twitter.svg" alt="">
                        </a>
                    </div>
                    <div  class="header-contact">
                        <a target="__blank" href="{{ str_replace(' ','', $contact_info->phone_first) }}">
                            <img src="{{asset('front/')}}/./img/phone.svg" alt="">
                           {{$contact_info->phone_first}}
                        </a>
                        <a   href="#">
                            <img src="{{asset('front/')}}/./img/location.svg" alt="">
                            {{$contact_info->adress}}
                        </a>
                       @yield('lang')
                    </div>
                </div>
            </div>
        </div>
        <div class="border"></div>
        <div class="header-bottom">
            <div class="container">
                <div class="nav-border"></div>
                <div class="row">
                    <div class="logo">
                        <a href="{{route('index.'.app()->getLocale())}}">
                            <img src="{{asset('front/')}}/./img/hr-logo.svg" alt="">
                        </a>
                    </div>
                    <nav>
                        <ul class="navbar">
                            <li class="nav-item dropdown-1">
                                <a>
                                    {{__('lang.haqqimizda')}}
                                    <img src="{{asset('front/')}}/./img/nav-arrow.svg" alt="">
                                </a>
                                <ul class="dropdown_menu dropdown_menu--animated dropdown_1">
                                    <li class="dropdown_item">
                                        <a href="{{ route('about.'.app()->getLocale()) }}">
                                            {{__('lang.biz_kimik')}}
                                        </a>
                                    </li>
                                    <li class="dropdown_item">
                                        <a href="#">
                                            Üzvlük
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-item dropdown-2">
                                <a >
                                    {{__('lang.hr_heller')}}
                                    <img src="{{asset('front/')}}/./img/nav-arrow.svg" alt="">
                                </a>
                                <ul class="dropdown_menu dropdown_menu--animated dropdown_2">
                                    @foreach ($hr_heller as $hr_hell)
                                    <li class="dropdown_item">
                                        <a href="{{route('hr.'.app()->getLocale(),$hr_hell->{'slug_'.app()->getLocale()}) }}">
                                            {{$hr_hell->getTranslatedAttribute('name',app()->getLocale(),'az')}}
                                        </a>
                                    </li>
                                    @endforeach


                                </ul>
                            </li>
                            <li class="nav-item dropdown-3">
                                <a >
                                    {{__('lang.sertifkasiya_proqramlari')}}
                                    <img src="{{asset('front/')}}/./img/nav-arrow.svg" alt="">
                                </a>
                                <ul class="dropdown_menu dropdown_menu--animated dropdown_3">

                                    @foreach ($ser_programs as $ser_pro)
                                    <li class="dropdown_item">
                                        <a href="{{route('sertifkasiya.'.app()->getLocale(),$ser_pro->{'slug_'.app()->getLocale()}) }}">
                                           {{$ser_pro->getTranslatedAttribute('name',app()->getLocale(),'az')}}
                                        </a>
                                    </li>
                                    @endforeach

                                </ul>
                            </li>
                            <li class="nav-item dropdown-4">
                                <a >
                                    {{__('lang.tedris_program')}}
                                    <img src="{{asset('front/')}}/./img/nav-arrow.svg" alt="">
                                </a>
                                <ul class="dropdown_menu dropdown_menu--animated dropdown_4">
                                    @foreach ($edu_programs as $e_pro)
                                    <li class="dropdown_item">
                                        <a href="{{route('tedris.'.app()->getLocale(),$e_pro->{'slug_'.app()->getLocale()}) }}">
                                           {{$e_pro->getTranslatedAttribute('name',app()->getLocale(),'az')}}
                                        </a>
                                    </li>
                                    @endforeach

                                </ul>
                            </li>
                            <li class="nav-item dropdown-5">
                                <a >
                                    {{__('lang.tedbirler')}}
                                    <img src="{{asset('front/')}}/./img/nav-arrow.svg" alt="">
                                </a>
                                <ul class="dropdown_menu dropdown_menu--animated dropdown_5 dropdown-events">
                                    <li class="dropdown_item">
                                        <a href="{{route('fin.'.app()->getLocale())}}">
                                            {{__('lang.kecmis_tedbirler')}}
                                        </a>
                                    </li>
                                    <li class="dropdown_item">
                                        <a href="{{route('fut.'.app()->getLocale())}}">
                                            {{__('lang.qarsidan_gelen_tedbirler')}}
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown-6">
                                <a href="{{route('cooperation.'.app()->getLocale() )}}">
                                    {{__('lang.beynelxalq_emekdasliq')}}
                                </a>
                            </li>
                            @php
                             $data_now=\Illuminate\Support\Carbon::now();
                            $event_future=\App\Models\Event::withTranslation()->where('date','>',$data_now)->whereNotNull('important_event')->
                            orderBy('created_at','DESC')->first();
                            @endphp
                            <li class="nav-item dropdown-6">
                                <a href="{{route('future.'.app()->getLocale() ,$event_future->{'slug_'.app()->getLocale()})}}">
                                    {{$event_future->getTranslatedAttribute('important_event',app()->getLocale(),'az')}}
                                </a>
                            </li>
                            <li class="nav-item dropdown-6">
                                <a href="{{ route('contact.'.app()->getLocale() )}}">
                                    {{__('lang.contact')}}
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
