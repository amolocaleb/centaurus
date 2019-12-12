<nav class="d-flex align-items-center app-header ">
    <div class="p-2">
        <a class="navbar-brand" href="#">KodeKlinik</a>
    </div>
    <ul class="nav app-nav">
        <li class="nav-item"><a href="{{'/'}}" class="nav-link nav-line-height active  d-flex align-items-center"><span>{{__('Home')}}</span></a></li>
        <li class="nav-item"><a href="{{route('portfolio',app()->getLocale())}}" class="nav-link nav-line-height  d-flex align-items-center"><span>{{__('Portfolio')}}</span></a></li>

        <li class="nav-item">
            {{-- <a href="{{'/developers'}}" class="nav-link dev-has-dropdown nav-line-height  d-flex align-items-center"><span>{{__('Developers')}}</span></a> --}}
            <a href="{{route('dev.index',app()->getLocale())}}" class="nav-link dev-has-dropdown nav-line-height d-flex align-items-center"><span>Developers</span></a>
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
    <div class="phone-nav-btn right p-2">
        <button class="btn btn-sm btn-default"><i class="fa fa-bars" aria-hidden="true" id="openMenu"></i></button>
    </div>
</nav>