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
                    <h1 class="breadcrumb-title text-color-primary"> @if(App::getLocale()=='en')
                            {{$page->title_en}}
                        @else
                            {{$page->title_ge}}
                        @endif </h1>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>

                        <li class="breadcrumb-item active">
                            @if(App::getLocale()=='en')
                                {{$page->title_en}}
                            @else
                                {{$page->title_ge}}
                            @endif  </li>
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
                    @if(App::getLocale()=='en')
                        {!! $page->content_en !!}

                    @else
                        {!! $page->content_ge !!}


                    @endif
                </div>
            </div>
        </div>
    </div>


</div>
@include('footerinternal')


@include('jsinternal')


</body>

</html>
