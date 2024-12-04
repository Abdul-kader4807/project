<div class="dropdown mx-3 sidebar-user user-dropdown select-dropdown">
    <button type="button" class="btn btn-light w-100 waves-effect waves-light border-0"
        id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">
        <span class="d-flex align-items-center">
            <div class="flex-shrink-0">
                <div class="avatar-xs rounded-circle flex-shrink-0">
                    <div
                        class="avatar-title border bg-light text-primary rounded-circle text-uppercase user-sort-name">
                        R</div>
                </div>
            </div>
            <div class="flex-grow-1 ms-2 text-start">
                <h6 class="mb-1 fw-medium user-name-text"> Reporting </h6>
                <p class="font-size-13 text-muted user-name-sub-text mb-0"> Team Reporting </p>
            </div>
            <div class="flex-shrink-0 text-end">
                <i class="mdi mdi-chevron-down font-size-16"></i>
            </div>
        </span>
    </button>
    <div class="dropdown-menu dropdown-menu-end w-100">
        <!-- item-->
        <a class="dropdown-item d-flex align-items-center px-3" href="#">
            <div class="flex-shrink-0 me-2">
                <div class="avatar-xs rounded-circle flex-shrink-0">
                    <div
                        class="avatar-title border rounded-circle text-uppercase dropdown-sort-name">
                        C</div>
                </div>
            </div>
            <div class="flex-grow-1">
                <h6 class="mb-0 dropdown-name">CRM</h6>
                <p class="text-muted font-size-13 mb-0 dropdown-sub-desc">Designer Team</p>
            </div>
        </a>
        <a class="dropdown-item d-flex align-items-center px-3" href="#">
            <div class="flex-shrink-0 me-2">
                <div class="avatar-xs rounded-circle flex-shrink-0">
                    <div
                        class="avatar-title border rounded-circle text-uppercase dropdown-sort-name">
                        A</div>
                </div>
            </div>
            <div class="flex-grow-1">
                <h6 class="mb-0 dropdown-name">Application Design</h6>
                <p class="text-muted font-size-13 mb-0 dropdown-sub-desc">Flutter Devs</p>
            </div>
        </a>

        <a class="dropdown-item d-flex align-items-center px-3" href="#">
            <div class="flex-shrink-0 me-2">
                <div class="avatar-xs rounded-circle flex-shrink-0">
                    <div
                        class="avatar-title border rounded-circle text-uppercase dropdown-sort-name">
                        E</div>
                </div>
            </div>
            <div class="flex-grow-1">
                <h6 class="mb-0 dropdown-name">Ecommerce</h6>
                <p class="text-muted font-size-13 mb-0 dropdown-sub-desc">Developer Team</p>
            </div>
        </a>

        <a class="dropdown-item d-flex align-items-center px-3" href="#">
            <div class="flex-shrink-0 me-2">
                <div class="avatar-xs rounded-circle flex-shrink-0">
                    <div
                        class="avatar-title border rounded-circle text-uppercase dropdown-sort-name">
                        R</div>
                </div>
            </div>
            <div class="flex-grow-1">
                <h6 class="mb-0 dropdown-name">Reporting</h6>
                <p class="text-muted font-size-13 mb-0 dropdown-sub-desc">Team Reporting</p>
            </div>
        </a>

        <a class="btn btn-sm btn-link font-size-14 text-center w-100" href="javascript:void(0)">
            View More..
        </a>
    </div>
