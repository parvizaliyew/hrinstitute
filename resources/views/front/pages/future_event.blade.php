@extends('front.layouts.master')

@php
  if (app()->getLocale()=='az' && Request::segment(1)==='tedbir' && Request::segment(2)==='qarsidan-gelen-tedbir'  ) {
     $variable=Request::segment(3);
  }
  if (app()->getLocale()=='en' && Request::segment(2)==='event' && Request::segment(3)==='up-coming-event'  ) {
     $variable=Request::segment(4);
  }
  $event=App\Models\Event::where('slug_az',$variable)->orWhere('slug_en',$variable)->first();
@endphp

@section('lang')
<div class="lang">  
   <a href="/tedbir/qarsidan-gelen-tedbir/{{$event->slug_az}}">AZ</a>
   <span></span>
   <a href="/en/event/up-coming-event/{{$event->slug_en}}">EN</a>
</div>
@endsection

@section('content')
       <!--Home Start-->
       <section id="projects-home">
        <img src="{{asset('front/')}}/./img/projects-img.png" alt="">
        <div class="container">
            <div class="row">
                <h1 class="pages-head-text">
                    BAKU INTERNATIONAL
                    HR FORUM
                </h1>
            </div>
        </div>
    </section>
    <!--Home End-->
    <!--Next Projects Start-->
    <section id="next-projects" class="next-projects">
        <div class="container">
            <div class="row">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">
                            Ana Səhifə /
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">
                            Tədbirlər /
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        BIHR forum
                    </li>
                </ul>
                <div class="col-lg-5" id="text">
                   <span> {!!$event_fut->getTranslatedAttribute('about_form',app()->getLocale(),'az')!!}</span>
                    <div class="projects-btns">
                        <div class="btn">
                            <a href="#">
                                Müraciət et
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="{{asset('front/')}}/./img/projects-1.png" alt="">
                    <div class="img-bg"></div>
                </div>
            </div>
        </div>
    </section>
    <section id="next-projects-2" class="next-projects">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <img src="{{asset('front/')}}/./img/projects-3.png" alt="">
                </div>
                <div class="col-lg-5" id="text">
                    <span> {!!$event_fut->getTranslatedAttribute('form_consept',app()->getLocale(),'az')!!}</span>
                    
                </div>
            </div>
        </div>
    </section>
    <!--Next Projects End-->
    <!--Table Start-->
    <section id="table">
        <div class="container">
            <div class="row">
                <div class="table">
                    <h2 class="projects-head">
                        Formun detalları
                    </h2>
                        {!!$event_fut->getTranslatedAttribute('form_detail',app()->getLocale(),'az')!!}
                </div>
                <div class="table-bottom"></div>
            </div>
        </div>
    </section>
    <!--Table End-->
@endsection