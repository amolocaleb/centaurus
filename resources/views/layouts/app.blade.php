<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
       @include('partials.head')
       @include('partials.styles')
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
    <!-- End of Footer -->
    </body>
</html>