</div>
<!-- Left Menu Start -->
<ul class="metismenu list-unstyled" id="side-menu">
    <li class="menu-title">Dashboard</li>

    <li>
        <a href="index.html" class="waves-effect">
            <i class="uim uim-airplay"></i><span
                class="badge rounded-pill bg-success float-end">3</span>
             <span>Dashboard </span> 
        </a>
    </li> 

    <li>
         <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="uim uim-comment-message"></i>
            <span>Sales management </span>
        </a> 
        <ul class="sub-menu" aria-expanded="true">
            <li>
                 <a href="javascript: void(0);" class="has-arrow">Customer</a> 
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="email-inbox.html">sales</a></li>
                    <li><a href="email-read.html">sales details</a></li>
                </ul>
            </li>

            <li><a href="calendar.html">Customer Management</a></li>

            <li><a href="apps-chat.html">Sales</a></li> 

            <li><a href="apps-file-manager.html">Sales details </a></li>


            <li>
                <a href="javascript: void(0);" class="has-arrow"> Products </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="<?php echo $base_url;?>/product/">Product</a></li>
                    <li><a href="<?php echo $base_url?>/product/create">Create Product</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow">Users</a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="users-list.html">Users List</a></li>
                    <li><a href="users-detail.html">Users Detail</a></li>
                </ul>
            </li>
        </ul>
    </li>


    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="uim uim-window-grid"></i>
            <span>Layouts</span>
        </a>
        <ul class="sub-menu" aria-expanded="true">
            <li>
                <a href="javascript: void(0);" class="has-arrow">Vertical</a>
                <ul class="sub-menu" aria-expanded="true">
                    <li><a href="layouts-dark-sidebar.html">Dark Sidebar</a></li>
                    <li><a href="layouts-light-sidebar.html">Light Sidebar</a></li>
                    <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                    <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                    <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                    <li><a href="layouts-preloader.html">Preloader</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow">Horizontal</a>
                <ul class="sub-menu" aria-expanded="true">
                    <li><a href="layouts-horizontal.html">Horizontal</a></li>
                    <li><a href="layouts-hori-light-header.html">Light Header</a></li>
                    <li><a href="layouts-hori-topbar-dark.html">Topbar Dark</a></li>
                    <li><a href="layouts-hori-boxed-width.html">Boxed width</a></li>
                    <li><a href="layouts-hori-preloader.html">Preloader</a></li>
                </ul>
            </li>
        </ul>
    </li>

    <li class="menu-title">Pages</li>

    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="uim uim-sign-in-alt"></i>
            <span>User Authentication </span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
            <li><a href="auth-login.html">Login</a></li>
            <li><a href="auth-register.html">Register</a></li>
            <li><a href="auth-recoverpw.html">Recover Password</a></li>
            <li><a href="auth-lock-screen.html">Lock Screen</a></li>
        </ul>
    </li>

    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="uim uim-box"></i>
            <span>Extra Pages</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
            <li><a href="pages-starter.html">Starter Page</a></li>
            <li><a href="pages-maintenance.html">Maintenance</a></li>
            <li><a href="pages-comingsoon.html">Coming Soon</a></li>
            <li><a href="pages-404.html">Error 404</a></li>
            <li><a href="pages-500.html">Error 500</a></li>
            <li><a href="pages-faq.html">(Help Center) FAQ</a></li>
            <li><a href="pages-profile.html">Profile</a></li>
            <li><a href="pages-pricing.html">Pricing</a></li>
            <li><a href="pages-terms-conditions.html">Terms & Conditions</a></li>
        </ul>
    </li>

    <li class="menu-title">Components</li>

    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="uim uim-layer-group"></i>
            <span>UI Elements</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
            <li><a href="ui-alerts.html">Alerts</a></li>
            <li><a href="ui-buttons.html">Buttons</a></li>
            <li><a href="ui-cards.html">Cards</a></li>
            <li><a href="ui-carousel.html">Carousel</a></li>
            <li><a href="ui-dropdowns.html">Dropdowns</a></li>
            <li><a href="ui-grid.html">Grid</a></li>
            <li><a href="ui-images.html">Images</a></li>
            <li><a href="ui-lightbox.html">Lightbox</a></li>
            <li><a href="ui-modals.html">Modals</a></li>
            <li><a href="ui-offcanvas.html">Offcavas</a></li>
            <li><a href="ui-rangeslider.html">Range Slider</a></li>
            <li><a href="ui-roundslider.html">Round Slider</a></li>
            <li><a href="ui-session-timeout.html">Session Timeout</a></li>
            <li><a href="ui-progressbars.html">Progress Bars</a></li>
            <li><a href="ui-sweet-alert.html">Sweetalert 2</a></li>
            <li><a href="ui-tabs-accordions.html">Tabs & Accordions</a></li>
            <li><a href="ui-typography.html">Typography</a></li>
            <li><a href="ui-video.html">Video</a></li>
            <li><a href="ui-general.html">General</a></li>
            <li><a href="ui-rating.html">Rating</a></li>
            <li><a href="ui-notifications.html">Notifications</a></li>
        </ul>
    </li>

    <li>
        <a href="javascript: void(0);" class="waves-effect">
            <i class="uim uim-document-layout-left"></i>
            <span class="badge rounded-pill bg-danger float-end">6</span>
            <span>Forms</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
            <li><a href="form-elements.html">Basic Elements</a></li>
            <li><a href="form-validation.html">Validation</a></li>
            <li><a href="form-plugins.html">Plugins</a></li>
            <li><a href="form-editors.html">Editors</a></li>
            <li><a href="form-uploads.html">File Upload</a></li>
            <li><a href="form-wizard.html">Wizard</a></li>
        </ul>
    </li>

    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="uim uim-table"></i>
            <span>Tables</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
            <li><a href="tables-bootstrap.html">Bootstrap Tables</a></li>
            <li><a href="tables-datatable.html">Data Tables</a></li>
            <li><a href="tables-editable.html">Editable Table</a></li>
        </ul>
    </li>

    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="uim uim-chart-pie"></i>
            <span>Charts</span>
        </a>
        <ul class="sub-menu" aria-expanded="true">
            <li><a href="javascript: void(0);" class="has-arrow">Apexcharts Part 1</a>
                <ul class="sub-menu" aria-expanded="true">
                    <li><a href="charts-line.html">Line</a></li>
                    <li><a href="charts-area.html">Area</a></li>
                    <li><a href="charts-column.html">Column</a></li>
                    <li><a href="charts-bar.html">Bar</a></li>
                    <li><a href="charts-mixed.html">Mixed</a></li>
                    <li><a href="charts-timeline.html">Timeline</a></li>
                    <li><a href="charts-candlestick.html">Candlestick</a></li>
                    <li><a href="charts-boxplot.html">Boxplot</a></li>
                </ul>
            </li>
            <li><a href="javascript: void(0);" class="has-arrow">Apexcharts Part 2</a>
                <ul class="sub-menu" aria-expanded="true">
                    <li><a href="charts-bubble.html">Bubble</a></li>
                    <li><a href="charts-scatter.html">Scatter</a></li>
                    <li><a href="charts-heatmap.html">Heatmap</a></li>
                    <li><a href="charts-treemap.html">Treemap</a></li>
                    <li><a href="charts-pie.html">Pie</a></li>
                    <li><a href="charts-radialbar.html">Radialbar</a></li>
                    <li><a href="charts-radar.html">Radar</a></li>
                    <li><a href="charts-polararea.html">Polararea</a></li>
                </ul>
            </li>
            <li><a href="charts-echart.html">E Charts</a></li>
        </ul>
    </li>

    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="uim uim-object-ungroup"></i>
            <span>Icons</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
            <li><a href="icons-remix.html">Remix Icons</a></li>
            <li><a href="icons-materialdesign.html">Material Design</a></li>
            <li><a href="icons-unicons.html">Unicons</a></li>
        </ul>
    </li>

    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="uim uim-comment-plus"></i>
            <span>Maps</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
            <li><a href="maps-google.html">Google Maps</a></li>
            <li><a href="maps-vector.html">Vector Maps</a></li>
        </ul>
    </li>

    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="uim uim-layers-alt"></i>
            <span>Multi Level</span>
        </a>
        <ul class="sub-menu" aria-expanded="true">
            <li><a href="javascript: void(0);">Level 1.1</a></li>
            <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                <ul class="sub-menu" aria-expanded="true">
                    <li><a href="javascript: void(0);">Level 2.1</a></li>
                    <li><a href="javascript: void(0);">Level 2.2</a></li>
                </ul>
            </li>
        </ul>
    </li>

</ul>