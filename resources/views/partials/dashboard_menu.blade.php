 <div class="app-menu">
            <!-- Brand Logo -->
            <div class="logo-box">
                <div class="header-left">
                        <div class="logo">
                            <a href="{{route('dashboard')}}" class="header-logo">
                                <img src="{{asset('assets/img/logo/final_logo.png')}}" alt="logo-img" style="width:120px;">
                            </a>
                        </div>
                    </div>
            </div>

            <!-- menu-left -->
            <div class="scrollbar">
                <!-- User box -->
                <div class="user-box text-center">
                    <img src="{{ asset('dashboard_assets/images/users/user-1.jpg') }}" alt="user-img" title="Mat Helme"
                        class="rounded-circle avatar-md" />
                    <div class="dropdown">
                        <a href="javascript: void(0);" class="dropdown-toggle h5 mb-1 d-block"
                            data-bs-toggle="dropdown">Geneva Kennedy</a>
                        <div class="dropdown-menu user-pro-dropdown">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user me-1"></i>
                                <span>My Account</span>
                            </a>

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
                    </div>
                    <p class="text-muted mb-0">Admin Head</p>
                </div>

                <!--- Menu -->
                <ul class="menu">
                    <li class="menu-title">Navigation</li>

                    <li class="menu-item">
                        <a href="{{route('dashboard')}}" class="menu-link">
                            <span class="menu-icon"><i data-feather="airplay"></i></span>
                            <span class="menu-text"> Dashboard </span>
                        </a>
                    </li>

                    <li class="menu-title">Apps</li>

                    <li class="menu-item">
                        <a href="#menuProjects" data-bs-toggle="collapse" class="menu-link">
                            <span class="menu-icon"><i data-feather="briefcase"></i></span>
                            <span class="menu-text"> Blogs </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuProjects">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="{{route('admin.blogs')}}" class="menu-link">
                                        <span class="menu-text">View Blogs</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{route('admin.blog.create')}}" class="menu-link">
                                        <span class="menu-text">Create Blog</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#blogCategory" data-bs-toggle="collapse" class="menu-link">
                            <span class="menu-icon"><i data-feather="briefcase"></i></span>
                            <span class="menu-text"> Blogs Categories</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="blogCategory">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="{{route('admin.blog_categories')}}" class="menu-link">
                                        <span class="menu-text">View Blog Category</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{route('admin.blog_category.create')}}" class="menu-link">
                                        <span class="menu-text">Create Blog Category</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#service" data-bs-toggle="collapse" class="menu-link">
                            <span class="menu-icon"><i data-feather="briefcase"></i></span>
                            <span class="menu-text"> Services</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="service">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="{{route('admin.services')}}" class="menu-link">
                                        <span class="menu-text">View Services</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{route('admin.service.create')}}" class="menu-link">
                                        <span class="menu-text">Create Services</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <!--- End Menu -->
                <div class="clearfix"></div>
            </div>
        </div>
