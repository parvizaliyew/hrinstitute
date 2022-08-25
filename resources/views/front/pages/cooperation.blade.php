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
        <img src="{{asset('front/')}}/./img/hr-single.png" alt="">
        <h1 class="pages-head-text">
            {{__('lang.beynelxalq_emekdasliq')}}
        </h1>
    </section>
    <!--contact Home End-->
    <!--About1 Start-->
    @foreach ($cooperations as $key=>$coop)
        @if($key%2==0)
        <section id="about1" class="cooperation">
            <div class="container">
                <div class="row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">
                                {{__('lang.ana_sehife')}} /
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            {{__('lang.beynelxalq_emekdasliq')}}
                        </li>
                    </ul>
                    <div class="col-lg-6">
                        <h2 class="about-head">
                            {{$coop->getTranslatedAttribute('title',app()->getLocale(),'az')}}
                        </h2>
                        <p class="about-body">
                            {!!$coop->getTranslatedAttribute('desc',app()->getLocale(),'az')!!}
                        </p>
                        
                    </div>
                    <div class="col-lg-5">
                        <img src="{{Voyager::image($coop->certifkat)}}" alt="">
                    </div>
                </div>
            </div>
        </section>
        @else
        <section id="about2" class="cooperation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <img src="{{Voyager::image($coop->certifkat)}}" alt="">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="about-head">
                            {{$coop->getTranslatedAttribute('title',app()->getLocale(),'az')}}
                        </h2>
                        <p class="about-body">
                            {!!$coop->getTranslatedAttribute('desc',app()->getLocale(),'az')!!}
                        </p>
                        
                    </div>
                </div>
            </div>
        </section>
        @endif
    @endforeach

    <!--About1 End-->
    <!--About2 Start-->

   
@endsection
   