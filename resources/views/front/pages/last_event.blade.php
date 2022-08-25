@extends('front.layouts.master')

@php
  if (app()->getLocale()=='az' && Request::segment(1)==='tedbir' && Request::segment(2)==='kecmis-tedbir'  ) {
     $variable=Request::segment(3);
  }
  if (app()->getLocale()=='en' && Request::segment(2)==='event' && Request::segment(3)==='finished-event'  ) {
     $variable=Request::segment(4);
  }
  $event=App\Models\Event::where('slug_az',$variable)->orWhere('slug_en',$variable)->first();
@endphp
@section('lang')
<div class="lang">  
   <a href="/tedbir/kecmis-tedbir/{{$event->slug_az}}">AZ</a>
   <span></span>
   <a href="/en/event/finished-event/{{$event->slug_en}}">EN</a>
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
                <div class="col-lg-5" id="text" >
                    <span> {!!$event_fin->about_form!!}</span>
                </div>
                <div class="col-lg-5">
                    <img src="{{Voyager::image($event_fin->about_image)}}" alt="">
                    <div class="img-bg"></div>
                </div>
            </div>
        </div>
    </section>
    <section id="next-projects-2" class="next-projects">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <img src="{{Voyager::image($event_fin->form_image)}}" alt="">
                </div>
                <div class="col-lg-5">
                    <span> {!!$event_fin->getTranslatedAttribute('form_consept',app()->getLocale(),'az')!!}</span>
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
                    {!!$event_fin->getTranslatedAttribute('form_detail',app()->getLocale(),'az')!!}
                </div>
                <div class="table-bottom"></div>
            </div>
        </div>
    </section>
    <!--Table End-->
    <!--Galery Start-->
    <section id="galery">
        <div class="container">
            <div class="row">
                <h2 class="head-text">
                    Qalareya
                </h2>
                <div class="gallery-cards">
                    <div class="gallery-column">
                        @foreach (json_decode($event_fin->images) as $key => $image)
                            
                            @if($key < 2)
                                <a href="{{ Voyager::image($image) }}" data-fancybox="group" data-caption="This image has a caption 1">
                                    <img src="{{ Voyager::image($image) }}" />
                                </a>
                            @endif
                        @endforeach
                    </div>
                    <div class="gallery-column">
                        @foreach (json_decode($event_fin->images) as $key => $image)
                            
                            @if($key >=2 && $key<4 )
                                <a href="{{ Voyager::image($image) }}" data-fancybox="group" data-caption="This image has a caption 1">
                                    <img src="{{ Voyager::image($image) }}" />
                                </a>
                            @endif
                        @endforeach
                    </div>
                    <div class="gallery-column">
                        @foreach (json_decode($event_fin->images) as $key => $image)
                            
                            @if($key >= 4 && $key < count(json_decode($event_fin->images)))
                                <a href="{{ Voyager::image($image) }}" data-fancybox="group" data-caption="This image has a caption 1">
                                    <img src="{{ Voyager::image($image) }}" />
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Galery End-->
    <!--Slider Start-->
    <section id="certificate">
        <div class="container">
            <div class="row">
                <h2 class="head-text">
                    Digər tədbirlər
                </h2>
                <div class="owl-carousel owl-theme certificate-cards">
                    @foreach ($events_finish as $e_fin)
                    @if($e_fin!=$event_fin)
                    <div class="item">
                        <div class="last-project-card">
                            <a href="#">
                                <div class="last-card-img">
                                    <img src="{{Voyager::image($e_fin->thumbnail)}}" alt="">
                                </div>
                                <div class="last-card-body">
                                    <div class="last-date">
                                        <span class="year">
                                            {{ \Carbon\Carbon::parse($e_fin->date)->format('Y')}}
                                        </span>
                                        <hr>
                                        <span class="hour">
                                            {{ \Carbon\Carbon::parse($e_fin->date)->format('m.d')}}
                                        </span>
                                    </div>
                                    <div class="last-text">
                                        <h3 class="last-head-text">
                                            {{ $e_fin->getTranslatedAttribute('title',app()->getLocale(),'az')}}
                                        </h3>
                                        <p class="last-body-text">
                                            {{ $e_fin->getTranslatedAttribute('desc',app()->getLocale(),'az')}} 
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--Slider End-->
  @endsection
  