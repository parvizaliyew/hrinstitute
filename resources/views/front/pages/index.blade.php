@extends('front.layouts.master')


@section('lang')
    <div class="lang">
        <a href="{{ route(str_replace(app()->getLocale(), 'az', $current)) }}">AZ</a>
        <span></span>
        <a href="{{ route(str_replace(app()->getLocale(), 'en', $current)) }}">EN</a>
    </div>
@endsection

@section('content')
    <!--Home Start-->
    <section id="home">
        <div class="owl-carousel owl-theme home-slider">
            @foreach ($sliders as $slider)
                <div class="item">
                    <div class="home-slide">
                        <img src="{{ Voyager::image($slider->image) }}" alt="">
                        <div class="container">
                            <div class="row">
                                <h2 class="home-head">
                                    DAHA YAXŞI GƏLƏCƏK ÜÇÜN
                                </h2>
                                <div class="home-btn">
                                    <div class="btn">
                                        <a href="#">
                                            Ətraflı
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="home-bottom">
                                    <img src="{{ asset('front/') }}/./img/home-bottom.png" alt="">
                                    <div class="home-bottom-body">
                                        <h3 class="home-bottom-text">
                                            15 NOYABR 2022
                                        </h3>
                                        <h3 class="home-bottom-text">
                                            BAKI BULVAR OTEL
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!--Home End-->
    <!--About Start-->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h2 class="about-head">
                        {{ __('lang.haqqimizda') }}
                    </h2>
                    <hr class="about-hr">
                    <h3 class="about-head-2">
                        {{ __('lang.biz_kimik') }}
                    </h3>
                    <p class="about-body">
                        {{ __('lang.desc') }}
                    </p>
                    <form action="#">
                        <div class="about-btn btn">
                            <a>{{ __('lang.etrafli') }}</a>
                        </div>
                    </form>
                </div>
                <div class="col-lg-7">
                    <div class="img-1 active">
                        <img src="{{ asset('front/') }}/./img/about-img1.png" alt="">
                    </div>
                    <div class="img-2">
                        <img src="{{ asset('front/') }}/./img/about-img-2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About-end-->
    <section id="certificate">
        <div class="container">
            <div class="row">
                <h2 class="head-text">
                    {{ __('lang.sertifkasiya_proqramlari') }}
                </h2>
                <div class="owl-carousel owl-theme certificate-cards">
                    @foreach ($ser_programs as $ser_pro)
                        <div class="item">
                            <div class="certificate-card">
                                <div class="cer-img">
                                    <img src="{{ Voyager::image($ser_pro->image) }}" alt="">
                                </div>
                                <div class="certificate-body">
                                    <h3 class="certificate-head-text">
                                        {{ $ser_pro->getTranslatedAttribute('title', app()->getLocale(), 'az') }}
                                    </h3>
                                    <p class="certificate-body-text">
                                        {{ $ser_pro->getTranslatedAttribute('desc', app()->getLocale(), 'az') }}
                                    </p>
                                    <div class="certificate-foot-text">
                                        <span>
                                            <img src="{{ asset('front/') }}/./img/certificate-icon-1.svg" alt="">
                                            {{ $ser_pro->getTranslatedAttribute('course_time', app()->getLocale(), 'az') }}
                                        </span>
                                        <span>
                                            <img src="{{ asset('front/') }}/./img/certificate-icon-2.svg" alt="">
                                            {{ $ser_pro->course_number }}
                                        </span>
                                    </div>
                                    <div class="certificate-buttons">
                                        <form action="#">
                                            <div class="btn certificate-btn">
                                                <a href="#">{{ __('lang.etrafli') }}</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!--Counter Start-->
    <section id="counter">
        <div class="container">
            <div class="row">
                <div class="count-area" data-diff="100">
                    <div class="col-lg-3">
                        <div class="count-area-content">
                            <div class="count-img">
                                <img src="{{ asset('front/') }}/./img/count-logo-1.svg" alt="">
                            </div>
                            <div class="count-text">
                                <div class="count-number">
                                    <div class="count-digit">
                                        {{ $counter->year_experience }}
                                    </div>
                                    +
                                </div>
                                <div>
                                    illik təcrübə
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="count-area-content">
                            <div class="count-img">
                                <img src="{{ asset('front/') }}/./img/count-logo-1.svg" alt="">
                            </div>
                            <div class="count-text">
                                <div class="count-number">
                                    <div class="count-digit">
                                        {{ $counter->graduate }}
                                    </div>
                                    +
                                </div>
                                <div>
                                    mezun
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="count-area-content">
                            <div class="count-img">
                                <img src="{{ asset('front/') }}/./img/count-logo-1.svg" alt="">
                            </div>
                            <div class="count-text">
                                <div class="count-number">
                                    <div class="count-digit">
                                        {{ $counter->training }}
                                    </div>
                                    +
                                </div>
                                <div>
                                    telim
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="count-area-content">
                            <div class="count-img">
                                <img src="{{ asset('front/') }}/./img/count-logo-1.svg" alt="">
                            </div>
                            <div class="count-text">
                                <div class="count-number">
                                    <div class="count-digit">
                                        {{ $counter->partners }}
                                    </div>
                                    +
                                </div>
                                <div>
                                    emekdasliq
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Counter End-->
    <!--Teaching Start-->
    <section id="teching">
        <div class="container">
            <div class="row">
                <h2 class="head-text">
                    Tədris proqramları
                </h2>
                <div class="swiper mySwiper teaching-slider">
                    <div class="swiper-wrapper">
                        @foreach ($edu_programs as $e_pro)
                            <div class="swiper-slide">
                                <div class="teaching-card">
                                    <a href="#">
                                        <div style="background: #5068F2;" class="color-effect"></div>
                                        <img src="{{ Voyager::image($e_pro->image) }}" alt="">
                                        <div class="teach-text">
                                            <h4 class="teach-head-text">
                                                {{ $e_pro->getTranslatedAttribute('title', app()->getLocale(), 'az') }}
                                            </h4>
                                            <a href="" class="teach-button">{{ __('lang.etrafli') }}</a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next">
                        <img src="{{ asset('front/') }}/./img/nav-right.svg" alt="">
                    </div>
                    <div class="swiper-button-prev">
                        <img src="{{ asset('front/') }}/./img/nav-left.svg" alt="">
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <!--Teaching End-->
    <!--Hr Start-->
    <section id="hr">
        <div class="container">
            <div class="row">
                <h2 class="head-text">
                    HR həllər
                </h2>
                <div class="owl-carousel owl-theme hr-slider">
                    @foreach ($hr_heller as $hr_hell)
                        <div class="item">
                            <div class="hr-card">
                                <div class="box">
                                    <div class="front">
                                        <div class="center">
                                            <img src="{{ Voyager::image($hr_hell->image) }}">
                                            <h3>{{ $hr_hell->title }}</h3>
                                            <p>Lorem ipsum dolor sit amet</p>
                                            <p class="click-icon">
                                                <a href="#">
                                                    <img src="{{ asset('front/') }}/./img/nav-right.svg" alt="">
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="back">
                                        <div class="row">
                                            <img
                                                src="{{ Voyager::image($hr_hell->image) }}
                                        ">
                                            <h3>{{ $hr_hell->getTranslatedAttribute('title', app()->getLocale(), 'az') }}
                                            </h3>
                                        </div>
                                        <div class="row">
                                            <p>
                                                {{ $hr_hell->getTranslatedAttribute('desc', app()->getLocale(), 'az') }}
                                            </p>
                                            <div class="btn hr-btn">
                                                <a href="#">{{ __('lang.etrafli') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--Hr End-->
        <!--Partners Start-->
        <section id="hr">
            <div class="container">
                <div class="row">
                    <h2 class="head-text">
                        {{__('lang.partnyor')}}
                    </h2>
                    <div class="owl-carousel owl-theme partners-slider">
                        @foreach ($partners as $part)
                        <div class="item">
                            <a href="#">
                                <img src="{{ Voyager::image($part->img)}}" alt="">
                            </a>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
        <!--Partners End-->
    <!--Contact Start-->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="contact-head">
                        {{ __('lang.sualiniz_var') }}
                    </h2>
                    <p class="contact-body">
                        {{ __('lang.home_contact_text') }}
                    </p>
                    <form id="SubmitForm" class="contact-inputs">
                        @csrf
                        <div class="alert alert-success" id="success_msg" style="display: none;"></div>
                        <div class="alert alert-danger" id="error_msg" style="display: none;"></div>
                        <div class="alert alert-danger" id="errors_catch" style="display: none;"></div>

                        <input type="text" name="name" required class="contact-input text-input"
                            placeholder="{{ __('lang.ad') }}" id="InputName" required>



                        <input type="text" name="surname" required id="InputSurname" class="contact-input text-input"
                            placeholder="{{ __('lang.soyad') }}">


                        <input type="text" id="InputEmail"  required name="email" class="contact-input text-input"
                            placeholder="{{ __('lang.email') }}">


                        <input type="text" id="InputPhone" required name="phone" class="contact-input number-input"
                            placeholder="{{ __('lang.phone') }} - (055)-555-55-55 ">


                        <textarea id="InputMessage" required name="msj" id="" cols="30" rows="10" class="contact-textarea"
                            placeholder="{{ __('lang.mesaj') }}"></textarea>

                        <div class="btn contact-btn">
                            <button type="submit"><a>
                                    {{ __('lang.gonder') }}
                                </a></button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5">
                    <div class="contact-info">
                        <ul class="contact-phone">
                            <li>
                                <a href="tel:+994515883199">
                                    <img src="{{ asset('front/') }}/./img/contact-phone.svg" alt="">
                                    {{ $contact_info->phone_first }}
                                </a>
                            </li>
                            <li>
                                <a href="tel:+994515883199">
                                    <img src="{{ asset('front/') }}/./img/contact-phone.svg" alt="">
                                    {{ $contact_info->phone_second }}
                                </a>
                            </li>
                        </ul>
                        <p class="contact-location">
                            <img src="{{ asset('front/') }}/./img/contact-loc.svg" alt="">
                            {{ $contact_info->getTranslatedAttribute('adress', app()->getLocale(), 'az') }}
                        </p>
                        <div class="contact-mail">
                            <a href="mailTo:info@hrinstitute.az">
                                <img src="{{ asset('front/') }}/./img/contact-mail.svg" alt="">
                                {{ $contact_info->email }}
                            </a>
                        </div>
                    </div>
                    <div class="contact-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3038.9148231562776!2d49.869072315705516!3d40.38858036527435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d17de5e3d1d%3A0x2da2edf637232eb3!2sRusel%20Plaza!5e0!3m2!1str!2s!4v1660632020379!5m2!1str!2s"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact End-->
@endsection

@push('js')
    <script type="text/javascript">
        $('#SubmitForm').on('submit', function(e) {
            e.preventDefault();
            let name = $('#InputName').val();
            let surname = $('#InputSurname').val();
            let email = $('#InputEmail').val();
            let phone = $('#InputPhone').val();
            let msj = $('#InputMessage').val();
            $.ajax({
                url: "{{ route('contact_post') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    name: name,
                    surname: surname,
                    email: email,
                    phone: phone,
                    msj: msj,
                },
                success: function(response) {
                    if (response.status == 1) {
                        $("#success_msg").show();
                        $("#success_msg").text(response.message);
                        $('#InputName').val('');
                        $('#InputSurname').val('');
                        $('#InputEmail').val('');
                        $('#InputPhone').val('');
                        $('#InputMessage').val('');
                    }

                    if (response.status == 0) {
                        $("#error_msg").show();
                        $("#error_msg").text(response.message);
                    }
                }
            });
        });
    </script>
@endpush
