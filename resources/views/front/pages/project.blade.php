@extends('front.layouts.master')

@section('lang')
<div class="lang">  
    @if (Request::segment(2)==='kecmis-tedbirler' || Request::segment(3)==='finished-events')
    <a href="{{ route(str_replace(app()->getLocale(), 'az', $current)) }}">AZ</a>
    <span></span>
    <a href="{{ route(str_replace(app()->getLocale(), 'en', $current)) }}">EN</a>   
    @endif

    @if (Request::segment(2)==='qarsidan-gelen-tedbirler' || Request::segment(3)==='up-coming-events' )
    <a href="{{ route(str_replace(app()->getLocale(), 'az', $current)) }}">AZ</a>
    <span></span>
    <a href="{{ route(str_replace(app()->getLocale(), 'en', $current)) }}">EN</a>   
    @endif

</div>
@endsection

@section('content')
    <!--projects Home Start-->
    <section id="about-home" class="projects-page">
        <img src="{{asset('front/img/projects-img.png')}}" alt="">
        <h1 class="pages-head-text">
           {{__('lang.tedbirler')}}
        </h1>
    </section>
    <!--Projects Home End-->
    <!--Projects Start-->
    <section id="projects">
        <div class="container">
            <div class="row">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{route('index.'.app()->getLocale() )}}">
                            {{__('lang.ana_sehife')}}  /
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        {{__('lang.tedbirler')}}
                    </li>
                </ul>
                
                <div class="select-date">
                    
                    <a class="{{ Request::segment(2) == 'qarsidan-gelen-tedbirler' || Request::segment(3)==='up-coming-events' ? 'active' : '' }}">
                        {{__('lang.yaxinlasan_tedbirler')}}
                    </a>
                    <a class="{{ Request::segment(2) == 'kecmis-tedbirler' || Request::segment(3)==='finished-events' ? 'active' : '' }}">
                        {{__('lang.kecmis_tedbirler')}}
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--Projects End-->
    <!--Projects all Start-->

    @foreach ($events_future as $key=>$e_fut)
    @if(route('fut.'.app()->getLocale()) )
    @if ($key%2==0)
    <section id="projects-all-1" class="projects-all events" style="{{ Request::segment('2') == 'qarsidan-gelen-tedbirler' || Request::segment(3)==='up-coming-events' ? '' : 'display:none' }}">
        <div class="container">
            <div class="row">
                <div class="projects-component">
                    <div class="col-lg-6">
                        <img src="{{Voyager::image($e_fut->thumbnail)}}">
                    </div>
                    <div class="col-lg-5">
                        <h2 class="projects-head">
                            {{ $e_fut->getTranslatedAttribute('title',app()->getLocale(),'az')}}
                        </h2>
                        <p class="projects-body">
                            {{$e_fut->getTranslatedAttribute('desc',app()->getLocale(),'az')}}
                        </p>
                        <div class="projects-btns">
                            <div class="btn">
                                <a href="{{route('future.'.app()->getLocale() ,$e_fut->{'slug_'.app()->getLocale()} )}}">
                                   {{__('lang.etrafli')}}
                                </a>
                            </div>
                            <div class="btn">
                                <a href="#">
                                    Müraciət et
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @else
    <section id="projects-all-2" class="projects-all events" style="{{ Request::segment(2) == 'qarsidan-gelen-tedbirler' || Request::segment(3)==='up-coming-events' ? '' : 'display:none' }}">
        <div class="container">
            <div class="row">
                <div class="projects-component">
                    <div class="col-lg-5">
                        <h2 class="projects-head">
                            {{$e_fut->getTranslatedAttribute('title',app()->getLocale(),'az')}}
                        </h2>
                        <p class="projects-body">
                            {{$e_fut->getTranslatedAttribute('desc',app()->getLocale(),'az')}}
                        </p>
                        <div class="projects-btns">
                            <div class="btn">
                                <a href="{{route('future.'.app()->getLocale() ,$e_fut->{'slug_'.app()->getLocale()} )}}">
                                    {{__('lang.etrafli')}}
                                </a>
                            </div>
                            <div class="btn">
                                <a href="#">
                                    Müraciət et
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{Voyager::image($e_fut->thumbnail)}}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    @endif

    @endforeach



    <!--Projects all End-->
    <!--Last Projects Start-->
   
    <section id="last-projects" class="last-projects events" style="{{ Request::segment(2) == 'kecmis-tedbirler' || Request::segment(3)==='finished-events' ? '' : 'display:none' }}">
        <div class="container">
            <div class="row">
                <div class="last-projects-cards">
                    @foreach ($events_finish as $e_fin)
                    <div class="last-project-card">
                        <a href="{{route('finish.'.app()->getLocale(),$e_fin->{'slug_'.app()->getLocale()})}}">
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
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--Last Projects End-->
@endsection