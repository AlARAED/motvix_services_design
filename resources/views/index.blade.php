<!DOCTYPE html>
<html class="no-js" lang="zxx">

    @include('head')


<body>


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
    

                 @include('header')



    <!--====================  End of header area  ====================-->



                    @yield('content')


        <!--====================  footer area ====================-->
                    @include('footer')

        <!--====================  End of footer area  ====================-->



                    @include('menue')


        <!--====================  End of mobile menu overlay  ====================-->







        <!-- JS
    ============================================ -->
        <!-- Modernizer JS -->
                         @include('js')


</body>

</html>