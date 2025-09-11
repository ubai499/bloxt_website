 @include('partials.dashboard_head')
        @include('partials.dashboard_menu')

        <div class="content-page">
            <!-- ========== Topbar Start ========== -->
            @include('partials.dashboard_navbar')
            <!-- ========== Topbar End ========== -->
            @yield('content')
            @include('partials.dashboard_footer')
