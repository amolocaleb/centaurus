<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="csrf-token" content="{{csrf_token()}}">
            <title>KodeKlinik</title>
             
       @include('partials.styles')
       <script src="/js/app.js"></script>
       {{-- <script src="/js/jquery.easypiechart.js"></script>
       <script src="/js/jquery.fluidbox.min.js"></script>
       <script src="/js/jquery.waypoints.js"></script>
       <script src="/js/progressbar.min.js"></script>
       <script src="/js/scripts.js"></script>
       <script src="/js/tether.min.js"></script> --}}
    </head>
    <body>
    <!-- header -->
        {{-- <header> --}}
            @include('partials.tophead')
            @include('partials.header')
            <div class="phone-nav right ">
                {{-- <button class="btn btn-sm btn-default"><i class="fa fa-bars" aria-hidden="true"></i></button> --}}
                {{-- Mobile Phone Navigation --}}
                <div class="phone-navigation d-none" >
                    <li class="nav-item"><a href="/" class="nav-link nav-line-height active  d-flex align-items-center"><span>{{__('Home')}}</span></a></li>
                    <li class="nav-item"><a href="{{route('portfolio',app()->getLocale())}}" class="nav-link nav-line-height  d-flex align-items-center"><span>{{__('Portfolio')}}</span></a></li>
        
                    <li class="nav-item">
                        <a href="{{'/developers'}}" class="nav-link dev-has-dropdown nav-line-height  d-flex align-items-center"><span>{{__('Developers')}}</span></a>
                        <ul class="sub-menu columns2">
                            <li class="sub-menu-item">
        
                                <ul class="sub-menu">
                                    <li class="nav-item"><a href="" class="nav-link text-justify">One</a></li>
                                    <li class="nav-item"><a href="" class="nav-link text-justify">Two</a></li>
                                    <li class="nav-item"><a href="" class="nav-link text-justify">Three Things</a></li>
                                    <li class="nav-item"><a href="" class="nav-link text-justify">Four</a></li>
                                </ul>
                            </li>
                            <li class="sub-menu-item">
        
                                <ul class="sub-menu">
                                    <li class="nav-item"><a href="" class="nav-link text-justify">Five</a></li>
                                    <li class="nav-item"><a href="" class="nav-link text-justify">Six</a></li>
                                    <li class="nav-item"><a href="" class="nav-link text-justify">Seven</a></li>
                                    <li class="nav-item"><a href="" class="nav-link text-justify">Eight</a></li>
                                </ul>
                            </li>
        
                        </ul>
                    </li>
                    <li class="nav-item"><a href="{{route('about',app()->getLocale())}}" class="nav-link nav-line-height  d-flex align-items-center"><span>{{__('About Us')}}</span></a></li>
                    <li class="nav-item  d-flex align-items-center"><button class="btn app-btn">{{__('Contact Us')}}</button></li>
                    </ul>
                    <div class=" container d-flex flex-column pt-3">
                
                        <div class="xs-locale flex-row justify-content-between d-flex">
                                <a href="{{route(Route::currentRouteName(),'en')}}" class="lang_uk"></a>
                                <a href="{{route(Route::currentRouteName(),'it')}}" class="lang_it"></a>
                                <a href="{{route(Route::currentRouteName(),'fr')}}" class="lang_fr"></a>
                        </div>
                        <div class="justify-content-center d-flex">
                            <a href="{{route('admin',app()->getLocale())}}" class="admin-link">{{__('Admin Area')}}</a>
                            
                        </div>
                    </div>
                </div>
                {{-- ./Mobile Phone Navigation --}}
            </div>
        {{-- </header> --}}
    <!-- end of header -->
    <!-- Main Content -->

        <main>
                
            @yield('content')
            
        </main>
    <!-- end of Main COntent -->
    <!-- Footer -->
        <footer>
            @include('partials.scripts') 
        </footer>
        {{-- <div class="scroller">
            <span class="fa fa-hand-o-down"></span>
            
        </div> --}}
    <!-- End of Footer -->
    </body>
</html>
