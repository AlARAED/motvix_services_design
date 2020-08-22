<div class="preloader-activate preloader-active open_tm_preloader">
    <div class="preloader-area-wrap">
        <div class="spinner d-flex justify-content-center align-items-center h-100">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
</div>


<!--====================  header area ====================-->
<div class="header-area header-sticky only-mobile-sticky">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header position-relative">
                    <!-- brand logo -->
                    <div class="header__logo top-logo">
                        <a href="/">


                            <img src="{{ asset('uploads/5efdc50c079f4.png')}}" class="img-fluid" alt="">
                        </a>
                    </div>

                    <div class="header-right flexible-image-slider-wrap">

                        <div class="header-right-inner" id="hidden-icon-wrapper">


                            <!-- Header Top Info -->
                            <div class="swiper-container header-top-info-slider-werap top-info-slider__container">
                                <div class="swiper-wrapper header-top-info-inner default-color">
                                    <div class="swiper-slide">
                                        <div class="info-item">
                                            <div class="info-icon">
                                                <span class="fa fa-phone"></span>
                                            </div>
                                            <div class="info-content">
                                                <h6 class="info-title">{{$setting->Mobile_no}}</h6>
                                                <div class="info-sub-title">{{$setting->email}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="info-item">
                                            <div class="info-icon">
                                                <span class="fa fa-map-marker" aria-hidden="true"></span>
                                            </div>
                                            <div class="info-content">
                                                <h6 class="info-title">GERMANY</h6>
                                                <div class="info-sub-title"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="info-item">
                                            <div class="info-icon">
                                                <span class="fa fa-clock"></span>
                                            </div>
                                            <div class="info-content">
                                                <h6 class="info-title">8:00AM - 6:00PM</h6>
                                                <div class="info-sub-title">Monday to Saturday</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="info-item">
                                            <div class="info-icon">
                                                <span class="fa fa-comment-o" aria-hidden="true"></span>
                                            </div>
                                            <div class="info-content">
                                                <h6 class="info-title">Online 24/7</h6>
                                                <div class="info-sub-title">{{$setting->Mobile_no}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Header Social Networks -->
                            <div class="header-social-networks style-icons">
                                <div class="inner">

                                    @if($setting->twitter!=null)

                                        <a class=" social-link hint--black hint--bottom-left" aria-label="Twitter"
                                           href="{{$setting->twitter}}" data-hover="Twitter" target="_blank">
                                            <i class="social-icon fab fa-twitter"></i>
                                        </a>
                                    @endif

                                    @if($setting->fb!=null)
                                        <a class=" social-link hint--black hint--bottom-left" aria-label="Facebook"
                                           href="{{$setting->fb}}" data-hover="Facebook" target="_blank">
                                            <i class="social-icon fab fa-facebook-f"></i>
                                        </a>

                                    @endif

                                    @if($setting->instegram!=null)
                                        <a class=" social-link hint--black hint--bottom-left" aria-label="Instagram"
                                           href="{{$setting->instegram}}" data-hover="Instagram" target="_blank">
                                            <i class="social-icon fab fa-instagram"></i>
                                        </a>

                                    @endif


                                    @if($setting->lin!=null)
                                        <a class=" social-link hint--black hint--bottom-left" aria-label="Linkedin"
                                           href="{{$setting->lin}}" data-hover="Linkedin" target="_blank">
                                            <i class="social-icon fab fa-linkedin"></i>
                                        </a>


                                    @endif
                                </div>
                            </div>

                        </div>
                        <!-- mobile menu -->
                        <div class="mobile-navigation-icon d-block d-xl-none" id="mobile-menu-trigger">
                            <i></i>
                        </div>
                        <!-- hidden icons menu -->
                        <div class="hidden-icons-menu d-block d-md-none" id="hidden-icon-trigger">
                            <a href="javascript:void(0)">
                                <i class="far fa-ellipsis-h-alt"></i>
                            </a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom-wrap bg-theme-default d-md-block d-none header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-bottom-inner">
                        <div class="header-bottom-left-wrap">
                            <!-- navigation menu -->
                            <div class="header__navigation d-none d-xl-block">
                                <nav class="navigation-menu navigation-menu--text_white">
                                    <ul>
                                        <li>
                                            <a href="/"><span>@lang('motiv.home')</span></a>

                                        </li>
                                        <li>
                                            <a href="{{url('Refrence')}}"><span>REFRENCES</span></a>

                                        </li>


                                        @foreach(\App\Models\Pages::where([['publish','1'] ,['position','1']])->get() as $item)

                                            <li class="  <?php
                                            if (\App\Models\cheldpage::where([['publish', '1'], ['page_id', $item->id]])->get()) {
                                                echo "has-children has-children--multilevel-submenu";
                                            } else {
                                                echo "";
                                            }


                                            ?>">
                                                <a href="{{ route('singel_page' , $item->url_category)  }}"><span>{{ $item->title_en }}</span></a>

                                                @if(\App\Models\cheldpage::where([['publish','1'] ,['page_id',$item->id]])->get() )

                                                    <ul class="submenu">

                                                        @foreach(\App\Models\cheldpage::where([['publish','1'] ,['page_id',$item->id]])->get() as $item)
                                                            <li class="has-children">
                                                                <a href="{{ route('singel' , $item->url_category)  }}"><span> {{ $item->title_en }}</span></a>

                                                            </li>

                                                        @endforeach

                                                    </ul>

                                                @endif
                                            </li>

                                        @endforeach


                                        <li class="has-children has-children--multilevel-submenu">
                                            <a href="/locale/ge" class="">
                                                <img class="ls-flag"
                                                     src="{{ asset('uploads/flag-germany.png') }}" width="30PX" alt="en"
                                                     title="English">
                                                <span class="wpml-ls-native">DEUTSCHE </span>
                                            </a>

                                            <ul class="submenu">
                                                <li class="">
                                                    <a href="/locale/en" class="">
                                                        <img class="ls-flag"
                                                             src="{{ asset('assets/images/flags/en.png')}}" alt="en"
                                                             title="EN"><span class="wpml-ls-native">ENGLISH</span>
                                                    </a>
                                                </li>


                                            </ul>


                                        </li>


                                    </ul>
                                </nav>


                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!--====================  End of header area  ====================-->






