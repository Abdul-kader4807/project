<div class="vertical-menu">

<!-- LOGO -->
<div class="navbar-brand-box">
    <a href="index.html" class="logo logo-dark">
        <span class="logo-sm">
            <img src="<?php echo $base_url;?>/assets/images/logo-sm-dark.png" alt="logo-sm-dark" height="24">
        </span>
        <span class="logo-lg">
            <img src="<?php echo $base_url;?>/assets/images/logo-dark.png" alt="logo-dark" height="22">
        </span>
    </a>

    <a href="index.html" class="logo logo-light">
        <span class="logo-sm">
            <img src="<?php echo $base_url;?>/assets/images/logo-sm-light.png" alt="logo-sm-light" height="24">
        </span>
        <span class="logo-lg">
            <img src="<?php echo $base_url;?>/assets/images/pos_name_logo.png" alt="logo-light" height="40">
        </span>
    </a>
</div>

<button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn"
    id="vertical-menu-btn">
    <i class="ri-menu-2-line align-middle"></i>
</button>

<div data-simplebar class="vertical-scroll">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
      <?php include_once "views/layout/menus/menu.php"?>
      

    </div>
    <!-- Sidebar -->
</div>

<div class="dropdown px-3 sidebar-user sidebar-user-info">
    <button type="button" class="btn w-100 px-0 border-0" id="page-header-user-dropdown"
        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="d-flex align-items-center">
            <div class="flex-shrink-0">
                <img src="<?php echo $base_url;?>/assets/images/users/akader.png"
                    class="img-fluid header-profile-user rounded-circle" alt="">
            </div>

            <div class="flex-grow-1 ms-2 text-start">
                <span class="ms-1 fw-medium user-name-text">Admin</span>
            </div>

            <div class="flex-shrink-0 text-end">
                <i class="mdi mdi-dots-vertical font-size-16"></i>
            </div>
        </span>
    </button>
    <div class="dropdown-menu dropdown-menu-end">
        <!-- item-->
        <a class="dropdown-item" href="pages-profile.html"><i
                class="mdi mdi-account-circle text-muted font-size-16 align-middle me-1"></i> <span
                class="align-middle">Profile</span></a>
        <a class="dropdown-item" href="apps-chat.html"><i
                class="mdi mdi-message-text-outline text-muted font-size-16 align-middle me-1"></i> <span
                class="align-middle">Messages</span></a>
        <a class="dropdown-item" href="pages-faq.html"><i
                class="mdi mdi-lifebuoy text-muted font-size-16 align-middle me-1"></i> <span
                class="align-middle">Help</span></a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="pages-profile.html"><i
                class="mdi mdi-wallet text-muted font-size-16 align-middle me-1"></i> <span
                class="align-middle">Balance : <b>$5971.67</b></span></a>
        <a class="dropdown-item" href="#"><span class="badge bg-primary mt-1 float-end">New</span><i
                class="mdi mdi-cog-outline text-muted font-size-16 align-middle me-1"></i> <span
                class="align-middle">Settings</span></a>
        <a class="dropdown-item" href="<?php echo $base_url?>/logout.php"><i
                class="mdi mdi-lock text-muted font-size-16 align-middle me-1"></i> <span
                class="align-middle">Logout</span></a>
    </div>
</div>

</div>