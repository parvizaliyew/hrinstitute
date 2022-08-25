@extends('front.layouts.master')


@section('lang')
<div class="lang">
    <a href="{{ route(str_replace(app()->getLocale(), 'az', $current)) }}">AZ</a>
    <span></span>
    <a href="{{ route(str_replace(app()->getLocale(), 'en', $current)) }}">EN</a>
</div>
@endsection



@section('content')

    <!--Header End-->
    <!--About Home Start-->
    <section id="about-home">
        <img src="{{asset('front/')}}/./img/about-home.png" alt="">
        <h1 class="pages-head-text">
           {{__('lang.biz_kimik')}}
        </h1>
    </section>
    <!--About Home End-->
    <!--About1 Start-->
    <section id="about1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h2 class="about-head">
                        {{__('lang.biz_kimik')}}
                    </h2>
                    <hr class="about-hr"><br><br>
                    <p class="about-body">
                        {{__('lang.biz_kimik_text1')}}
                    </p>
                    <p class="about-body">
                        {{__('lang.biz_kimik_text2')}}
                    </p>
                    <p class="about-body">
                        {{__('lang.biz_kimik_text3')}}
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="img-1 active">
                        <img src="{{asset('front/')}}/./img/about-img1.png" alt="">
                    </div>
                    <div class="img-2">
                        <img src="{{asset('front/')}}/./img/about-img-2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About1 End-->
    <!--About2 Start-->
    <section id="about2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{asset('front/')}}/./img/about2.png" alt="">
                </div>
                <div class="col-lg-5">
                    <h2 class="about-head">
                        {{__('lang.missiyamiz')}}
                    </h2>
                    <p class="about-body">
                        {{__('lang.missiya_text1')}}
                    </p>
                    <p class="about-body">
                        {{__('lang.missiya_text2')}}
                    </p>
                    <p class="about-body">
                        {{__('lang.missiya_text3')}}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--About2 End-->
    <!--Team Start-->
    <section id="team">
        <div class="container">
            <div class="row">
                <h2 class="head-text">
                    {{__('lang.komandamiz')}}
                </h2>
                <div class="owl-carousel owl-theme team-slider">
                    @foreach ($teams as $team)

                    <div class="item">
                        <div class="team-card">
                            <a href="{{$team->fb}}" target="_blank" class="team-icon icon-right">
                                <img src="{{asset('front/')}}/./img/team-facebook.svg" alt="">
                            </a>
                            <a href="{{$team->ln}}" target="_blank" class="team-icon icon-left">
                                <img src="{{asset('front/')}}/./img/team-linkedin.svg" alt="">
                            </a>
                            <a href="">
                                <div class="team-hover-left" style="background: {{$team->background}}" ></div>
                                <div class="team-hover-right" style="background: {{$team->background}}" ></div>
                                <img src="{{Voyager::image($team->image)}}" alt="">
                                <h3 class="team-head">
                                    {{$team->name}}
                                </h3>
                                <p class="team-body">
                                    {{$team->mission}}
                                </p>
                            </a>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--Team End-->
    <!--Comment Start-->
    <section id="comment">
        <div class="container">
            <div class="row">
                <div class="comment-bg"></div>
                <div class="owl-carousel owl-theme comment-slider">
                    @foreach ($reviews as $rw)
                    <div class="item comment-card">
                        <div class="card-color"></div>
                        <img src="{{Voyager::image($rw->image)}}" alt="">
                        <div class="transparent">
                            <p class="comment-icon">
                                <img src="{{asset('front/')}}/./img/comment-icon.png" alt="">
                            </p>
                            <p class="comment-text">
                                {{$rw->review}}
                            </p>
                            <h3 class="comment-head">
                                {{$rw->name}}
                            </h3>
                            <p class="comment-work">
                                {{$rw->mission}}
                            </p>
                        </div>
                    </div>
                    @endforeach
                  
                </div>
            </div>
        </div>
    </section>
    <!--Comment End-->
     
@endsection