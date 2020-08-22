<!DOCTYPE html>
<html class="no-js" lang="zxx">

@include('headinternal')


<body>


@include('headerinternal')


<div class="site-wrapper-reveal">
    <!--============ Appointment Hero Start ============-->

    <!--============ Appointment Hero End ============-->
    <!--===========  feature-icon-wrapper  Start =============-->

    <!--===========  feature-icon-wrapper  End =============-->
    <!--======== Tabs Wrapper Start ======== -->

    <!--======== Tabs Wrapper End ======== -->

    <!-- ============ Team Member Wrapper Start =============== -->

    <!-- ============ Team Member Wrapper End =============== -->


    <!--========== Call to Action Area Start ============-->

    <!--========== Call to Action Area End ============-->


    <!--===========  Projects wrapper Start =============-->

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


                    @foreach($refrences  as $refrence)

                        <div class="col-lg-4 col-md-6 cat--{{$refrence->category_id}}">
                            <!-- Projects Wrap Start -->
                            @if($refrence->frame_tab == 2)
                                <a href="#" class="projects-wrap style-01"
                                   onclick="window.open('{{$refrence->link}}', '_blank')">

                                    <div class="projects-image-box">
                                        <div class="projects-image">


                                            <img class="img-fluid" src="{{ asset('uploads/' .$refrence->image) }}"
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


                                            <img class="img-fluid" src="{{ asset('uploads/' .$refrence->image) }}"
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
                            @endif


                        </div>
                    @endforeach


                </div>
            </div>


        </div>


    </div>

    <!--===========  Projects wrapper End =============-->

    <!--====================  testimonial section ====================-->

    <!--====================  End of testimonial section  ====================-->

    <!--=========== fun fact Wrapper Start ==========-->

    <!--=========== fun fact Wrapper End ==========-->
    <!--============ Contact Us Area Start =================-->

    <!--============ Contact Us Area End =================-->
</div>

<!--====================  footer area ====================-->

@include('footerinternal')


@include('jsinternal')




<!--====================  search overlay ====================-->

<!--====================  End of search overlay  ====================-->

<!-- JS
============================================ -->
<!-- Modernizer JS -->


</body>

</html>