<aside class="app-sidebar sticky" id="sidebar">

    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
        <a href="index.html" class="header-logo">
            <img src="../assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
            <img src="../assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
            <img src="../assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
            <img src="../assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
        </a>
    </div>
    <!-- End::main-sidebar-header -->

    <!-- Start::main-sidebar -->
    <div class="main-sidebar" id="sidebar-scroll">

        <!-- Start::nav -->
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg>
            </div>
            <ul class="main-menu">
                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Main</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bx bx-home side-menu__icon"></i>
                        <span class="side-menu__label">Dashboards</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Menu</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="{{ route('category') }}" class="side-menu__item">
                        <i class="bx bx-file-blank side-menu__icon"></i>
                        <span class="side-menu__label">Category</span>
                    </a>
                </li>
                <li class="slide has-sub">
                    <a href="{{ route('food_type') }}" class="side-menu__item">
                        <i class="bx bx-list-ol side-menu__icon"></i>
                        <span class="side-menu__label">Food Type</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Website Settings</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                {{-- <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bx bx-box side-menu__icon"></i>
                        <span class="side-menu__label">Ui Elements</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1 mega-menu">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Ui Elements</a>
                        </li>
                        <li class="slide">
                            <a href="alerts.html" class="side-menu__item">Alerts</a>
                        </li>
                        <li class="slide">
                            <a href="badge.html" class="side-menu__item">Badge</a>
                        </li>
                        <li class="slide">
                            <a href="breadcrumb.html" class="side-menu__item">Breadcrumb</a>
                        </li>
                        <li class="slide">
                            <a href="buttons.html" class="side-menu__item">Buttons</a>
                        </li>
                        <li class="slide">
                            <a href="buttongroup.html" class="side-menu__item">Button Group</a>
                        </li>
                        <li class="slide">
                            <a href="cards.html" class="side-menu__item">Cards</a>
                        </li>
                        <li class="slide">
                            <a href="dropdowns.html" class="side-menu__item">Dropdowns</a>
                        </li>
                        <li class="slide">
                            <a href="images_figures.html" class="side-menu__item">Images & Figures</a>
                        </li>
                        <li class="slide">
                            <a href="listgroup.html" class="side-menu__item">List Group</a>
                        </li>
                        <li class="slide">
                            <a href="navs_tabs.html" class="side-menu__item">Navs & Tabs</a>
                        </li>
                        <li class="slide">
                            <a href="object-fit.html" class="side-menu__item">Object Fit</a>
                        </li>
                        <li class="slide">
                            <a href="pagination.html" class="side-menu__item">Pagination</a>
                        </li>
                        <li class="slide">
                            <a href="popovers.html" class="side-menu__item">Popovers</a>
                        </li>
                        <li class="slide">
                            <a href="progress.html" class="side-menu__item">Progress</a>
                        </li>
                        <li class="slide">
                            <a href="spinners.html" class="side-menu__item">Spinners</a>
                        </li>
                        <li class="slide">
                            <a href="toasts.html" class="side-menu__item">Toasts</a>
                        </li>
                        <li class="slide">
                            <a href="tooltips.html" class="side-menu__item">Tooltips</a>
                        </li>
                        <li class="slide">
                            <a href="typography.html" class="side-menu__item">Typography</a>
                        </li>
                    </ul>
                </li> --}}
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bx bx-medal side-menu__icon"></i>
                        <span class="side-menu__label">Homepage Settings</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bx bx-file side-menu__icon"></i>
                        <span class="side-menu__label">Sliders</span>
                    </a>
                </li>
                <!-- End::slide -->

            </ul>
        </nav>
        <!-- End::nav -->

    </div>
    <!-- End::main-sidebar -->

</aside>