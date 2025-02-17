<!DOCTYPE html>
<html lang="en" data-layout="">

    
<!-- Mirrored from coderthemes.com/adminto/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Feb 2025 12:18:23 GMT -->
    <head>
        <meta charset="utf-8" />
        <title>Dashboard | Adminto - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <!-- Theme Config Js -->
        <script src="{{ asset('assets/js/config.js') }}"></script>
        
        <!-- Vendor css -->
        <link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet" type="text/css" />
        
        <!-- App css -->
        <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />
        
        <!-- Icons css -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <!-- Begin page -->
        <div class="wrapper">

            <!-- Menu -->
            <!-- Sidenav Menu Start -->
            <div class="sidenav-menu">

                <!-- Brand Logo -->
                <a href="index.html" class="logo">
                    <span class="logo-light">
                        <span class="logo-lg"><img src="assets/images/logo.png" alt="logo"></span>
                        <span class="logo-sm"><img src="assets/images/logo-sm.png" alt="small logo"></span>
                    </span>

                    <span class="logo-dark">
                        <span class="logo-lg"><img src="assets/images/logo-dark.png" alt="dark logo"></span>
                        <span class="logo-sm"><img src="assets/images/logo-sm.png" alt="small logo"></span>
                    </span>
                </a>

                <!-- Sidebar Hover Menu Toggle Button -->
                <button class="button-sm-hover">
                    <i class="ri-circle-line align-middle"></i>
                </button>

                <!-- Sidebar Menu Toggle Button -->
                <button class="sidenav-toggle-button">
                    <i class="ri-menu-5-line fs-20"></i>
                </button>

                <!-- Full Sidebar Menu Close Button -->
                <button class="button-close-fullsidebar">
                    <i class="ti ti-x align-middle"></i>
                </button>

                <div data-simplebar>

                    <!-- User -->
                    <div class="sidenav-user">
                        <div class="dropdown-center text-center">
                            <a class="topbar-link dropdown-toggle text-reset drop-arrow-none px-2" data-bs-toggle="dropdown"
                                type="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/users/avatar-1.jpg" width="46" class="rounded-circle" alt="user-image">
                                <span class="d-flex gap-1 sidenav-user-name my-2">
                                    <span>
                                        <span class="mb-0 fw-semibold lh-base fs-15">Nowak Helme</span>
                                        <p class="my-0 fs-13 text-muted">Admin Head</p>
                                    </span>

                                    <i class="ri-arrow-down-s-line d-block sidenav-user-arrow align-middle"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="ri-account-circle-line me-1 fs-16 align-middle"></i>
                                    <span class="align-middle">My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="ri-wallet-3-line me-1 fs-16 align-middle"></i>
                                    <span class="align-middle">Wallet : <span class="fw-semibold">$89.25k</span></span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="ri-settings-2-line me-1 fs-16 align-middle"></i>
                                    <span class="align-middle">Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="ri-question-line me-1 fs-16 align-middle"></i>
                                    <span class="align-middle">Support</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="ri-lock-line me-1 fs-16 align-middle"></i>
                                    <span class="align-middle">Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item active fw-semibold text-danger">
                                    <i class="ri-logout-box-line me-1 fs-16 align-middle"></i>
                                    <span class="align-middle">Sign Out</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!--- Sidenav Menu -->
                    <ul class="side-nav">
                        <li class="side-nav-item">
                            <a href="index.html" class="side-nav-link">
                                <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
                                <span class="menu-text"> Dashboard </span>
                                <span class="badge bg-danger rounded-pill">9+</span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="apps-chat.html" class="side-nav-link">
                                <span class="menu-icon"><i class="ti ti-message"></i></span>
                                <span class="menu-text"> Chat </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="apps-calendar.html" class="side-nav-link">
                                <span class="menu-icon"><i class="ti ti-calendar"></i></span>
                                <span class="menu-text"> Calendar </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarContacts" aria-expanded="false"
                                aria-controls="sidebarContacts" class="side-nav-link">
                                <span class="menu-icon"><i class="ti ti-user-square-rounded"></i></span>
                                <span class="menu-text"> Users</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarContacts">
                                <ul class="sub-menu">
                                    <li class="side-nav-item">
                                        <a href="apps-user-contacts.html" class="side-nav-link">
                                            <span class="menu-text">Contacts</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="apps-user-profile.html" class="side-nav-link">
                                            <span class="menu-text">Profile</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a href="apps-email.html" class="side-nav-link">
                                <span class="menu-icon"><i class="ti ti-mailbox"></i></span>
                                <span class="menu-text"> Email </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="apps-file-manager.html" class="side-nav-link">
                                <span class="menu-icon"><i class="ti ti-folders"></i></span>
                                <span class="menu-text"> File Manager </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="apps-projects.html" class="side-nav-link">
                                <span class="menu-icon"><i class="ti ti-briefcase"></i></span>
                                <span class="menu-text"> Projects </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarTasks" aria-expanded="false" aria-controls="sidebarTasks"
                                class="side-nav-link">
                                <span class="menu-icon"><i class="ti ti-layout-kanban"></i></span>
                                <span class="menu-text"> Tasks</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarTasks">
                                <ul class="sub-menu">
                                    <li class="side-nav-item">
                                        <a href="apps-kanban.html" class="side-nav-link">
                                            <span class="menu-text">Kanban</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="apps-task-details.html" class="side-nav-link">
                                            <span class="menu-text">View Details</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarInvoice" aria-expanded="false" aria-controls="sidebarInvoice"
                                class="side-nav-link">
                                <span class="menu-icon"><i class="ti ti-invoice"></i></span>
                                <span class="menu-text"> Invoice</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarInvoice">
                                <ul class="sub-menu">
                                    <li class="side-nav-item">
                                        <a href="apps-invoices.html" class="side-nav-link">
                                            <span class="menu-text">Invoices</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="apps-invoice-details.html" class="side-nav-link">
                                            <span class="menu-text">View Invoice</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="apps-invoice-create.html" class="side-nav-link">
                                            <span class="menu-text">Create Invoice</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-title mt-2">
                            Custom
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages"
                                class="side-nav-link">
                                <span class="menu-icon"><i class="ti ti-package"></i></span>
                                <span class="menu-text"> Pages </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarPages">
                                <ul class="sub-menu">
                                    <li class="side-nav-item">
                                        <a href="pages-starter.html" class="side-nav-link">
                                            <span class="menu-text">Starter Page</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="pages-pricing.html" class="side-nav-link">
                                            <span class="menu-text">Pricing</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="pages-faq.html" class="side-nav-link">
                                            <span class="menu-text">FAQ</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="pages-maintenance.html" class="side-nav-link">
                                            <span class="menu-text">Maintenance</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="pages-timeline.html" class="side-nav-link">
                                            <span class="menu-text">Timeline</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="pages-coming-soon.html" class="side-nav-link">
                                            <span class="menu-text">Coming Soon</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false"
                                aria-controls="sidebarPagesAuth" class="side-nav-link">
                                <span class="menu-icon"><i class="ti ti-user-shield"></i></span>
                                <span class="menu-text"> Authentication </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarPagesAuth">
                                <ul class="sub-menu">
                                    <li class="side-nav-item">
                                        <a href="auth-login.html" class="side-nav-link">
                                            <span class="menu-text">Login</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="auth-register.html" class="side-nav-link">
                                            <span class="menu-text">Register</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="auth-logout.html" class="side-nav-link">
                                            <span class="menu-text">Logout</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="auth-recoverpw.html" class="side-nav-link">
                                            <span class="menu-text">Recover Password</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="auth-createpw.html" class="side-nav-link">
                                            <span class="menu-text">Create Password</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="auth-lock-screen.html" class="side-nav-link">
                                            <span class="menu-text">Lock Screen</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="auth-confirm-mail.html" class="side-nav-link">
                                            <span class="menu-text">Confirm Mail</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="auth-login-pin.html" class="side-nav-link">
                                            <span class="menu-text">Login with PIN</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarPagesError" aria-expanded="false"
                                aria-controls="sidebarPagesError" class="side-nav-link">
                                <span class="menu-icon"><i class="ti ti-exclamation-circle"></i></span>
                                <span class="menu-text"> Error Pages </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarPagesError">
                                <ul class="sub-menu">
                                    <li class="side-nav-item">
                                        <a href="error-401.html" class="side-nav-link">
                                            <span class="menu-text">401 Unauthorized</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="error-400.html" class="side-nav-link">
                                            <span class="menu-text">400 Bad Request</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="error-403.html" class="side-nav-link">
                                            <span class="menu-text">403 Forbidden</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="error-404.html" class="side-nav-link">
                                            <span class="menu-text">404 Not Found</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="error-500.html" class="side-nav-link">
                                            <span class="menu-text">500 Internal Server</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="error-service-unavailable.html" class="side-nav-link">
                                            <span class="menu-text">Service Unavailable</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="error-404-alt.html" class="side-nav-link">
                                            <span class="menu-text">Error 404 Alt</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a href="widgets.html" class="side-nav-link">
                                <span class="menu-icon"><i class="ti ti-layout-dashboard"></i></span>
                                <span class="menu-text"> Widgets </span>
                            </a>
                        </li>

                        <li class="side-nav-title mt-2">Components</li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarBaseUI" aria-expanded="false" aria-controls="sidebarBaseUI"
                                class="side-nav-link">
                                <span class="menu-icon"><i class="ti ti-aperture"></i></span>
                                <span class="menu-text"> Base UI </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarBaseUI">
                                <ul class="sub-menu">
                                    <li class="side-nav-item">
                                        <a href="ui-accordions.html" class="side-nav-link">
                                            <span class="menu-text">Accordions</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="ui-alerts.html" class="side-nav-link">
                                            <span class="menu-text">Alerts</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="ui-avatars.html" class="side-nav-link">
                                            <span class="menu-text">Avatars</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="ui-badges.html" class="side-nav-link">
                                            <span class="menu-text">Badges</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="ui-breadcrumb.html" class="side-nav-link">
                                            <span class="menu-text">Breadcrumb</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="ui-buttons.html" class="side-nav-link">
                                            <span class="menu-text">Buttons</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="ui-cards.html" class="side-nav-link">
                                            <span class="menu-text">Cards</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="ui-carousel.html" class="side-nav-link">
                                            <span class="menu-text">Carousel</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="ui-collapse.html" class="side-nav-link">
                                            <span class="menu-text">Collapse</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="ui-dropdowns.html" class="side-nav-link">
                                            <span class="menu-text">Dropdowns</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="ui-ratios.html" class="side-nav-link">
                                            <span class="menu-text">Ratios</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="ui-grid.html" class="side-nav-link">
                                            <span class="menu-text">Grid</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="ui-links.html" class="side-nav-link">
                                            <span class="menu-text">Links</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="ui-list-group.html" class="side-nav-link">
                                            <span class="menu-text">List Group</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="ui-modals.html" class="side-nav-link">
                                            <span class="menu-text">Modals</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="ui-notifications.html" class="side-nav-link">
                                            <span class="menu-text">Notifications</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="ui-offcanvas.html" class="side-nav-link">
                                            <span class="menu-text">Offcanvas</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="ui-placeholders.html" class="side-nav-link">
                                            <span class="menu-text">Placeholders</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="ui-pagination.html" class="side-nav-link">
                                            <span class="menu-text">Pagination</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="ui-popovers.html" class="side-nav-link">
                                            <span class="menu-text">Popovers</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="ui-progress.html" class="side-nav-link">
                                            <span class="menu-text">Progress</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="ui-scrollspy.html" class="side-nav-link">
                                            <span class="menu-text">Scrollspy</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="ui-spinners.html" class="side-nav-link">
                                            <span class="menu-text">Spinners</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="ui-tabs.html" class="side-nav-link">
                                            <span class="menu-text">Tabs</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="ui-tooltips.html" class="side-nav-link">
                                            <span class="menu-text">Tooltips</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="ui-typography.html" class="side-nav-link">
                                            <span class="menu-text">Typography</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="ui-utilities.html" class="side-nav-link">
                                            <span class="menu-text">Utilities</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarExtendedUI" aria-expanded="false"
                                aria-controls="sidebarExtendedUI" class="side-nav-link">
                                <span class="menu-icon"><i class="ti ti-macro"></i></span>
                                <span class="menu-text"> Extended UI </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarExtendedUI">
                                <ul class="sub-menu">
                                    <li class="side-nav-item">
                                        <a href="extended-dragula.html" class="side-nav-link">
                                            <span class="menu-text">Dragula</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="extended-sweetalerts.html" class="side-nav-link">
                                            <span class="menu-text">Sweet Alerts</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="extended-ratings.html" class="side-nav-link">
                                            <span class="menu-text">Ratings</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="extended-scrollbar.html" class="side-nav-link">
                                            <span class="menu-text">Scrollbar</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarIcons" aria-expanded="false" aria-controls="sidebarIcons"
                                class="side-nav-link">
                                <span class="menu-icon"><i class="ti ti-icons"></i></span>
                                <span class="menu-text"> Icons </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarIcons">
                                <ul class="sub-menu">
                                    <li class="side-nav-item">
                                        <a href="icons-remix.html" class="side-nav-link">
                                            <span class="menu-text">Remix</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="icons-tabler.html" class="side-nav-link">
                                            <span class="menu-text">Tabler</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="icons-solar.html" class="side-nav-link">
                                            <span class="menu-text">Solar</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarCharts" aria-expanded="false" aria-controls="sidebarCharts"
                                class="side-nav-link">
                                <span class="menu-icon"><i class="ti ti-chart-infographic"></i></span>
                                <span class="menu-text"> Charts </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarCharts">
                                <ul class="sub-menu">
                                    <li class="side-nav-item">
                                        <a href="charts-apex-area.html" class="side-nav-link">
                                            <span class="menu-text">Area</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="charts-apex-bar.html" class="side-nav-link">
                                            <span class="menu-text">Bar</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="charts-apex-bubble.html" class="side-nav-link">
                                            <span class="menu-text">Bubble</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="charts-apex-candlestick.html" class="side-nav-link">
                                            <span class="menu-text">Candlestick</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="charts-apex-column.html" class="side-nav-link">
                                            <span class="menu-text">Column</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="charts-apex-heatmap.html" class="side-nav-link">
                                            <span class="menu-text">Heatmap</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="charts-apex-line.html" class="side-nav-link">
                                            <span class="menu-text">Line</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="charts-apex-mixed.html" class="side-nav-link">
                                            <span class="menu-text">Mixed</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="charts-apex-timeline.html" class="side-nav-link">
                                            <span class="menu-text">Timeline</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="charts-apex-boxplot.html" class="side-nav-link">
                                            <span class="menu-text">Boxplot</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="charts-apex-treemap.html" class="side-nav-link">
                                            <span class="menu-text">Treemap</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="charts-apex-pie.html" class="side-nav-link">
                                            <span class="menu-text">Pie</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="charts-apex-radar.html" class="side-nav-link">
                                            <span class="menu-text">Radar</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="charts-apex-radialbar.html" class="side-nav-link">
                                            <span class="menu-text">RadialBar</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="charts-apex-scatter.html" class="side-nav-link">
                                            <span class="menu-text">Scatter</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="charts-apex-polar-area.html" class="side-nav-link">
                                            <span class="menu-text">Polar Area</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="charts-apex-sparklines.html" class="side-nav-link">
                                            <span class="menu-text">Sparklines</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="charts-apex-slope.html" class="side-nav-link">
                                            <span class="menu-text">Slope</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="charts-apex-funnel.html" class="side-nav-link">
                                            <span class="menu-text">Funnel</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarForms" aria-expanded="false" aria-controls="sidebarForms"
                                class="side-nav-link">
                                <span class="menu-icon"><i class="ti ti-list-details"></i></span>
                                <span class="menu-text"> Forms </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarForms">
                                <ul class="sub-menu">
                                    <li class="side-nav-item">
                                        <a href="form-elements.html" class="side-nav-link">
                                            <span class="menu-text">Basic Elements</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="form-inputmask.html" class="side-nav-link">
                                            <span class="menu-text">Inputmask</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="form-picker.html" class="side-nav-link">
                                            <span class="menu-text">Picker</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="form-select.html" class="side-nav-link">
                                            <span class="menu-text">Select</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="form-range-slider.html" class="side-nav-link">
                                            <span class="menu-text">Range Slider</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="form-validation.html" class="side-nav-link">
                                            <span class="menu-text">Validation</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="form-wizard.html" class="side-nav-link">
                                            <span class="menu-text">Wizard</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="form-fileuploads.html" class="side-nav-link">
                                            <span class="menu-text">File Uploads</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="form-editors.html" class="side-nav-link">
                                            <span class="menu-text">Editors</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="form-layouts.html" class="side-nav-link">
                                            <span class="menu-text">Layouts</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarTables" aria-expanded="false" aria-controls="sidebarTables"
                                class="side-nav-link">
                                <span class="menu-icon"><i class="ti ti-table-row"></i></span>
                                <span class="menu-text"> Tables </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarTables">
                                <ul class="sub-menu">
                                    <li class="side-nav-item">
                                        <a href="tables-basic.html" class="side-nav-link">
                                            <span class="menu-text">Basic Tables</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="tables-gridjs.html" class="side-nav-link">
                                            <span class="menu-text">Gridjs Tables</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="tables-datatable.html" class="side-nav-link">
                                            <span class="menu-text">Datatable Tables</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarMaps" aria-expanded="false" aria-controls="sidebarMaps"
                                class="side-nav-link">
                                <span class="menu-icon"><i class="ti ti-map-2"></i></span>
                                <span class="menu-text"> Maps </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarMaps">
                                <ul class="sub-menu">
                                    <li class="side-nav-item">
                                        <a href="maps-google.html" class="side-nav-link">
                                            <span class="menu-text">Google Maps</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="maps-vector.html" class="side-nav-link">
                                            <span class="menu-text">Vector Maps</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="maps-leaflet.html" class="side-nav-link">
                                            <span class="menu-text">Leaflet Maps</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-title mt-2">
                            More
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarLayouts" aria-expanded="false" aria-controls="sidebarLayouts"
                                class="side-nav-link">
                                <span class="menu-icon"><i class="ti ti-layout"></i></span>
                                <span class="menu-text"> Layouts </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarLayouts">
                                <ul class="sub-menu">
                                    <li class="side-nav-item">
                                        <a href="layouts-horizontal.html" target="_blank" class="side-nav-link">Horizontal</a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="layouts-detached.html" target="_blank" class="side-nav-link">Detached</a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="layouts-full.html" target="_blank" class="side-nav-link">Full View</a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="layouts-fullscreen.html" target="_blank" class="side-nav-link">Fullscreen View</a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="layouts-hover.html" target="_blank" class="side-nav-link">Hover Menu</a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="layouts-compact.html" target="_blank" class="side-nav-link">Compact</a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="layouts-icon-view.html" target="_blank" class="side-nav-link">Icon View</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarMultiLevel" aria-expanded="false"
                                aria-controls="sidebarMultiLevel" class="side-nav-link">
                                <span class="menu-icon"><i class="ti ti-share"></i></span>
                                <span class="menu-text"> Multi Level </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarMultiLevel">
                                <ul class="sub-menu">
                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#sidebarSecondLevel" aria-expanded="false"
                                            aria-controls="sidebarSecondLevel" class="side-nav-link">
                                            <span class="menu-text"> Second Level </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarSecondLevel">
                                            <ul class="sub-menu">
                                                <li class="side-nav-item">
                                                    <a href="javascript: void(0);" class="side-nav-link">
                                                        <span class="menu-text">Item 1</span>
                                                    </a>
                                                </li>
                                                <li class="side-nav-item">
                                                    <a href="javascript: void(0);" class="side-nav-link">
                                                        <span class="menu-text">Item 2</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#sidebarThirdLevel" aria-expanded="false"
                                            aria-controls="sidebarThirdLevel" class="side-nav-link">
                                            <span class="menu-text"> Third Level </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarThirdLevel">
                                            <ul class="sub-menu">
                                                <li class="side-nav-item">
                                                    <a href="javascript: void(0);" class="side-nav-link">Item 1</a>
                                                </li>
                                                <li class="side-nav-item">
                                                    <a data-bs-toggle="collapse" href="#sidebarFourthLevel" aria-expanded="false"
                                                        aria-controls="sidebarFourthLevel" class="side-nav-link">
                                                        <span class="menu-text"> Item 2 </span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <div class="collapse" id="sidebarFourthLevel">
                                                        <ul class="sub-menu">
                                                            <li class="side-nav-item">
                                                                <a href="javascript: void(0);" class="side-nav-link">
                                                                    <span class="menu-text">Item 2.1</span>
                                                                </a>
                                                            </li>
                                                            <li class="side-nav-item">
                                                                <a href="javascript: void(0);" class="side-nav-link">
                                                                    <span class="menu-text">Item 2.2</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                    <!-- Help Box -->
                    <div class="help-box text-center">
                        <h5 class="fw-semibold fs-16">Unlimited Access</h5>
                        <p class="mb-3 text-muted">Upgrade to plan to get access to unlimited reports</p>
                        <a href="javascript: void(0);" class="btn btn-danger btn-sm">Upgrade</a>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Sidenav Menu End -->

            
            <!-- Topbar Start -->
            <header class="app-topbar" id="header">
                <div class="page-container topbar-menu">
                    <div class="d-flex align-items-center gap-2">

                        <!-- Brand Logo -->
                        <a href="index.html" class="logo">
                            <span class="logo-light">
                                <span class="logo-lg"><img src="assets/images/mulyagiri.png" alt="logo"></span>
                                <span class="logo-sm"><img src="assets/images/mulyagiri.png" alt="small logo"></span>
                            </span>

                            <span class="logo-dark">
                                <span class="logo-lg"><img src="assets/images/logo-dark.png" alt="dark logo"></span>
                                <span class="logo-sm"><img src="assets/images/logo-sm.png" alt="small logo"></span>
                            </span>
                        </a>

                        <!-- Sidebar Menu Toggle Button -->
                        <button class="sidenav-toggle-button px-2">
                            <i class="ri-menu-5-line fs-24"></i>
                        </button>

                        <!-- Horizontal Menu Toggle Button -->
                        <button class="topnav-toggle-button px-2" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                            <i class="ri-menu-5-line fs-24"></i>
                        </button>

                        <!-- Topbar Page Title -->
                        <div class="topbar-item d-none d-md-flex px-2">
                            
                            <div>
                                <h4 class="page-title fs-20 fw-semibold mb-0">Dashboard</h4>

                            </div>
                            

                            
                        </div>

                    </div>

                    <div class="d-flex align-items-center gap-2">

                        <!-- Search for small devices -->
                        <div class="topbar-item d-flex d-xl-none">
                            <button class="topbar-link" data-bs-toggle="modal" data-bs-target="#searchModal" type="button">
                                <i class="ri-search-line fs-22"></i>
                            </button>
                        </div>

                        <!-- Button Trigger Search Modal -->
                        <div class="topbar-search text-muted d-none d-xl-flex gap-2 me-2 align-items-center" data-bs-toggle="modal"
                            data-bs-target="#searchModal" type="button">
                            <i class="ri-search-line fs-18"></i>
                            <span class="me-2">Search something..</span>
                        </div>

                        <!-- Language Dropdown -->
                        <div class="topbar-item">
                            <div class="dropdown">
                                <button class="topbar-link" data-bs-toggle="dropdown" data-bs-offset="0,32" type="button"
                                    aria-haspopup="false" aria-expanded="false">
                                    <img src="assets/images/flags/us.svg" alt="user-image" class="w-100 rounded" height="18"
                                        id="selected-language-image">
                                </button>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item" data-translator-lang="en">
                                        <img src="assets/images/flags/us.svg" alt="user-image" class="me-1 rounded" height="18"
                                            data-translator-image> <span class="align-middle">English</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item" data-translator-lang="hi">
                                        <img src="assets/images/flags/in.svg" alt="user-image" class="me-1 rounded" height="18"
                                            data-translator-image> <span class="align-middle">Hindi</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <img src="assets/images/flags/de.svg" alt="user-image" class="me-1 rounded" height="18">
                                        <span class="align-middle">German</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <img src="assets/images/flags/it.svg" alt="user-image" class="me-1 rounded" height="18">
                                        <span class="align-middle">Italian</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <img src="assets/images/flags/es.svg" alt="user-image" class="me-1 rounded" height="18">
                                        <span class="align-middle">Spanish</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <img src="assets/images/flags/ru.svg" alt="user-image" class="me-1 rounded" height="18">
                                        <span class="align-middle">Russian</span>
                                    </a>

                                </div>
                            </div>
                        </div>

                        <!-- Notification Dropdown -->
                        <div class="topbar-item">
                            <div class="dropdown">
                                <button class="topbar-link dropdown-toggle drop-arrow-none" data-bs-toggle="dropdown"
                                    data-bs-offset="0,25" type="button" data-bs-auto-close="outside" aria-haspopup="false"
                                    aria-expanded="false">
                                    <i class="ri-notification-snooze-line animate-ring fs-22"></i>
                                    <span class="noti-icon-badge"></span>
                                </button>

                                <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg" style="min-height: 300px;">
                                    <div class="p-2 border-bottom position-relative border-dashed">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-0 fs-16 fw-semibold"> Notifications</h6>
                                            </div>
                                            <div class="col-auto">
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle drop-arrow-none link-dark"
                                                        data-bs-toggle="dropdown" data-bs-offset="0,15" aria-expanded="false">
                                                        <i class="ri-settings-2-line fs-22 align-middle"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item">Mark as Read</a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item">Delete All</a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item">Do not Disturb</a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item">Other Settings</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="position-relative rounded-0" style="max-height: 300px;" data-simplebar>
                                        <!-- item-->
                                        <div class="dropdown-item notification-item py-2 text-wrap active" id="notification-1">
                                            <span class="d-flex align-items-center">
                                                <span class="me-3 position-relative flex-shrink-0">
                                                    <img src="assets/images/users/avatar-2.jpg" class="avatar-lg rounded-circle"
                                                        alt="" />
                                                </span>
                                                <span class="flex-grow-1 text-muted">
                                                    <span class="fw-medium text-body">Glady Haid</span> commented on <span
                                                        class="fw-medium text-body">Adminto admin status</span>
                                                    <br />
                                                    <span class="fs-12">25m ago</span>
                                                </span>
                                                <span class="notification-item-close">
                                                    <button type="button"
                                                        class="btn btn-ghost-danger rounded-circle btn-sm btn-icon"
                                                        data-dismissible="#notification-1">
                                                        <i class="ri-close-line fs-16"></i>
                                                    </button>
                                                </span>
                                            </span>
                                        </div>

                                        <!-- item-->
                                        <div class="dropdown-item notification-item py-2 text-wrap" id="notification-2">
                                            <span class="d-flex align-items-center">
                                                <span class="me-3 position-relative flex-shrink-0">
                                                    <img src="assets/images/users/avatar-4.jpg" class="avatar-lg rounded-circle"
                                                        alt="" />
                                                </span>
                                                <span class="flex-grow-1 text-muted">
                                                    <span class="fw-medium text-body">Tommy Berry</span> donated <span
                                                        class="text-success">$100.00</span> for <span
                                                        class="fw-medium text-body">Carbon removal program</span>
                                                    <br />
                                                    <span class="fs-12">58m ago</span>
                                                </span>
                                                <span class="notification-item-close">
                                                    <button type="button"
                                                        class="btn btn-ghost-danger rounded-circle btn-sm btn-icon"
                                                        data-dismissible="#notification-2">
                                                        <i class="ri-close-line fs-16"></i>
                                                    </button>
                                                </span>
                                            </span>
                                        </div>

                                        <!-- item-->
                                        <div class="dropdown-item notification-item py-2 text-wrap" id="notification-3">
                                            <span class="d-flex align-items-center">
                                                <div class="avatar-lg flex-shrink-0 me-3">
                                                    <span class="avatar-title bg-success-subtle text-success rounded-circle fs-22">
                                                        <iconify-icon icon="solar:wallet-money-bold-duotone"></iconify-icon>
                                                    </span>
                                                </div>
                                                <span class="flex-grow-1 text-muted">
                                                    You withdraw a <span class="fw-medium text-body">$500</span> by <span
                                                        class="fw-medium text-body">New York ATM</span>
                                                    <br />
                                                    <span class="fs-12">2h ago</span>
                                                </span>
                                                <span class="notification-item-close">
                                                    <button type="button"
                                                        class="btn btn-ghost-danger rounded-circle btn-sm btn-icon"
                                                        data-dismissible="#notification-3">
                                                        <i class="ri-close-line fs-16"></i>
                                                    </button>
                                                </span>
                                            </span>
                                        </div>

                                        <!-- item-->
                                        <div class="dropdown-item notification-item py-2 text-wrap" id="notification-4">
                                            <span class="d-flex align-items-center">
                                                <span class="me-3 position-relative flex-shrink-0">
                                                    <img src="assets/images/users/avatar-7.jpg" class="avatar-lg rounded-circle"
                                                        alt="" />
                                                </span>
                                                <span class="flex-grow-1 text-muted">
                                                    <span class="fw-medium text-body">Richard Allen</span> followed you in <span
                                                        class="fw-medium text-body">Facebook</span>
                                                    <br />
                                                    <span class="fs-12">3h ago</span>
                                                </span>
                                                <span class="notification-item-close">
                                                    <button type="button"
                                                        class="btn btn-ghost-danger rounded-circle btn-sm btn-icon"
                                                        data-dismissible="#notification-4">
                                                        <i class="ri-close-line fs-16"></i>
                                                    </button>
                                                </span>
                                            </span>
                                        </div>

                                        <!-- item-->
                                        <div class="dropdown-item notification-item py-2 text-wrap" id="notification-5">
                                            <span class="d-flex align-items-center">
                                                <span class="me-3 position-relative flex-shrink-0">
                                                    <img src="assets/images/users/avatar-10.jpg" class="avatar-lg rounded-circle"
                                                        alt="" />
                                                </span>
                                                <span class="flex-grow-1 text-muted">
                                                    <span class="fw-medium text-body">Victor Collier</span> liked you recent photo
                                                    in <span class="fw-medium text-body">Instagram</span>
                                                    <br />
                                                    <span class="fs-12">10h ago</span>
                                                </span>
                                                <span class="notification-item-close">
                                                    <button type="button"
                                                        class="btn btn-ghost-danger rounded-circle btn-sm btn-icon"
                                                        data-dismissible="#notification-5">
                                                        <i class="ri-close-line fs-16"></i>
                                                    </button>
                                                </span>
                                            </span>
                                        </div>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);"
                                        class="dropdown-item notification-item text-center text-reset text-decoration-underline fw-bold notify-item border-top border-light py-2">
                                        View All
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Apps Dropdown -->
                        <div class="topbar-item d-none d-sm-flex">
                            <div class="dropdown">
                                <button class="topbar-link dropdown-toggle drop-arrow-none" data-bs-toggle="dropdown"
                                    data-bs-offset="0,25" type="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="ri-apps-2-add-line fs-22"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg p-0">
                                    <div class="p-2">
                                        <div class="row g-0">
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="assets/images/brands/slack.svg" alt="slack">
                                                    <span>Slack</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="assets/images/brands/gitlab.svg" alt="Github">
                                                    <span>Gitlab</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="assets/images/brands/dribbble.svg" alt="dribbble">
                                                    <span>Dribbble</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="row g-0">
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="assets/images/brands/bitbucket.svg" alt="bitbucket">
                                                    <span>Bitbucket</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="assets/images/brands/dropbox.svg" alt="dropbox">
                                                    <span>Dropbox</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="assets/images/brands/google-cloud.svg" alt="G Suite">
                                                    <span>G Cloud</span>
                                                </a>
                                            </div>
                                        </div> <!-- end row-->

                                        <div class="row g-0">
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="assets/images/brands/aws.svg" alt="bitbucket">
                                                    <span>AWS</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="assets/images/brands/digital-ocean.svg" alt="dropbox">
                                                    <span>Server</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="assets/images/brands/bootstrap.svg" alt="G Suite">
                                                    <span>Bootstrap</span>
                                                </a>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Button Trigger Customizer Offcanvas -->
                        <div class="topbar-item d-none d-sm-flex">
                            <button class="topbar-link" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas"
                                type="button">
                                <i class="ri-settings-4-line fs-22"></i>
                            </button>
                        </div>

                        <!-- Light/Dark Mode Button -->
                        <div class="topbar-item d-none d-sm-flex">
                            <button class="topbar-link" id="light-dark-mode" type="button">
                                <i class="ri-moon-line light-mode-icon fs-22"></i>
                                <i class="ri-sun-line dark-mode-icon fs-22"></i>
                            </button>
                        </div>

                        <!-- User Dropdown -->
                        <div class="topbar-item nav-user">
                            <div class="dropdown">
                                <a class="topbar-link dropdown-toggle drop-arrow-none px-2" data-bs-toggle="dropdown"
                                    data-bs-offset="0,25" type="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="assets/images/mulyagiri.png" width="32" class="rounded-circle me-lg-2 d-flex"
                                        alt="user-image">
                                    <span class="d-lg-flex flex-column gap-1 d-none">
                                        <h5 class="my-0">Nowak Helmse</h5>
                                    </span>
                                    <i class="ri-arrow-down-s-line d-none d-lg-block align-middle ms-1"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="ri-account-circle-line me-1 fs-16 align-middle"></i>
                                        <span class="align-middle">My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="ri-wallet-3-line me-1 fs-16 align-middle"></i>
                                        <span class="align-middle">Wallet : <span class="fw-semibold">$89.25k</span></span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="ri-settings-2-line me-1 fs-16 align-middle"></i>
                                        <span class="align-middle">Settings</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="ri-question-line me-1 fs-16 align-middle"></i>
                                        <span class="align-middle">Support</span>
                                    </a>

                                    <div class="dropdown-divider"></div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="ri-lock-line me-1 fs-16 align-middle"></i>
                                        <span class="align-middle">Lock Screen</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item active fw-semibold text-danger">
                                        <i class="ri-logout-box-line me-1 fs-16 align-middle"></i>
                                        <span class="align-middle">Sign Out</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Topbar End -->

            <!-- Search Modal -->
            <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content bg-transparent">
                        <form>
                            <div class="card mb-1">
                                <div class="px-3 py-2 d-flex flex-row align-items-center" id="top-search">
                                    <i class="ri-search-line fs-22"></i>
                                    <input type="search" class="form-control border-0" id="search-modal-input"
                                        placeholder="Search for actions, people,">
                                    <button type="submit" class="btn p-0" data-bs-dismiss="modal" aria-label="Close">[esc]</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            

            

            

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <div class="page-content">
               @yield("section");
                <!-- Footer Start -->
                <footer class="footer">
                    <div class="page-container">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start">
                                <script>document.write(new Date().getFullYear())</script> © Adminto - By <span class="fw-bold text-decoration-underline text-uppercase text-reset fs-12">Coderthemes</span>
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-md-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- Theme Settings -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="theme-settings-offcanvas">
            <div class="d-flex align-items-center gap-2 px-3 py-3 offcanvas-header border-bottom border-dashed">
                <h5 class="flex-grow-1 fs-16 fw-bold mb-0">Theme Settings</h5>

                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body p-0 h-100" data-simplebar>
                <div class="p-3 border-bottom border-dashed">
                    <h5 class="mb-3 fs-13 text-uppercase fw-bold">Color Scheme</h5>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-color-light"
                                    value="light">
                                <label class="form-check-label p-3 w-100 d-flex justify-content-center align-items-center"
                                    for="layout-color-light">
                                    <iconify-icon icon="solar:sun-bold-duotone" class="fs-32 text-muted"></iconify-icon>
                                </label>
                            </div>
                            <h5 class="fs-14 text-center text-muted mt-2">Light</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-color-dark"
                                    value="dark">
                                <label class="form-check-label p-3 w-100 d-flex justify-content-center align-items-center"
                                    for="layout-color-dark">
                                    <iconify-icon icon="solar:cloud-sun-2-bold-duotone" class="fs-32 text-muted"></iconify-icon>
                                </label>
                            </div>
                            <h5 class="fs-14 text-center text-muted mt-2">Dark</h5>
                        </div>
                    </div>
                </div>

                <div class="p-3 border-bottom border-dashed sidebarMode">
                    <h5 class="mb-3 fs-13 text-uppercase fw-bold">Layout Mode</h5>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-fluid"
                                    value="fluid">
                                <label class="form-check-label p-0 avatar-xl w-100" for="layout-mode-fluid">
                                    <div>
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end flex-column p-1 px-2">
                                                    <span class="d-block p-1 bg-dark-subtle rounded mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column rounded-2">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </div>

                                    <div>
                                        <span class="d-flex h-100 flex-column">
                                            <span
                                                class="bg-light d-flex p-1 align-items-center border-bottom border-secondary border-opacity-25">
                                                <span class="d-block p-1 bg-dark-subtle rounded me-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded ms-auto"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                            </span>
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </div>
                                </label>
                            </div>
                            <h5 class="fs-14 text-center text-muted mt-2">Fluid</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-layout-mode" id="data-layout-detached"
                                    value="detached">
                                <label class="form-check-label p-0 avatar-xl w-100" for="data-layout-detached">
                                    <span class="d-flex h-100 flex-column">
                                        <span class="bg-light d-flex p-1 align-items-center border-bottom ">
                                            <span class="d-block p-1 bg-dark-subtle rounded me-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded ms-auto"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded ms-1"></span>
                                        </span>
                                        <span class="d-flex h-100 p-1 px-2">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column p-1 px-2">
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                    <span
                                                        class="d-block border border-3 border-secondary border-opacity-25 rounded w-100"></span>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="bg-light d-block p-1 mt-auto px-2"></span>
                                    </span>

                                </label>
                            </div>
                            <h5 class="fs-14 text-center text-muted mt-2">Detached</h5>
                        </div>
                    </div>
                </div>

                <div class="p-3 border-bottom border-dashed">
                    <h5 class="mb-3 fs-16 fw-bold">Topbar Color</h5>

                    <div class="row">
                        <div class="col-3 darkMode">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar-color" id="topbar-color-light"
                                    value="light">
                                <label class="form-check-label p-0 avatar-lg w-100 bg-light" for="topbar-color-light">
                                    <span class="d-flex align-items-center justify-content-center h-100">
                                        <span class="p-2 d-inline-flex shadow rounded-circle bg-white"></span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-14 text-center text-muted mt-2">Light</h5>
                        </div>

                        <div class="col-3">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar-color" id="topbar-color-dark"
                                    value="dark">
                                <label class="form-check-label p-0 avatar-lg w-100 bg-light" for="topbar-color-dark">
                                    <span class="d-flex align-items-center justify-content-center h-100">
                                        <span class="p-2 d-inline-flex shadow rounded-circle"
                                            style="background-color: #000000;"></span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-14 text-center text-muted mt-2">Dark</h5>
                        </div>

                        <div class="col-3">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar-color" id="topbar-color-brand"
                                    value="brand">
                                <label class="form-check-label p-0 avatar-lg w-100 bg-light" for="topbar-color-brand">
                                    <span class="d-flex align-items-center justify-content-center h-100">
                                        <span class="p-2 d-inline-flex shadow rounded-circle bg-primary"></span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-14 text-center text-muted mt-2">Brand</h5>
                        </div>
                    </div>
                </div>

                <div class="p-3 border-bottom border-dashed">
                    <h5 class="mb-3 fs-16 fw-bold">Menu Color</h5>

                    <div class="row">
                        <div class="col-3">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-menu-color" id="sidenav-color-light"
                                    value="light">
                                <label class="form-check-label p-0 avatar-lg w-100 bg-light" for="sidenav-color-light">
                                    <span class="d-flex align-items-center justify-content-center h-100">
                                        <span class="p-2 d-inline-flex shadow rounded-circle bg-white"></span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-14 text-center text-muted mt-2">Light</h5>
                        </div>

                        <div class="col-3">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-menu-color" id="sidenav-color-dark"
                                    value="dark">
                                <label class="form-check-label p-0 avatar-lg w-100 bg-light" for="sidenav-color-dark">
                                    <span class="d-flex align-items-center justify-content-center h-100">
                                        <span class="p-2 d-inline-flex shadow rounded-circle"
                                            style="background-color: #000000;"></span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-14 text-center text-muted mt-2">Dark</h5>
                        </div>
                        <div class="col-3">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-menu-color" id="sidenav-color-brand"
                                    value="brand">
                                <label class="form-check-label p-0 avatar-lg w-100 bg-light" for="sidenav-color-brand">
                                    <span class="d-flex align-items-center justify-content-center h-100">
                                        <span class="p-2 d-inline-flex shadow rounded-circle bg-primary"></span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-14 text-center text-muted mt-2">Brand</h5>
                        </div>
                    </div>
                </div>

                <div class="p-3 .border-bottom .border-dashed sidebarMode">
                    <h5 class="mb-3 fs-13 text-uppercase fw-bold">Sidebar Size</h5>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-default"
                                    value="default">
                                <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-default">
                                    <span class="d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                <span class="d-block p-1 bg-dark-subtle rounded mb-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-14 text-center text-muted mt-2">Default</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-compact"
                                    value="compact">
                                <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-compact">
                                    <span class="d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 border-end  flex-column p-1">
                                                <span class="d-block p-1 bg-dark-subtle rounded mb-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-14 text-center text-muted mt-2">Compact</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-small"
                                    value="condensed">
                                <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-small">
                                    <span class="d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 border-end flex-column" style="padding: 2px;">
                                                <span class="d-block p-1 bg-dark-subtle rounded mb-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-14 text-center text-muted mt-2">Condensed</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidenav-size"
                                    id="sidenav-size-small-hover" value="sm-hover">
                                <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-small-hover">
                                    <span class="d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 border-end flex-column" style="padding: 2px;">
                                                <span class="d-block p-1 bg-dark-subtle rounded mb-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                                <span
                                                    class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-14 text-center text-muted mt-2">Hover View</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-full"
                                    value="full">
                                <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-full">
                                    <span class="d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="d-block p-1 bg-dark-subtle mb-1"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-14 text-center text-muted mt-2">Full Layout</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidenav-size"
                                    id="sidenav-size-fullscreen" value="fullscreen">
                                <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-fullscreen">
                                    <span class="d-flex h-100">
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-14 text-center text-muted mt-2">Hidden</h5>
                        </div>
                    </div>
                </div>

                <div class="p-3 border-bottom border-dashed d-none">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="fs-16 mb-0">Container Width</h5>

                        <div class="btn-group radio" role="group">
                            <input type="radio" class="btn-check" name="data-container-position" id="container-width-fixed"
                                value="fixed">
                            <label class="btn btn-sm btn-soft-primary w-sm" for="container-width-fixed">Full</label>

                            <input type="radio" class="btn-check" name="data-container-position" id="container-width-scrollable"
                                value="scrollable">
                            <label class="btn btn-sm btn-soft-primary w-sm ms-0" for="container-width-scrollable">Boxed</label>
                        </div>
                    </div>
                </div>

                <div class="p-3 border-bottom border-dashed d-none">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="fs-16 mb-0">Layout Position</h5>

                        <div class="btn-group radio" role="group">
                            <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed"
                                value="fixed">
                            <label class="btn btn-sm btn-soft-primary w-sm" for="layout-position-fixed">Fixed</label>

                            <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable"
                                value="scrollable">
                            <label class="btn btn-sm btn-soft-primary w-sm ms-0"
                                for="layout-position-scrollable">Scrollable</label>
                        </div>
                    </div>
                </div>
            </div>

            

        </div>

  <!-- Vendor js -->
<script src="{{ asset('assets/js/vendor.min.js') }}"></script>

<!-- App js -->
<script src="{{ asset('assets/js/app.js') }}"></script>

<!-- Apex Chart js -->
<script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>

<!-- Projects Analytics Dashboard App js -->
<script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>


    </body>


<!-- Mirrored from coderthemes.com/adminto/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Feb 2025 12:19:02 GMT -->
</html>