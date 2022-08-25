<!--Footer Start-->
  <footer>
    <div class="footer-border"></div>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <a href="#">
                        <h3 class="footer-head">
                            {{__('lang.haqqimizda')}}
                        </h3>
                    </a>
                    <ul class="footer-list">
                        <li class="footer-item">
                            <a href="{{route('about.'.app()->getLocale())}}">
                               {{__('lang.biz_kimik')}}
                            </a>
                        </li>
                        <li class="footer-item">
                            <a href="#">
                                Üzvlük
                            </a>
                        </li>
                        <li class="footer-item">
                            <a href="{{route('cooperation.'.app()->getLocale() )}}">
                                {{__('lang.beynelxalq_emekdasliq')}}
                            </a>
                        </li>
                    </ul>
                    <a href="#">
                        <h3 class="footer-head">
                            TƏDBİRLƏR
                        </h3>
                    </a>
                    <ul class="footer-list">
                        <li class="footer-item">
                            <a href="{{route('fin.'.app()->getLocale())}}">
                                Keçmiş Tədbirlər
                            </a>
                        </li>
                        <li class="footer-item">
                            <a href="{{route('fut.'.app()->getLocale())}}">
                                Qarşıdan Gələn Tədbirlər
                            </a>
                        </li>
                    </ul>
                    <a href="#">
                        <h3 class="footer-head">
                            {{__('lang.contact')}}
                        </h3>
                    </a>
                </div>
                <div class="col-lg-4">
                    <h3 class="footer-head">
                        {{__('lang.hr_heller')}}
                    </h3>
                    <ul class="footer-list">
                        @foreach ($hr_heller as $hr_hell)
                        <li class="footer-item">
                            <a href="{{route('hr.'.app()->getLocale(),$hr_hell->{'slug_'.app()->getLocale()}) }}">
                              {{ $hr_hell->getTranslatedAttribute('name',app()->getLocale(),'az') }}
                            </a>
                        </li>
                        @endforeach   
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h3 class="footer-head">
                        {{__('lang.sertifkasiya_proqramlari')}}
                    </h3>
                    <ul class="footer-list">
                        @foreach ($ser_programs as $ser_pro)
                        <li class="footer-item">
                            <a href="{{route('sertifkasiya.'.app()->getLocale(),$ser_pro->{'slug_'.app()->getLocale()}) }}">
                                {{$ser_pro->getTranslatedAttribute('name',app()->getLocale(),'az')}}
                            </a>
                        </li>
                        @endforeach     
                    </ul>
                </div>
                <div class="col-lg-2">
                    <h3 class="footer-head">
                        {{__('lang.tedris_program')}}
                    </h3>
                    <ul class="footer-list">
                        @foreach ($edu_programs as $e_prog)
                        <li class="footer-item">
                            <a href="{{route('tedris.'.app()->getLocale(),$e_prog->{'slug_'.app()->getLocale()}) }}">
                                {{$e_prog->getTranslatedAttribute('name',app()->getLocale(),'az')}}
                            </a>
                        </li>
                        @endforeach     
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-center">
        <div class="container">
            <div class="row">
                <div class="foot-logo">
                    <img src="{{asset('front/')}}/./img/foot-logo.svg" alt="">
                </div>
                <div class="foot-location">
                    <img src="{{asset('front/')}}/./img/foot-loc.svg" alt="">
                    <p>
                        {{ $contact_info->getTranslatedAttribute('adress',app()->getLocale(),'az') }}
                    </p>
                </div>
                <div class="foot-phone">
                    <a href="tel:{{ str_replace(' ','',$contact_info->phone_first) }}">
                        <img src="{{asset('front/')}}/./img/foot-phone.svg" alt="">
                       {{ $contact_info->phone_first }}
                    </a>
                </div>
                <div class="foot-social">
                    <a href="{{$contact_info->ln}}" target="_blank">
                        <img src="{{asset('front/')}}/./img/foot-linkedin.svg" alt="">
                    </a>
                    <a href="{{$contact_info->fb}}" target="_blank">
                        <img src="{{asset('front/')}}/./img/foot-face.svg" alt="">
                    </a>
                    <a href="{{$contact_info->inst}}" target="_blank">
                        <img src="{{asset('front/')}}/./img/foot-insta.svg" alt="">
                    </a>
                    <a href="{{$contact_info->tw}}" target="_blank">
                        <img src="{{asset('front/')}}/./img/foot-twit.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="foot-bottom-border"></div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p>
                @php
                    use Illuminate\Support\Carbon;
                @endphp
                    HR INSTITUTE © {{Carbon::now()->format('Y')}}. {{__('lang.muellif')}}
                </p>
            </div>
        </div>
    </div>
</footer>
<!--Footer End-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<script src="{{asset('front/')}}/./js/swiper.min.js"></script>
<script src="{{asset('front/')}}/./js/owl.carousel.min.js"></script>
<script src="{{asset('front/')}}/./js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"
        integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha512-NqYds8su6jivy1/WLoW8x1tZMRD7/1ZfhWG/jcRQLOzV1k1rIODCpMgoBnar5QXshKJGV7vi0LXLNXPoFsM5Zg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>

@stack('js')