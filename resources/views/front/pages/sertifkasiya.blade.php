@extends('front.layouts.master')

@php
    if(app()->getLocale()==='az' && Request::segment(1)==='sertifikasiya-proqrami')
    {
        $var=Request::segment(2);
    }
    if(app()->getLocale()==='en' && Request::segment(2)==='certification-program')
    {
        $var=Request::segment(3);
    }
    $sertifkasiya=App\Models\Program::where('slug_az',$var)->orWhere('slug_en',$var)->first();
@endphp

@section('lang')
<div class="lang">
    <a href="/sertifikasiya-proqrami/{{$sertifkasiya->slug_az}}">AZ</a>
    <span></span>
    <a href="/en/certification-program/{{$sertifkasiya->slug_en}}">EN</a>
</div>
@endsection

@section('content')
     <!--contact Home Start-->
     <section id="about-home" class="projects-page">
        <img src="{{asset('front/')}}/./img/hr-single.png" alt="">
        <h1 class="pages-head-text">
            {{__('lang.sertifkasiya_proqramlari')}}
        </h1>
    </section>
    <!--contact Home End-->
    <!--Contact Start-->
    <section id="contact" class="hr-single">
        <div class="container">
            <div class="row">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">
                            {{__('lang.ana_sehife')}} /
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        {{__('lang.sertifkasiya_proqramlari')}} /
                    </li>
                    <li class="breadcrumb-item">
                        {{$ser_pro->getTranslatedAttribute('name',app()->getLocale(),'az')}}
                    </li>
                </ul>
                <div class="contact">
                    <div class="col-lg-5">
                        <h1 class="single-head">
                            {{$ser_pro->getTranslatedAttribute('title',app()->getLocale(),'az')}}
                        </h1>
                        <p class="single-body">
                            {!!$ser_pro->getTranslatedAttribute('desc',app()->getLocale(),'az')!!}
                        </p>
                        
                    </div>
                    <div class="col-lg-6">
                        <h2 class="contact-head">
                            {{__('lang.muraciet_edin')}}
                        </h2>
                        <form action="{{route('form_post')}}" method="POST" class="contact-inputs">
                            @csrf
                        @if(Session::has('success'))
                            <div class="alert alert-success">{{ Session::get('success')}}</div>
                        @endif

                            <input type="text" class="contact-input text-input"  name="name" placeholder="{{__('lang.ad')}}">
                        @error('name')
                            <span class="error">{{ $message }}</span>
                        @enderror

                            <input type="text" class="contact-input text-input" name="surname" placeholder="{{__('lang.soyad')}}">
                        @error('surname')
                            <span class="error">{{ $message }}</span>
                        @enderror

                            <input type="text" class="contact-input text-input"  name="email" placeholder="{{__('lang.email')}}">
                        @error('email')
                            <span class="error">{{ $message }}</span>
                        @enderror

                            <input type="text" name="phone" class="contact-input number-input"
                                placeholder="{{__('lang.phone')}} - (055)-555-55-55 ">
                        @error('phone')
                                <span  class="error">{{ $message }}</span>
                        @enderror
    
                            <select name="apply_type" id="hr-select">
                                @foreach ($ser_programs as $ser_prog)
                                <option value="{{$ser_prog->getTranslatedAttribute('name',app()->getLocale(),'az')}}" @if($ser_pro->id===$ser_prog->id) selected @endif>

                                    {{$ser_prog->getTranslatedAttribute('name',app()->getLocale(),'az')}}</option> 
                                @endforeach
                               
                            </select>
                            <textarea name="msj" id="" cols="30" rows="10" class="contact-textarea"
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