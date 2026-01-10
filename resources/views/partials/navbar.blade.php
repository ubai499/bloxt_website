
<header class="header-light scroll-light">            
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <!-- logo begin -->
                                <div id="logo">
                                    <a href="{{url('/')}}">
                                        <img class="logo-main" src="{{ asset('assets/images/logo-black.webp') }}" alt="" >
                                        <img class="logo-scroll" src="{{ asset('assets/images/logo-black.webp') }}" alt="" >
                                        <img class="logo-mobile" src="{{ asset('assets/images/logo-black.webp') }}" alt="" >
                                    </a>
                                </div>
                                <!-- logo close -->
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <ul id="mainmenu">
                                    <li><a class="menu-item" href="{{url('/')}}">Home</a>
                                    </li>
                                    <li><a class="menu-item" href="{{ route('about') }}">About Us</a></li>
                                    <li><a class="menu-item" href="{{ route('products') }}">Products</a>
                                    </li>
                                    <li><a class="menu-item" href="{{ route('blog') }}">Blog</a></li>
                                    <li><a class="menu-item" href="{{ route('contact') }}">Contact</a></li>
                                    <li><a class="menu-item" href="{{ route(name: 'login') }}">Login</a></li>
                                </ul>
                            </div>
                            <div class="de-flex-col">
                                <div class="menu_side_area">          
                                    <a href="{{ route('get_quotation')}}" class="btn-main bg-color-2">Get a Quote</a>
                                    <span id="menu-btn"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>