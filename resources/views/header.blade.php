<div class="header-area header-area--absolute">

    <div class="header-top-bar-info border-bottom d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-bar-wrap">
                        <div class="top-bar-left">
                            <div class="top-bar-text text-white"><a href="#" class="font-medium display-inline"></a>


                                @if(App::getLocale()=='en')
                                    {{$setting->shortdesc_en}}
                                @else
                                    {{$setting->shortdesc_ge}}
                                @endif
                            </div>
                        </div>
                        <div class="top-bar-right">
                            <ul class="top-bar-info">
                                <li class="info-item">
                                    <a href="tel:01228899900" class="info-link text-white">
                                        <i class="info-icon fa fa-phone"></i>
                                        <span class="info-text"><strong>{{$setting->Mobile_no}}</strong></span>
                                    </a>
                                </li>
                                <li class="info-item text-white">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span class="info-text">{{$setting->email}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom-wrap header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header position-relative">
                        <!-- brand logo -->
                        <div class="header__logo">
                            <a href="/">
                                <img src="{{ asset('uploads/' .$setting->image) }}" class="img-fluid light-logo" alt="">
                                <img src="{{ asset('uploads/5efdc50c079f4.png')}}" class="img-fluid dark-logo" alt="">
                            </a>
                        </div>

                        <div class="header-right">
                            <!-- navigation menu -->
                            <div class="header__navigation menu-style-four d-none d-xl-block">
                                <nav class="navigation-menu">
                                    <ul>
                                        <li><a href="/"><span> 
                                            @lang('motiv.home')</span></a></li>
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

                                                <a href="{{ route('singel_page' , $item->url_category)  }}"><span>  
                                @if(App::getLocale()=='en')
                                                            {{ $item->title_en }}
                                                        @else
                                                            {{ $item->title_ge }}
                                                        @endif
                                </span></a>

                                                @if(\App\Models\cheldpage::where([['publish','1'] ,['page_id',$item->id]])->get() )


                                                    <ul class="submenu">

                                                        @foreach(\App\Models\cheldpage::where([['publish','1'] ,['page_id',$item->id]])->get() as $item)
                                                            <li class="has-children">
                                                                <a href="{{ route('singel' , $item->url_category)  }}"><span>   
                         @if(App::getLocale()=='en')
                                                                            {{ $item->title_en }}
                                                                        @else
                                                                            {{ $item->title_ge }}
                                                                        @endif</span></a>

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
                                                <span class="wpml-ls-native"> </span>
                                            </a>

                                            <ul class="submenu">
                                                <li class="">
                                                    <a href="/locale/en" class="">
                                                        <img class="ls-flag" src="assets/images/flags/en.png" alt="en"
                                                             title="EN"><span class="wpml-ls-native"></span>
                                                    </a>
                                                </li>


                                            </ul>

                                        </li>


                                    </ul>
                                </nav>
                            </div>


                            <!-- mobile menu -->
                            <div class="mobile-navigation-icon white-md-icon d-block d-xl-none"
                                 id="mobile-menu-trigger">
                                <i></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
