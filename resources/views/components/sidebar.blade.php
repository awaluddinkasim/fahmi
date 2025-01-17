<!-- Left Sidebar Start -->
<div class="app-sidebar-menu">
    <div class="h-100" data-simplebar>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <div class="logo-box">
                <a href="/" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
                    </span>
                </a>
                <a href="/" class="logo logo-dark">
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="36">
                    </span>
                </a>
            </div>

            <ul id="side-menu">

                <li class="menu-title">Menu</li>

                @auth('admin')
                    @foreach (config('menu.admin') as $menu)
                        @isset($menu['submenu'])
                            <li>
                                <a href="#sidebar{{ $loop->index }}" data-bs-toggle="collapse">
                                    <i data-feather="{{ $menu['icon'] }}"></i>
                                    <span> {{ $menu['title'] }} </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebar{{ $loop->index }}">
                                    <ul class="nav-second-level">
                                        @foreach ($menu['submenu'] as $submenu)
                                            <li>
                                                <a href="{{ isset($submenu['route']) ? route($submenu['route']) : '#' }}"
                                                    class="tp-link">{{ $submenu['title'] }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                        @else
                            <li>
                                <a href="{{ isset($menu['route']) ? route($menu['route']) : '#' }}" class="tp-link">
                                    <i data-feather="{{ $menu['icon'] }}"></i>
                                    <span> {{ $menu['title'] }} </span>
                                </a>
                            </li>
                        @endisset
                    @endforeach
                @endauth

                @auth('user')
                    @foreach (config('menu.user') as $menu)
                        @isset($menu['submenu'])
                            <li>
                                <a href="#sidebar{{ $loop->index }}" data-bs-toggle="collapse">
                                    <i data-feather="{{ $menu['icon'] }}"></i>
                                    <span> {{ $menu['title'] }} </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebar{{ $loop->index }}">
                                    <ul class="nav-second-level">
                                        @foreach ($menu['submenu'] as $submenu)
                                            <li>
                                                <a href="{{ isset($submenu['route']) ? route($submenu['route']) : '#' }}"
                                                    class="tp-link">{{ $submenu['title'] }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                        @else
                            <li>
                                <a href="{{ isset($menu['route']) ? route($menu['route']) : '#' }}" class="tp-link">
                                    <i data-feather="{{ $menu['icon'] }}"></i>
                                    <span> {{ $menu['title'] }} </span>
                                </a>
                            </li>
                        @endisset
                    @endforeach
                @endauth

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
</div>
<!-- Left Sidebar End -->
