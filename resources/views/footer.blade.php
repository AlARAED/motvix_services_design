<!--====================  End of footer area  ====================-->


<div class="footer-area-wrapper reveal-footer " style="background: #101010;color:white;
">
    <div class="footer-area section-space--ptb_80">
        <div class="container">
            <div class="row footer-widget-wrapper">
                <div class="col-lg-4 col-md-6 col-sm-6 footer-widget" style="float:right!important;">
                    <div class="footer-widget__logo mb-30">
                        <img src="{{ asset('uploads/' .$setting->image) }}" class="img-fluid" alt="">
                    </div>
                    <ul class="footer-widget__list">
                        <li>@if(App::getLocale()=='en')

                                {{$setting->about_en}}
                            @else
                                {{$setting->about_ge}}

                            @endif
                        </li>

                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                    <h6 class="footer-widget__title mb-20" style="color:white;
">@lang('motiv.clients')</h6>
                    <ul class="footer-widget__list">
                        <li><a href="/" class="hover-style-link">  @lang('motiv.home')</a></li>

                        <li><a href="brandspage" class="hover-style-link">@lang('motiv.clients_brands')</a></li>
                        <li><a href="brandspage" class="hover-style-link">@lang('motiv.clients_brands')</a></li>


                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                    <h6 class="footer-widget__title mb-20"
                        style="background: #101010;color:white;
">@lang('motiv.Quick_links')</h6>
                    <ul class="footer-widget__list">
                        <li><a href="/page/privacy" class="hover-style-link"> @lang('motiv.PRIVACY')</a></li>


                        <li><a href="/page/TERMS" class="hover-style-link">@lang('motiv.TERMS_OF_SERVICE')</a></li>

                    </ul>
                </div>


                <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                    <h6 class="footer-widget__title mb-20"
                        style="background: #101010;color:white;">@lang('motiv.about_us') </h6>
                    <ul class="footer-widget__list">

                        <li><a href="contactus" class="hover-style-link">@lang('motiv.contact_us')   </a></li>

                        <li><a href="/page/IMPRINT" class="hover-style-link">@lang('motiv.IMPRINT')  </a></li>


                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="footer-copyright-area section-space--pb_30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-left">
                    <span class="copyright-text">&copy; 2020 Motvix. <a>All Rights Reserved.</a></span>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <ul class="list ht-social-networks solid-rounded-icon">

                        @if($setting->twitter!=null)
                            <li class="item">
                                <a href="{{$setting->twitter}}" target="_blank" aria-label="Twitter"
                                   class="social-link hint--bounce hint--top hint--primary">
                                    <i class="fab fa-twitter link-icon"></i>
                                </a>
                            </li>
                        @endif


                        @if($setting->fb!=null)
                            <li class="item">
                                <a href="{{$setting->fb}}" target="_blank" aria-label="Facebook"
                                   class="social-link hint--bounce hint--top hint--primary">
                                    <i class="fab fa-facebook-f link-icon"></i>
                                </a>
                            </li>
                        @endif

                        @if($setting->instegram!=null)
                            <li class="item">
                                <a href="{{$setting->instegram}}" target="_blank" aria-label="Instagram"
                                   class="social-link hint--bounce hint--top hint--primary">
                                    <i class="fab fa-instagram link-icon"></i>
                                </a>
                            </li>
                        @endif

                        @if($setting->lin!=null)
                            <li class="item">
                                <a href="{{$setting->lin}}" target="_blank" aria-label="Linkedin"
                                   class="social-link hint--bounce hint--top hint--primary">
                                    <i class="fab fa-linkedin link-icon"></i>
                                </a>
                            </li>

                        @endif


                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<!--====================  scroll top ====================-->
<a href="#" class="scroll-top" id="scroll-top">
    <i class="arrow-top fal fa-long-arrow-up"></i>
    <i class="arrow-bottom fal fa-long-arrow-up"></i>
</a>
<!--====================  End of scroll top  ====================-->


<!--====================  mobile menu overlay ====================-->
<div class="mobile-menu-overlay" id="mobile-menu-overlay">
    <div class="mobile-menu-overlay__inner">

        <div class="mobile-menu-overlay__body">
            <nav class="offcanvas-navigation">
                <ul>
                    <li class="has-children">
                        <a href="/">@lang('motiv.home')</a>

                    </li>
                    <li>
                        <a href="{{url('Refrence')}}"><span>REFRENCES</span></a>

                    </li>

                    @foreach(\App\Models\Pages::where([['publish','1'] ,['position','1']])->get() as $item)


                        <li class="<?php
                        if (\App\Models\cheldpage::where([['publish', '1'], ['page_id', $item->id]])->get()) {
                            echo "has-children";
                        } else {
                            echo "";
                        }


                        ?>">
                            <a href="{{ route('singel_page' , $item->url_category)  }}">
                                @if(App::getLocale()=='en')
                                    {{ $item->title_en }}
                                @else
                                    {{ $item->title_ge }}
                                @endif</a>
                            @if(\App\Models\cheldpage::where([['publish','1'] ,['page_id',$item->id]])->get() )


                                <ul class="sub-menu">

                                    @foreach(\App\Models\cheldpage::where([['publish','1'] ,['page_id',$item->id]])->get() as $item)

                                        <li class="has-children">
                                            <a href="{{ route('singel' , $item->url_category)  }}"><span>
                                              @if(App::getLocale()=='en')
                                                        {{ $item->title_en }}
                                                    @else
                                                        {{ $item->title_ge }}
                                                    @endif
                                </span></a>

                                        </li>

                                    @endforeach
                                </ul>

                            @endif
                        </li>
                    @endforeach

                    <li class="has-children">
                        <a href="/locale/ge"><img src="{{ asset('uploads/flag-germany.png') }}"
                                                  width="20PX"/>Deutsche</a>
                        <ul class="sub-menu">

                            <li><a href="/locale/en"><span><img src="{{ asset('uploads/flag-eng.png') }}" width="20PX">English</span></a>
                            </li>

                        </ul>
                    </li>


                </ul>


                </ul>
            </nav>
        </div>
    </div>
</div>
<!--====================  End of mobile menu overlay  ====================-->

