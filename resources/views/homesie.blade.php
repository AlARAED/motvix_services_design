@extends('index')
@section('content')

    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('sweetalert::alert')

    <div class="site-wrapper-reveal">
        <!--============ Resolutions Hero Start ============-->
        <div class="service-hero-wrapper resolutions-hero-space resolutions-hero-bg position-relative"
             style=" background-image: url({{ asset('uploads/' .$Slider->image) }})">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 ml-auto mr-auto">
                        <div class="service-hero-wrap wow move-up">
                            <div class="service-hero-text text-center">
                                <h3 class="text-white">   @if(App::getLocale()=='en')
                                        {{$Slider->addess1_en}}
                                    @else
                                        {{$Slider->addess1_ge}}

                                    @endif

                                </h3>
                                <h1 class="font-weight--reguler text-white mb-30">
                                    @if(App::getLocale()=='en')
                                        {{$Slider->addess2_en}}
                                    @else
                                        {{$Slider->addess2_ge}}
                                    @endif
                                </h1>
                                <p class="text-white">
                                    @if(App::getLocale()=='en')
                                        {{$Slider->addess3_en}}
                                    @else
                                        {{$Slider->addess3_ge}}
                                    @endif

                                </p>

                                <!--  <div class="hero-button-group section-space--mt_50">
                                     <a href="#" class="ht-btn ht-btn-md">Free consultation</a>
                                     <a href="#" class="ht-btn ht-btn-md btn--white"><span class="btn-icon mr-2"><i class="fa fa-play"></i></span> How we work</a>
                                 </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row-separator center_curve_alt bottom">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" preserveAspectRatio="none" viewBox="0 0 100 100">
                    <path d="M 0 0 L0 100 L100 100 L100 0 Q 50 200 0 0"></path>
                </svg>
            </div>
        </div>
        <!--============ Resolutions Hero End ============-->


        <!--===========  feature-images-wrapper  Start =============-->
        <div class="feature-images-wrapper bg-gray">
            <div class="container">

                <div class="row">
                    <div class="col-12">
                        <div class="feature-images__five resolutions-hero-bottom">
                            <div class="row">

                                <div class="col-lg-4 col-md-6 wow move-up">
                                    <!-- ht-box-icon Start -->
                                    <div class="ht-box-images style-05">
                                        <div class="image-box-wrap">
                                            <div class="box-image">
                                                <div class="default-image">
                                                    <img class="img-fulid"
                                                         src="assets/images/icons/mitech-home-resolutions-box-image-01-100x98.png"
                                                         alt="">
                                                </div>
                                                <div class="hover-images">
                                                    <img class="img-fulid"
                                                         src="assets/images/icons/mitech-home-resolutions-box-image-01-hover-100x98.png"
                                                         alt="">
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h5 class="heading">
                                                    @if(App::getLocale()=='en')
                                                        {{$Service1->addess1_en}}
                                                    @else
                                                        {{$Service1->addess1_ge}}

                                                    @endif
                                                </h5>
                                                <div class="text">
                                                    @if(App::getLocale()=='en')
                                                        {{$Service1->content_en}}
                                                    @else
                                                        {{$Service1->content_ge}}

                                                    @endif
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- ht-box-icon End -->
                                </div>

                                <div class="col-lg-4 col-md-6 wow move-up">
                                    <!-- ht-box-icon Start -->
                                    <div class="ht-box-images style-05">
                                        <div class="image-box-wrap">
                                            <div class="box-image">
                                                <div class="default-image">
                                                    <img class="img-fulid"
                                                         src="assets/images/icons/mitech-home-resolutions-box-image-02-100x98.png"
                                                         alt="">
                                                </div>
                                                <div class="hover-images">
                                                    <img class="img-fulid"
                                                         src="assets/images/icons/mitech-home-resolutions-box-image-02-hover-100x98.png"
                                                         alt="">
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h5 class="heading"> @if(App::getLocale()=='en')
                                                        {{$Service2->addess1_en}}
                                                    @else
                                                        {{$Service2->addess1_ge}}

                                                    @endif</h5>
                                                <div class="text"> @if(App::getLocale()=='en')
                                                        {{$Service2->content_en}}
                                                    @else
                                                        {{$Service2->content_ge}}

                                                    @endif
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- ht-box-icon End -->
                                </div>

                                <div class="col-lg-4 col-md-6 wow move-up">
                                    <!-- ht-box-icon Start -->
                                    <div class="ht-box-images style-05">
                                        <div class="image-box-wrap">
                                            <div class="box-image">
                                                <div class="default-image">
                                                    <img class="img-fulid"
                                                         src="assets/images/icons/mitech-home-resolutions-box-image-03-100x98.png"
                                                         alt="">
                                                </div>
                                                <div class="hover-images">
                                                    <img class="img-fulid"
                                                         src="assets/images/icons/mitech-home-resolutions-box-image-03-hover-100x98.png"
                                                         alt="">
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h5 class="heading">
                                                    @if(App::getLocale()=='en')
                                                        {{$Service3->addess1_en}}
                                                    @else
                                                        {{$Service3->addess1_ge}}

                                                    @endif</h5>
                                                <div class="text">
                                                    @if(App::getLocale()=='en')
                                                        {{$Service3->content_en}}
                                                    @else
                                                        {{$Service3->content_ge}}

                                                    @endif
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- ht-box-icon End -->
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!--===========  feature-images-wrapper  End =============-->


        <div class="site-wrapper-reveal section-space--pt__120">


            <div class="our-company-history section-space--ptb_100">
                <div class="container-fluid">
                    <div class="grid-wrapper">
                        <div class="line line-1"></div>
                        <div class="line line-2"></div>
                        <div class="line line-3"></div>
                        <div class="line line-4"></div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="faq-custom-col">
                                <div class="section-title-wrap">
                                    <h6 class="section-sub-title mb-20">Our company</h6>
                                    <h3 class="heading"> @if(App::getLocale()=='en')
                                            {{$AboutSection->addess1_en}}
                                        @else
                                            {{$AboutSection->addess1_ge}}

                                        @endif</h3>

                                    <p class="text mt-30"> @if(App::getLocale()=='en')
                                            {{$AboutSection->content_en}}
                                        @else
                                            {{$AboutSection->content_ge}}

                                        @endif</p>

                                    <!-- <div class="inner-button-box section-space--mt_60">
                                        <a href="#" class="ht-btn ht-btn-md">Find out more</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="rv-video-section">

                                <div class="ht-banner-01 ">
                                    <img class="img-fluid border-radus-5 animation_images one wow fadeInDown"
                                         src="{{ asset('uploads/' .$AboutSection->image1) }}" alt="">
                                </div>

                                <div class="ht-banner-02">
                                    <img class="img-fluid border-radus-5 animation_images two wow fadeInDown"
                                         src="{{ asset('uploads/' .$AboutSection->image2) }}" alt="">
                                </div>

                                <div class="main-video-box video-popup">
                                    <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link  mt-30">
                                        <div class="single-popup-wrap">
                                            <img class="img-fluid border-radus-5"
                                                 src="{{ asset('uploads/' .$AboutSection->image3) }}" alt="">
                                            <div class="ht-popup-video video-button">
                                                <div class="video-mark">
                                                    <div class="wave-pulse wave-pulse-1"></div>
                                                    <div class="wave-pulse wave-pulse-2"></div>
                                                </div>
                                                <div class="video-button__two">
                                                    <div class="video-play">
                                                        <span class="video-play-icon"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                                <div class="ht-banner-03">
                                    <img class="img-fluid border-radus-5 animation_images three wow fadeInDown"
                                         src="{{ asset('uploads/' .$AboutSection->image4) }}" alt="">
                                </div>

                                <div class="ht-banner-04">
                                    <img class="img-fluid border-radus-5 animation_images four wow fadeInDown"
                                         src="{{ asset('uploads/' .$AboutSection->image5) }}" alt="">
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="feature-icon-wrapper bg-gray section-space--ptb_100">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title-wrap text-center section-space--mb_40">
                                <h3 class="heading">@lang('motiv.Services_We_Deliver')<br>
                                    @lang('motiv.we_provide')     @lang('motiv.truly_prominent_IT_solutions.')</span>
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="feature-list__two">
                                <div class="row">

                                    @foreach($Features  as $Feature)


                                        <div class="col-lg-4 col-md-6 wow move-up">
                                            <div class="ht-box-icon style-02 single-svg-icon-box">
                                                <div class="icon-box-wrap">
                                                    <div class="icon">
                                                        <div class="svg-icon" id="svg-{{$Feature->id}}"
                                                             data-svg-icon="{{$Feature->link}}"></div>
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="heading">
                                                            @if(App::getLocale()=='en')
                                                                {{$Feature->name_en}}
                                                            @else
                                                                {{$Feature->name_ge}}

                                                            @endif </h5>
                                                        <div class="text">
                                                            @if(App::getLocale()=='en')
                                                                {{$Feature->content_en}}
                                                            @else
                                                                {{$Feature->content_ge}}

                                                            @endif
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach


                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>


            <div class="projects-wrapper section-space--pb_70 section-space--pt_100 projects-masonary-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title-wrap text-center section-space--mb_40">
                                <h3>@lang('motiv.Our_projects')   @lang('motiv.make_us_proud')</h3>
                            </div>

                            <div class="messonry-button text-center  section-space--mb_60">

                                <button data-filter="*" class="is-checked all">
                                    <span class="filter-text">All</span></button>

                                @foreach($Category  as $Categor)


                                    <button data-filter=".cat--{{$Categor->id}}" class="cat" data="{{$Categor->id}}">
                            <span class="filter-text cat">
                             @if(App::getLocale()=='en')
                                    {{$Categor->name_en}}
                                @else
                                    {{$Categor->name_ge}}
                                @endif
                            </span>
                                        <span class="filter-counter">{{count($Categor->refrences)}}</span>
                                    </button>



                                @endforeach


                            </div>

                        </div>
                    </div>

                    <div class="projects-case-wrap">
                        <div class="row mesonry-list">

                            <!--<div class="resizer"></div>-->


                            @foreach($refrences  as $refrence->take(6))

                                <div class="col-lg-4 col-md-6 cat--{{$refrence->category_id}}">
                                    <!-- Projects Wrap Start -->
                                    @if($refrence->frame_tab == 2)
                                        <a href="#" class="projects-wrap style-01"
                                           onclick="window.open('{{$refrence->link}}', '_blank')">

                                            <div class="projects-image-box">
                                                <div class="projects-image">


                                                    <img class="img-fluid"
                                                         src="{{ asset('uploads/' .$refrence->image) }}"
                                                         alt="{{$refrence->link}}" style="
    height: 300px !important; 
