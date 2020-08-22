<!DOCTYPE html>
<html class="no-js" lang="zxx">

@include('headinternal')

<body>


<!--====================  header area ====================-->
@include('headerinternal')

<!--====================  End of header area  ====================-->


<!-- breadcrumb-area start -->

<!-- breadcrumb-area end -->


<div class="site-wrapper-reveal">

    <!--===========  feature-large-images-wrapper  Start =============-->

    <!--===========  feature-large-images-wrapper  End =============-->


    <!--========= About Resources Wrapper Start ===========-->

    <!--========= About Resources Wrapper End ===========-->
    <!--========= About Delivering Wrapper Start ===========-->

    <!--=========== fun fact Wrapper Start ==========-->

    <!--=========== fun fact Wrapper End ==========-->
    <!--====================  testimonial section ====================-->

    <!--====================  End of testimonial section  ====================-->

    <!--====================  brand logo slider area ====================-->

    <!--====================  End of brand logo slider area  ====================-->
    <!--============ Contact Us Area Start =================-->
    <div class="contact-us-area infotechno-contact-us-bg section-space--pt_100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="image">
                        <img class="img-fluid" class="img-fluid"
                             src="{{ asset('uploads/K.png')}}" alt="" style="width:587px;height:572;">
                    </div>
                </div>

                <div class="col-lg-4 ml-auto">
                    <div class="contact-info style-two text-left">

                        <div class="contact-info-title-wrap text-center">
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
            </div>
        </div>
    </div>
    <!--============ Contact Us Area End =================-->

</div>
@include('footerinternal')


@include('jsinternal')


</body>

</html>