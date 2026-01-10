<div class="navbar-custom">
                <div class="topbar">
                    <div class="topbar-menu d-flex align-items-center gap-1">
                        <!-- Topbar Brand Logo -->
                        <div class="logo-box">
                            <!-- Brand Logo Light -->
                            <a href="{{ route(auth()->user()->hasRole('admin') ? 'admin.dashboard' : 'customer.dashboard') }}" class="logo-light">
                                <img src="{{asset('assets/img/logo/Favicon.png')}}" alt="logo"
                                    class="logo-lg" />
                            </a>

                            <!-- Brand Logo Dark -->
                            <a href="{{ route(auth()->user()->hasRole('admin') ? 'admin.dashboard' : 'customer.dashboard') }}" class="logo-dark">
                                 <img src="{{asset('assets/img/logo/Favicon.png')}}" alt="logo"
                                    class="logo-lg" />
                            </a>
                        </div>

                        <!-- Sidebar Menu Toggle Button -->
                        <button class="button-toggle-menu">
                            <i class="mdi mdi-menu"></i>
                        </button>

                    </div>

                    <ul class="topbar-menu d-flex align-items-center">
                        <!-- Fullscreen Button -->
                        <li class="d-none d-md-inline-block">
                            <a class="nav-link waves-effect waves-light" href="" data-toggle="fullscreen">
                                <i class="fe-maximize font-22"></i>
                            </a>
                        </li>


                        <!-- User Dropdown -->
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light"
                                data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                aria-expanded="false">
                                <img src="{{ asset('dashboard_assets/images/users/user-1.jpg') }}" alt="user-image"
                                    class="rounded-circle" />
                                <span class="ms-1 d-none d-md-inline-block">
                                    {{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end profile-dropdown">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="{{ route(auth()->user()->hasRole('admin') ? 'profile.show' : 'customer.profile.show') }}" class="dropdown-item notify-item">
                                    <i class="fe-user"></i>
                                    <span>My Account</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <a class="dropdown-item notify-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
