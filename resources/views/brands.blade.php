<!DOCTYPE html>
<html class="no-js" lang="zxx">

@include('headinternal')

<body>


<!--====================  header area ====================-->
@include('headerinternal')

<!--====================  End of header area  ====================-->


<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_box text-center">
                    <h1 class="breadcrumb-title text-color-primary">
                        @lang('motiv.CLIENT_LOGO')</h1>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="/">@lang('motiv.home')</a></li>

                        <li class="breadcrumb-item active">
                            @lang('motiv.CLIENT_LOGO')</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->


<div class="site-wrapper-reveal">
    <!--====================  brand logo slider area ====================-->
    <div class="brand-logo-slider-area section-space--ptb_60 border-bottom">
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
                                                <img src="{{ asset('uploads/' .$brand->image) }}" class="img-fluid"
                                                     alt="">
                                            </div>
                                            <div class="brand-logo__image-hover">
                                                <img src="{{ asset('uploads/' .$brand->image) }}" class="img-fluid"
                                                     alt="">
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


</div>
@include('footerinternal')


@include('jsinternal')


</body>

</html>
