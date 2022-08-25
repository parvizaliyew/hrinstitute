
@extends('front.layouts.master')

@section('lang')
<div class="lang">
    <a href="{{ route(str_replace(app()->getLocale(), 'az', $current)) }}">AZ</a>
    <span></span>
    <a href="{{ route(str_replace(app()->getLocale(), 'en', $current)) }}">EN</a>
</div>
@endsection

@section('content')
    <!--contact Home Start-->
    <section id="about-home" class="projects-page">
        <img src="{{asset('front/')}}/./img/contact-img.png" alt="">
        <h1 class="pages-head-text">
            {{__('lang.contact')}}
        </h1>
    </section>
    <!--contact Home End-->
    <!--Contact Start-->
    <section id="contact">
        <div class="container">
            <div class="row">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">
                            {{__('lang.ana_sehife')}}  /
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        {{__('lang.contact')}}
                    </li>
                </ul>
                <div class="contact">
                    <div class="col-lg-5">
                        <div class="contact-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3038.9148231562776!2d49.869072315705516!3d40.38858036527435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d17de5e3d1d%3A0x2da2edf637232eb3!2sRusel%20Plaza!5e0!3m2!1str!2s!4v1660632020379!5m2!1str!2s"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-info">
                            <ul class="contact-phone">
                                <li>
                                    <a href="tel:{{ str_replace(' ','',$contact_info->phone_first) }}">
                                        <img src="{{asset('front/')}}/./img/contact-phone.svg" alt="">
                                        {{$contact_info->phone_first}}
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:{{ str_replace(' ','',$contact_info->phone_second) }}">
                                        <img src="{{asset('front/')}}/./img/contact-phone.svg" alt="">
                                        {{$contact_info->phone_second}}
                                    </a>
                                </li>
                            </ul>
                            <p class="contact-location">
                                <img src="{{asset('front/')}}/./img/contact-loc.svg" alt="">
                                {{$contact_info->getTranslatedAttribute('adress',app()->getLocale(),'az')}}
                            </p>
                            <div class="contact-mail">
                                <a href="mailTo:info@hrinstitute.az">
                                    <img src="{{asset('front/')}}/./img/contact-mail.svg" alt="">
                                    {{$contact_info->email}}
                                </a>
                                <div class="social">
                                    <a href="{{$contact_info->ln}}">
                                        <img src="{{asset('front/')}}/./img/linkedin.svg" alt="">
                                    </a>
                                    <a href="{{$contact_info->fb}}">
                                        <img src="{{asset('front/')}}/./img/facebook.svg" alt="">
                                    </a>
                                    <a href="{{$contact_info->inst}}">
                                        <img src="{{asset('front/')}}/./img/instagram.svg" alt="">
                                    </a>
                                    <a href="{{$contact_info->tw}}">
                                        <img src="{{asset('front/')}}/./img/twitter.svg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <h2 class="contact-head">
                            {{__('lang.sualiniz_var')}}
                        </h2>
                        <form action="{{route('contact_post')}}" method="POST" class="contact-inputs">
                        @csrf

                        @if(Session::has('success'))
                            <div class="alert alert-success">{{ Session::get('success')}}</div>
                        @endif

                        <input type="text" name="name" class="contact-input text-input" placeholder="{{__('lang.ad')}}">
                        
                        @error('name')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        
                        <input type="text" name="surname" class="contact-input text-input" placeholder="{{__('lang.soyad')}}">
                        @error('surname')
                        <span class="error">{{ $message }}</span>
                        @enderror
                        
                        <input type="text" name="email" class="contact-input text-input" placeholder="{{__('lang.email')}}">
                        @error('email')
                        <span class="error">{{ $message }}</span>
                        @enderror

                        <input type="text" name="phone" class="contact-input number-input"
                            placeholder="{{__('lang.phone')}} - (055)-555-55-55 ">
                        @error('phone')
                            <span class="error">{{ $message }}</span>
                        @enderror

                        <textarea  name="msj" id="" cols="30" rows="10" class="contact-textarea"
                            placeholder="{{__('lang.mesaj')}}"></textarea>

                            <div class="btn contact-btn">
                                <button type="submit"><a >
                                    {{__('lang.gonder')}}
                                </a></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact End-->
@endsection