">


                                                </div>
                                                <div class="content">
                                                    <h6 class="heading"> @if(App::getLocale()=='en')
                                                            {{$refrence->name_en}}
                                                        @else
                                                            {{$refrence->name_ge}}

                                                        @endif</h6>

                                                    <div class="box-projects-arrow">
                                                        <span class="button-text">@lang('motiv.view')</span>
                                                        <i class="fa fa-long-arrow-right ml-1"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- Projects Wrap End -->



                                    @else
                                        <a href="#" class="projects-wrap style-01" data-fancybox data-type="iframe"
                                           data-src="{{$refrence->link}}">
                                            <div class="projects-image-box">
                                                <div class="projects-image">


                                                    <img class="img-fluid"
                                                         src="{{ asset('uploads/' .$refrence->image) }}"
                                                         alt="{{$refrence->link}}" style="
    height: 300px !important; 
">


                                                </div>
                                                <div class="content">
                                                    <h6 class="heading"> @if(App::getLocale()=='en')
                                                            {{$refrence->name_en}}
                                                        @else
                                                            {{$refrence->name_ge}}

                                                        @endif</h6>

                                                    <div class="box-projects-arrow">
                                                        <span class="button-text"></span>@lang('motiv.view')</span>
                                                        <i class="fa fa-long-arrow-right ml-1"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    @endif


                                </div>
                            @endforeach


                        </div>
                    </div>


                    <div class="button_cont" align="center">
                        <a class="example_a" href="{{url('Refrence')}}" target="_blank"
                           rel="nofollow noopener">@lang('motiv.VIEW_MORE')</a></div>

                </div>


            </div>


            <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption">


                </div>
            </div>


            <br><br>


            <div class="contact-us-area  section-space--ptb_100" style="background-color: #1f283e;">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-4">
                            <div class="contact-info sytle-one service-contact text-left">

                                <div class="contact-info-title-wrap text-center">
                                    <h3 class="heading text-white mb-10">4.9/5.0</h3>
                                    <div class="ht-star-rating lg-style">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <p class="sub-text">{{$setting->clients}} @lang('motiv.clients')</p>
                                </div>

                                <div class="contact-list-item">
                                    <a href="tel:190068668" class="single-contact-list">
                                        <div class="content-wrap">
                                            <div class="content">
                                                <div class="icon">
                                                    <span class="fal fa-phone"></span>
                                                </div>
                                                <div class="main-content">
                                                    <h6 class="heading">@lang('motiv.Call_for_advice_now!')</h6>
                                                    <div class="text">{{$setting->Mobile_no}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="mailto:hello@mitech.com" class="single-contact-list">
                                        <div class="content-wrap">
                                            <div class="content">
                                                <div class="icon">
                                                    <span class="fal fa-envelope"></span>
                                                </div>
                                                <div class="main-content">
                                                    <h6 class="heading">Say hello</h6>
                                                    <div class="text">{{$setting->email}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-7 ml-auto">
                            <div class="contact-form-service-wrap">
                                <div class="contact-title text-center section-space--mb_40">
                                    <h3 class="mb-10">@lang('motiv.Need_a_hand?')</h3>
                                </div>

                            <!--{!!  Form::open(['url' => ['admin/contact'] ,'method' => 'POST','files' => true]) !!}-->
                                <form action="javascript:void(0)" id="contact_us">
                                    <div class="contact-form__two">
                                        <div class="contact-input">
                                            <div class="contact-inner">
                                                <input name="name" type="text" placeholder="@lang('motiv.name')"
                                                       required="">
                                            </div>
                                            <div class="contact-inner">
                                                <input name="email" type="email" placeholder="@lang('motiv.email')"
                                                       required="">
                                            </div>
                                        </div>

                                        <div class="contact-inner contact-message">
                                        <textarea name="message"
                                                  placeholder="@lang('motiv.Please_describe_what_you_need.')"
                                                  required=""></textarea>
                                        </div>

                                        <!--<button type="submit" class="btn btn-primary" >-->
                                        <!--                                                        Send-->
                                        </button>
                                        <div class="submit-btn text-center">
                                            <button type="submit" class="ht-btn ht-btn-md" id="contact_form"
                                                    style="background-color: #966418;">
                                                @lang('motiv.Send_message')</button>
                                            <p class="form-messege"></p>
                                        </div>


                                    </div>

                                    <div>

                                    </div>


                                </form>
                            <!--{!! Form::close() !!}-->                        </div>
                        </div>

                    </div>
                </div>
            </div>


            <script>

                $(document).ready(function () {
                    //alert('as');
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $('#contact_form').click(function () {
                        event.preventDefault();
                        $.ajax({
                            type: 'post',
                            url: 'admin/contact',
                            data: $('#contact_us').serialize(),
                            success: function (data) {
                                if (status == 200) {
                                    alert('ttt');
                                } else {
                                    @if(App::getLocale()=='en')
                                    toastr.success("Your request has been sent successfully. Wait for response from admin");
                                    @else
                                    toastr.success("Ihre Anfrage wurde erfolgreich gesendet. Warten Sie auf die Antwort des Administrators");
                                    @endif

                                }

                            }
                        });
                    });


                });


            </script>


            <div class="brand-logo-slider-area section-space--ptb_60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- brand logo slider -->
                            <div class="brand-logo-slider__container-area">
                                <div class="swiper-container brand-logo-slider__container">
                                    <div class="swiper-wrapper brand-logo-slider__one">

                                        @foreach($brands  as $brand)
                                            <div class="swiper-slide brand-logo brand-logo--slider">
                                                <a href="#">
                                                    <div class="brand-logo__image">
                                                        <img src="{{ asset('uploads/' .$brand->image) }}"
                                                             class="img-fluid" alt="">
                                                    </div>
                                                    <div class="brand-logo__image-hover">
                                                        <img src="{{ asset('uploads/' .$brand->image) }}"
                                                             class="img-fluid" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====================  End of brand logo slider area  ====================-->

        </div>


    </div>


    <script type="text/javascript">
        var url = "{{url('')}}";
        $('.all').click(function () {

            $('#view_more').css('display', 'none');

            $('#view_more').attr('href', url);
        });

        $('.cat').click(function () {

            $('#view_more').css('display', 'block');

            $('#view_more').attr('href', url + '/Refrence/' + $(this).attr('data'));
        });
    </script>


@endsection
