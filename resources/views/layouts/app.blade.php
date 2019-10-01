<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="csrf-token" content="{{csrf_token()}}">
            <title>KodeKlinik</title>
             
       @include('partials.styles')
       <script src="/js/app.js"></script>
       <script src="/js/jquery.easypiechart.js"></script>
       <script src="/js/jquery.fluidbox.min.js"></script>
       <script src="/js/jquery.waypoints.js"></script>
       <script src="/js/progressbar.min.js"></script>
       <script src="/js/scripts.js"></script>
       <script src="/js/tether.min.js"></script>
    </head>
    <body>
    <!-- header -->
        {{-- <header> --}}
            @include('partials.tophead')
            @include('partials.header')
            
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
