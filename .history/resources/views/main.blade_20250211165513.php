<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from phpstack-1384472-5121645.cloudwaysapps.com/template/html/adminx/template/project_dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Feb 2025 09:39:50 GMT -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Multipurpose, super flexible, powerful, clean modern responsive bootstrap 5 admin template">
  <meta name="keywords"
    content="admin template, AdminX admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="Arteam">
  <link rel="icon" href="../assets/images/logo/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="../assets/images/logo/favicon.png" type="image/x-icon">
  <title>AdminX - Premium Admin Template</title>
  <!--font-awesome-css-->
  <link rel="stylesheet" href="../assets/vendor/fontawesome/css/all.css">
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&amp;display=swap"
    rel="stylesheet">

 <!-- prism css-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/prism/prism.min.css') }}">

<!-- Animation css -->
<link rel="stylesheet" href="{{ asset('assets/vendor/animation/animate.min.css') }}">

<!-- tabler icons-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/tabler-icons/tabler-icons.css') }}">

<!--flag Icon css-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/flag-icons-master/flag-icon.css') }}">

<!-- apexcharts css-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/apexcharts/apexcharts.css') }}">

<!-- simplebar css-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/simplebar/simplebar.css') }}">

<!-- slick css -->
<link rel="stylesheet" href="{{ asset('assets/vendor/slick/slick.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/slick/slick-theme.css') }}">

<!-- Data Table css-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/datatable/jquery.dataTables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/datatable/datatable2/buttons.dataTables.min.css') }}">

<!-- pignose-Calendar css -->
<link rel="stylesheet" href="{{ asset('assets/vendor/pignose-Calendar/pignose.calendar.min.css') }}">

<!-- Bootstrap css-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap/bootstrap.min.css') }}">

<!-- App css-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

<!-- Responsive css-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">

</head>

<body>
  <div class="app-wrapper">
    <div class="loader-wrapper">
      <div class="app-loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>

     <!-- Menu Navigation starts -->
     <nav class="dark-sidebar">
      <div class="app-logo">
        <a class="logo d-inline-block" href="index.html">
          <img src="../assets/images/logo/dark.png" alt="#" class="dark-logo">
          <img src="../assets/images/logo/01.png" alt="#" class="light-logo">
        </a>

        <span class="bg-light-light toggle-semi-nav">
          <i class="ti ti-chevrons-right f-s-20"></i>
        </span>
      </div>
      <div class="app-nav" id="app-simple-bar">
        <ul class="main-nav p-0 mt-2">
          <li class="menu-title"> <span>Dashboard</span></li>
          <li>
            <a class="" data-bs-toggle="collapse" href="#dashboard" aria-expanded="false">
              <i class="ti ti-home"></i>
              dashboard
              <span class="badge text-bg-primary badge-notification ms-2">4</span>
            </a>
            <ul class="collapse" id="dashboard">
              <li><a href="index.html">Analytics</a></li>
              <li><a href="project_dashboard.html">Project</a></li>
              <li><a href="ecommerce_dashboard.html">Ecommerce</a></li>
              <li><a href="education.html">Education</a></li>
            </ul>
          </li>
          <li>
            <a class="" data-bs-toggle="collapse" href="#apps" aria-expanded="false">
              <i class="ti ti-server"></i>
              Apps
            </a>
            <ul class="collapse" id="apps">
              <li><a href="calendar.html">Calendar</a></li>
              <li><a href="invoice.html">Invoice</a></li>
              <li><a href="kanban_board.html">kanban board</a></li>
              <li><a href="profile.html">Profile</a></li>
              <li><a href="timeline.html">Timeline</a></li>
              <li><a href="faq.html">FAQ</a></li>
              <li><a href="pricing.html">Pricing</a></li>
              <li><a href="gallery.html">Gallery</a></li>
              <li><a href="team.html">Team</a></li>
              <li><a href="chat.html">Chat</a></li>
              <li class="another-level">
                <a class="" data-bs-toggle="collapse" href="#email-page" aria-expanded="false">
                  Email Page
                </a>
                <ul class="collapse" id="email-page">
                  <li><a href="email.html"> Email</a></li>
                  <li><a href="read_email.html">Read Email</a></li>
                </ul>
              </li>
              <li class="another-level">
                <a class="" data-bs-toggle="collapse" href="#e-shop" aria-expanded="false">
                  E-shop
                </a>
                <ul class="collapse" id="e-shop">
                  <li><a href="cart.html">Cart</a></li>
                  <li><a href="product.html">Product</a></li>
                  <li><a href="add_product.html">Add Product</a></li>
                  <li><a href="product_details.html">Product-Details</a></li>
                  <li><a href="product_list.html">Product list</a></li>
                  <li><a href="orders.html">Orders</a></li>
                  <li><a href="orders_details.html">Orders Details</a></li>
                  <li><a href="orders_list.html">Orders List</a></li>
                  <li><a href="checkout.html">Checkout</a></li>
                  <li><a href="wishlist.html">Wishlist</a></li>
                </ul>
              </li>
              <li class="another-level">
                <a class="" data-bs-toggle="collapse" href="#projects-page" aria-expanded="false">
                  Projects Page
                </a>
                <ul class="collapse" id="projects-page">
                  <li><a href="project_app.html">Projects</a></li>
                  <li><a href="project_details.html">Projects Details</a></li>
                </ul>
              </li>
              <li><a href="to_do.html">To-Do</a></li>
              <li><a href="filemanager.html">File Manager</a></li>
              <li class="another-level">
                <a class="" data-bs-toggle="collapse" href="#blog-page" aria-expanded="false">
                  Blog Page
                </a>
                <ul class="collapse" id="blog-page">
                  <li><a href="blog.html">Blog</a></li>
                  <li><a href="blog_read_more.html">Blog Details</a></li>
                </ul>
              </li>

            </ul>
          </li>
          <li class="no-sub">
            <a class="" href="widget.html">
              <i class="ti ti-chart-treemap"></i> Widgets
            </a>
          </li>

          <li class="menu-title"> <span>Component</span></li>

          <li>
            <a class="" data-bs-toggle="collapse" href="#ui-kits" aria-expanded="false">
              <i class="ti ti-first-aid-kit"></i> UI kits
            </a>
            <ul class="collapse" id="ui-kits">
              <li><a href="cheatsheet.html">Cheatsheet</a></li>
              <li><a href="alert.html">Alert</a></li>
              <li><a href="badges.html">Badges</a></li>
              <li><a href="buttons.html">Buttons</a></li>
              <li><a href="cards.html">Cards</a></li>
              <li><a href="dropdown.html">Dropdown</a></li>
              <li><a href="grid.html">Grid</a></li>
              <li><a href="avtar.html">Avtar</a></li>
              <li><a href="tabs.html">Tabs</a></li>
              <li><a href="accordions.html">Accordions</a></li>
              <li><a href="progress.html">Progress</a></li>
              <li><a href="notifications.html">Notifications</a></li>
              <li><a href="list.html">Lists</a></li>
              <li><a href="helper_classes.html">Helper Classes</a></li>
              <li><a href="background.html">Background</a></li>
              <li><a href="divider.html">Divider</a></li>
              <li><a href="ribbons.html">Ribbons</a></li>
              <li><a href="editor.html">Editor </a></li>
<li><a href="collapse.html">Collapse</a></li>
              <li><a href="shadow.html">Shadow</a></li>
              <li><a href="wrapper.html">Wrapper</a></li>
              <li><a href="bullet.html">Bullet</a></li>
              <li><a href="placeholder.html">Placeholder</a></li>
              <li><a href="alignment.html">Alignment Things</a></li>
            </ul>
          </li>

          <li>
            <a class="" data-bs-toggle="collapse" href="#advance-ui" aria-expanded="false">
              <i class="ti ti-briefcase"></i> Advanced UI
              <span class=" badge rounded-pill bg-warning badge-notification ms-2">
                12+
                <span class="visually-hidden">unread messages</span>
              </span>
            </a>
            <ul class="collapse" id="advance-ui">
              <li><a href="modals.html">Modals</a></li>
              <li><a href="offcanvas.html">OffCanvas Toggle</a></li>
              <li><a href="sweetalert.html">Sweet Alert</a></li>
              <li><a href="scrollbar.html">Scrollbar</a></li>
              <li><a href="spinners.html">Spinners</a></li>
              <li><a href="animation.html">Animation</a></li>
              <li><a href="video_emaded.html">Video Embed</a></li>
              <li><a href="tour.html">Tour</a></li>
              <li><a href="slick.html">Slider</a></li>
              <li><a href="bootstrap_slider.html">Bootstrap Slider</a></li>
              <li><a href="scrollpy.html">Scrollpy</a></li>
              <li><a href="tooltips_popovers.html">Tooltip & Popovers</a></li>
              <li><a href="ratings.html">Rating</a></li>
              <li><a href="prismjs.html">Prismjs</a></li>
              <li><a href="count_down.html">Count Down</a></li>
              <li><a href="countup.html"> Count Up </a></li>
            </ul>
          </li>
          <li>
            <a class="" data-bs-toggle="collapse" href="#icons" aria-expanded="false">
              <i class="ti ti-icons"></i> Icons
            </a>
            <ul class="collapse" id="icons">
              <li><a href="fontawesome.html">Fontawesome</a></li>
              <li><a href="flag_icons.html">Flag</a></li>
              <li><a href="tabler-icons.html">Tabler</a></li>
              <li><a href="wheather_icon.html">Wheather</a></li>
            </ul>
          </li>
          <li class="no-sub">
            <a class="" href="misc.html">
              <i class="ti ti-album"></i> Misc
            </a>
          </li>
          <li class="menu-title"> <span>Map & Charts </span></li>
          <li>
            <a class="" href="#maps" data-bs-toggle="collapse" aria-expanded="false">
              <i class="ti ti-map"></i> Map
            </a>
            <ul class="collapse" id="maps">
              <li><a href="google-map.html">Google Maps</a></li>
              <li><a href="leaflet-map.html">Leaflet map</a></li>
              <li><a href="vector-map.html">Vector map</a></li>
            </ul>
          </li>
          <li>
            <a class="" data-bs-toggle="collapse" href="#chart" aria-expanded="false">
              <i class="ti ti-chart-pie"></i> Chart
            </a>
            <ul class="collapse" id="chart">
              <li class="another-level">
                <a class="" data-bs-toggle="collapse" href="#chartjs-page" aria-expanded="false">
                  Chart js
                </a>
                <ul class="collapse" id="chartjs-page">
                  <li><a href="chartjs.html">Chart js</a></li>
                </ul>
              </li>
              <li class="another-level">
                <a class="" data-bs-toggle="collapse" href="#apexcharts-page" aria-expanded="false">
                  Apexcharts
                </a>
                <ul class="collapse" id="apexcharts-page">
                  <li><a href="line.html">Line</a></li>
                  <li><a href="area_charts.html">Area</a></li>
                  <li><a href="column.html">Column</a></li>
                  <li><a href="bar.html">Bar</a></li>
                  <li><a href="mixed.html">Mixed</a></li>
                  <li><a href="timeline_range_charts.html">Timeline & Range-Bars</a></li>
                  <li><a href="candlestick_charts.html">Candlestick</a></li>
                  <li><a href="boxplot.html">Boxplot</a></li>
                  <li><a href="bubble.html">Bubble</a></li>
                  <li><a href="scatter.html">Scatter</a></li>
                  <li><a href="heatmap.html">Heatmap</a></li>
                  <li><a href="treemap.html">Treemap</a></li>
                  <li><a href="pie_charts.html">Pie</a></li>
                  <li><a href="radlaibar.html">Radialbar</a></li>
                  <li><a href="radar_chart.html">Radar</a></li>
                </ul>
              </li>
            </ul>
          </li>

          <li class="menu-title"> <span>Table & forms </span></li>

          <li>
            <a class="" data-bs-toggle="collapse" href="#table" aria-expanded="false">
              <i class="ti ti-table"></i> Table
            </a>
            <ul class="collapse" id="table">
              <li><a href="basic_table.html">BasicTable</a></li>
              <li><a href="data_table.html">Data Table</a></li>
              <li><a href="list_table.html">List Js</a></li>
              <li><a href="advance_table.html">Advance Table</a></li>
            </ul>
          </li>


          <li>
            <a class="" data-bs-toggle="collapse" href="#forms" aria-expanded="false">
              <i class="ti ti-forms"></i> Forms elements
            </a>
            <ul class="collapse" id="forms">
              <li><a href="form_validation.html">Form Validation</a></li>
              <li><a href="base_inputs.html">Base Input</a></li>
              <li><a href="checkbox_radio.html">Checkbox & Radio</a></li>
              <li><a href="input_groups.html">Input Groups</a></li>
              <li><a href="input_masks.html">Input Masks</a></li>
              <li><a href="floating_labels.html">Floating Labels</a></li>
              <li><a href="date_picker.html">Datetimepicker</a></li>
              <li><a href="touchspin.html">Touchspin</a></li>
              <li><a href="select.html">Select2</a></li>
              <li><a href="switch.html">Switch</a></li>
              <li><a href="range_slider.html">Range Slider</a></li>
              <li><a href="typeahead.html">Typeahead</a></li>
              <li><a href="textarea.html">Textarea</a></li>
              <li><a href="clipboard.html">Clipboard</a></li>
              <li><a href="file_upload.html">File Upload</a></li>
              <li><a href="dual_listboxes.html">Dual List Boxes</a></li>
              <li><a href="default_forms.html">Default Forms</a></li>
            </ul>
          </li>

          <li>
            <a class="" data-bs-toggle="collapse" href="#ready_to_use" aria-expanded="false">
              <i class="ti ti-table-import"></i> Ready to use <span
                class="badge text-light-success badge-notification ms-2">New</span>
            </a>
            <ul class="collapse" id="ready_to_use">
              <li><a href="form_wizards.html">Form Wizards</a></li>
              <li><a href="form_wizard_1.html">Form Wizards 1</a></li>
              <li><a href="form_wizard_2.html">Form Wizards 2</a></li>
              <li><a href="ready_to_use_form.html">Ready To Use Form</a></li>
              <li><a href="ready_to_use_table.html">Ready To Use Tables</a></li>
            </ul>
          </li>

          <li class="menu-title"> <span>Pages</span></li>

          <li>
            <a class="" data-bs-toggle="collapse" href="#auth_pages" aria-expanded="false">
              <i class="ti ti-news"></i> Auth Pages
            </a>
            <ul class="collapse" id="auth_pages">
              <li><a href="sign_in.html">Sign In</a></li>
              <li><a href="sign_in_1.html">Sign In with Bg-image</a></li>
              <li><a href="sign_up.html">Sign Up</a></li>
              <li><a href="sign_up_1.html">Sign Up with Bg-image</a></li>
              <li><a href="pwd_reset.html">Password Reset</a></li>
              <li><a href="password_reset_1.html">Password Reset with Bg-image</a></li>
              <li><a href="pwd_create.html">Password Create</a></li>
              <li><a href="password_create_1.html">Password Create with Bg-image</a></li>
              <li><a href="lock_screen.html">Lock Screen</a></li>
              <li><a href="lock_screen_1.html">Lock Screen with Bg-image</a></li>
              <li><a href="two_step_verificathion.html">Two Step Verification</a></li>
              <li><a href="two_step_verificathion_1.html">Two Step Verification with Bg-image</a></li>
            </ul>
          </li>
          <li>
            <a class="" data-bs-toggle="collapse" href="#error_pages" aria-expanded="false">
              <i class="ti ti-article-off"></i> Error pages
            </a>
            <ul class="collapse" id="error_pages">
              <li><a href="error_400.html">Bad Request </a></li>
              <li><a href="error_403.html">Forbidden </a></li>
              <li><a href="error_404.html">Not Found</a></li>
              <li><a href="error_500.html">Internal Server</a></li>
              <li><a href="error_503.html">Service Unavailable</a></li>
            </ul>
          </li>

          <li>
            <a class="" data-bs-toggle="collapse" href="#other_pages" aria-expanded="false">
              <i class="ti ti-box-multiple"></i> Other pages
            </a>
            <ul class="collapse" id="other_pages">
              <li><a href="blank.html">Blank</a></li>
              <li><a href="maintaince.html">Maintenance</a></li>
              <li><a href="landing.html">Landing Page</a></li>
              <li><a href="coming_soon.html">Coming Soon</a></li>
              <li><a href="sitemap.html">Sitemap</a></li>
              <li><a href="privacy_policy.html">Privacy Policy</a></li>
              <li><a href="terms_condition.html">Terms &amp; Condition</a></li>
            </ul>
          </li>

          <li class="menu-title"> <span>Others</span></li>

          <li>
            <a class="" data-bs-toggle="collapse" href="#level" aria-expanded="false">
              <i class="ti ti-box-multiple-2"></i> 2 level
            </a>
            <ul class="collapse" id="level">
              <li><a href="#">Blank</a></li>
              <li class="another-level">
                <a class="" data-bs-toggle="collapse" href="#level2" aria-expanded="false">
                  Another level
                </a>
                <ul class="collapse" id="level2">
                  <li><a href="blank.html">Blank</a></li>
                </ul>
              </li>

            </ul>
          </li>
          <li class="no-sub">
            <a class="" href="document.html">
              <i class="ti ti-file-text"></i> Document
            </a>
          </li>

          <li class="no-sub">
            <a class="" href="https://desk.zoho.in/agent/lathemess/la-themes">
              <i class="ti ti-headset"></i> Support
            </a>
          </li>


        </ul>
      </div>

      <div class="menu-navs">
        <span class="menu-previous"><i class="ti ti-chevron-left"></i></span>
        <span class="menu-next"><i class="ti ti-chevron-right"></i></span>
      </div>

    </nav>
    <!-- Menu Navigation ends -->


    <div class="app-content">
      <div class="">

        <!-- Header Section starts -->
        <header class="header-main">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-6 d-flex align-items-center header-left">
                        <span class="header-toggle me-3">
                          <i class="ti ti-category"></i>
                        </span>

                        <div class="header-searchbar">
                          <form class="me-3 app-form app-icon-form " action="#">
                            <div class="position-relative">
                              <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                              <i class="ti ti-search text-dark"></i>
                            </div>
                          </form>
                        </div>
                      </div>

                      <div class="col-6 d-flex align-items-center justify-content-end header-right">
                        <ul class="d-flex align-items-center">
                          <li class="header-search">
                            <a href="#" class="d-block head-icon" role=button data-bs-toggle="offcanvas"
                              data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                              <i class="ti ti-search"></i>
                            </a>

                            <div class="offcanvas offcanvas-top search-canvas" tabindex="-1" id="offcanvasTop">
                              <div class="offcanvas-body">
                                <div class="d-flex align-items-center">
                                  <div class="flex-grow-1">
                                    <form class="me-3 app-form app-icon-form " action="#">
                                      <div class="position-relative">
                                        <input type="search" class="form-control" placeholder="Search..."
                                          aria-label="Search">
                                        <i class="ti ti-search f-s-15"></i>
                                      </div>
                                    </form>
                                  </div>
                                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                                </div>
                              </div>
                            </div>
                          </li>

                          <li class="header-language">
                            <div id="lang_selector" class="flex-shrink-0 dropdown">
                              <a href="#" class="d-block head-icon ps-0" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <div class="lang-flag lang-en ">
                                  <span class="flag rounded-circle overflow-hidden">
                                    <i class=""></i>
                                  </span>
                                </div>
                              </a>
                              <ul class="dropdown-menu language-dropdown dropdown-menu-end header-card border-0 p-0">
                                <li>
                                  <div class="card-header bg-primary py-2">
                                    <h5 class="text-white">language <span class="float-end"><i
                                          class="ti ti-language"></i></span></h5>
                                  </div>
                                </li>
                                <li class="lang lang-en selected dropdown-item p-2" title="US">
                                  <span class="d-flex align-items-center">
                                    <i class="flag-icon flag-icon-usa flag-icon-squared b-r-50 f-s-22"></i>
                                    <span class="ps-2 text-secondary">US</span>
                                  </span>
                                </li>
                                <li class="lang lang-pt dropdown-item p-2" title="FR">
                                  <span class="d-flex align-items-center">
                                    <i class="flag-icon flag-icon-fra flag-icon-squared b-r-50 f-s-22"></i>
                                    <span class="ps-2 text-secondary">Fracnce</span>
                                  </span>
                                </li>
                                <li class="lang lang-es dropdown-item p-2" title="UK">
                                  <span class="d-flex align-items-center">
                                    <i class="flag-icon flag-icon-gbr flag-icon-squared b-r-50 f-s-22"></i>
                                    <span class="ps-2 text-secondary">UK</span>
                                  </span>
                                </li>
                                <li class="lang lang-es dropdown-item p-2" title="IT">
                                  <span class="d-flex align-items-center">
                                    <i class="flag-icon flag-icon-ita flag-icon-squared b-r-50 f-s-22"></i>
                                    <span class="ps-2 text-secondary">Italy</span>
                                  </span>
                                </li>
                              </ul>
                            </div>

                          </li>

                          <li class="header-apps">
                            <div class="flex-shrink-0 app-dropdown">
                              <a href="#" class="d-block head-icon" data-bs-toggle="dropdown" data-bs-auto-close="true"
                                aria-expanded="false">
                                <i class="ti ti-apps"></i>
                              </a>
                              <div
                                class="dropdown-menu headerapp-dropdown dropdown-menu-center bg-transparent border-0">
                                <div class="card">
                                  <div class="card-header bg-primary">
                                    <h5 class="text-white">Shortcut
                                      <span><i class="ti ti-apps text-white"></i></span>
                                    </h5>
                                  </div>
                                  <div class="card-body">
                                    <div class="row row-cols-3">
                                      <div class="d-flex-center text-center mb-3">
                                        <a href="product.html">
                                          <span class="text-light-success h-60 w-60 d-flex-center b-r-100">
                                            <i class="ti ti-shopping-bag f-s-26"></i>
                                          </span>
                                          <p class="mt-2 f-w-500 text-muted">E-shop</p>
                                        </a>
                                      </div>
                                      <div class="d-flex-center text-center mb-3">
                                        <a href="email.html">
                                          <span class="text-light-primary h-60 w-60 d-flex-center b-r-100">
                                            <i class="ti ti-mail f-s-26"></i>
                                          </span>
                                          <p class="mt-2 f-w-500 text-muted">Email</p>
                                        </a>
                                      </div>
                                      <div class="d-flex-center text-center mb-3">
                                        <a href="chat.html">
                                          <span class="text-light-info h-60 w-60 d-flex-center b-r-100">
                                            <i class="ti ti-brand-hipchat f-s-26"></i>
                                          </span>
                                          <p class="mt-2 f-w-500 text-muted">Chat</p>
                                        </a>
                                      </div>
                                      <div class="d-flex-center text-center">
                                        <a href="project.html">
                                          <span class="text-light-warning h-60 w-60 d-flex-center b-r-100">
                                            <i class="ti ti-presentation f-s-26"></i>
                                          </span>
                                          <p class="mt-2 f-w-500 text-muted">Project</p>
                                        </a>
                                      </div>
                                      <div class="d-flex-center text-center">
                                        <a href="invoice.html">
                                          <span class="text-light-secondary h-60 w-60 d-flex-center b-r-100">
                                            <i class="ti ti-file-dollar f-s-26"></i>
                                          </span>
                                          <p class="mt-2 f-w-500 text-muted">Invoice</p>
                                        </a>
                                      </div>
                                      <div class="d-flex-center text-center">
                                        <a href="blog.html">
                                          <span class="text-light-danger h-60 w-60 d-flex-center b-r-100">
                                            <i class="ti ti-news f-s-26"></i>
                                          </span>
                                          <p class="mt-2 f-w-500 text-muted">Blog</p>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-footer">
                                    <button type="button" class="btn btn-primary w-100"><i class="ti ti-plus"></i> View
                                      More</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>

                          <li class="header-cart d-none d-sm-block">
                            <div class="flex-shrink-0 app-dropdown">
                              <a href="#" class="d-block head-icon position-relative" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" aria-expanded="false">
                                <i class="ti ti-shopping-cart"></i>
                                <span
                                  class="position-absolute translate-middle badge rounded-pill bg-danger badge-notification">4</span>
                              </a>
                              <div class="dropdown-menu dropdown-menu-end bg-transparent border-0">
                                <div class="card">
                                  <div class="card-header bg-primary">
                                    <h5 class="text-white">Cart <span class="float-end"><i
                                          class="ti ti-shopping-cart"></i></span></h5>
                                  </div>
                                  <div class="card-body p-0">
                                    <div class="head-container app-scroll">
                                      <div class="head-box">
                                        <img src="../assets/images/ecommerce/10.png" alt="cart"
                                          class="h-50 me-2 bg-light-secondary p-1 b-r-100">
                                        <div class="flex-grow-1">
                                          <a class="mb-0 text-dark f-w-500" href="product_details.html"> Headphone
                                          </a>
                                          <p class="text-muted">$95 x 2</p>
                                        </div>
                                        <div class="text-end">
                                          <i class="ti ti-x text-dark f-s-15 close-btn"></i>
                                          <div>
                                            <i class="ti ti-star-filled text-warning f-s-12"></i>
                                            <i class="ti ti-star-filled text-warning f-s-12"></i>
                                            <i class="ti ti-star-filled text-warning f-s-12  star-filled"></i>
                                            <i class="ti ti-star-filled f-s-12 star-filled"></i>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="head-box">
                                        <img src="../assets/images/ecommerce/07.png" alt="cart"
                                          class="h-50 object-fit-cover me-2 bg-light-dark p-1 b-r-100">
                                        <div class="flex-grow-1">
                                          <a class="mb-0 text-dark f-w-500" href="product_details.html"> Smart Watch</a>
                                          <p class="text-muted">$50.00</p>
                                        </div>
                                        <div class="text-end">
                                          <i class="ti ti-x text-dark f-s-15 close-btn"></i>
                                          <div>
                                            <i class="ti ti-star-filled text-warning f-s-12"></i>
                                            <i class="ti ti-star-filled text-warning f-s-12"></i>
                                            <i class="ti ti-star-filled text-warning f-s-12  star-filled"></i>
                                            <i class="ti ti-star-filled f-s-12 star-filled"></i>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="head-box">
                                        <img src="../assets/images/ecommerce/02.png" alt="cart"
                                          class="h-50 object-fit-cover me-2 bg-light-dark p-1 b-r-100">
                                        <div class="flex-grow-1">
                                          <a class="mb-0 text-dark f-w-500" href="product_details.html">Shoes Black</a>
                                          <p class="text-muted">$150.00</p>
                                        </div>
                                        <div class="text-end">
                                          <i class="ti ti-x text-dark f-s-15 close-btn"></i>
                                          <div>
                                            <i class="ti ti-star-filled text-warning f-s-12"></i>
                                            <i class="ti ti-star-filled text-warning f-s-12"></i>
                                            <i class="ti ti-star-filled f-s-12  star-filled"></i>
                                            <i class="ti ti-star-filled f-s-12 star-filled"></i>
                                          </div>

                                        </div>
                                      </div>
                                      <div class="head-box ">
                                        <img src="../assets/images/ecommerce/04.png" alt="cart"
                                          class="h-50 object-fit-cover me-2 bg-light-dark p-1 b-r-100">
                                        <div class="flex-grow-1">
                                          <a class="mb-0 text-dark f-w-500" href="product_details.html"> Sports
                                            shoes</a>
                                          <p class="text-muted">$200.00</p>
                                        </div>
                                        <div class="text-end">
                                          <i class="ti ti-x text-dark f-s-15 close-btn last-box"></i>
                                          <div>
                                            <i class="ti ti-star-filled text-warning f-s-12"></i>
                                            <i class="ti ti-star-filled text-warning f-s-12"></i>
                                            <i class="ti ti-star-filled text-warning f-s-12  star-filled"></i>
                                            <i class="ti ti-star-filled text-warning  f-s-12 star-filled"></i>
                                          </div>

                                        </div>
                                      </div>
                                      <div class="hidden-massage py-4 px-3">
                                        <img src="../assets/images/icons/cart.png" alt="cart" class="w-50 h-50 mb-3">
                                        <div>
                                          <h6 class="mb-0">Your Cart is Empty</h6>
                                          <p class="text-secondary mb-0">Add some items :)</p>
                                          <a class="btn btn-light-primary btn-xs mt-2" href="product_details.html">Shop
                                            Now</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-footer">
                                    <div class="mb-2">
                                      <h6 class="text-muted">Total <span class="float-end text-dark f-w-600">$495.00
                                        </span></h6>
                                    </div>
                                    <button type="button" class="btn btn-primary w-100">
                                      <i class="ti ti-shopping-cart"></i> Checkout</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>

                          <li class="header-dark head-icon">
                            <div class="sun-logo">
                              <i class="ti ti-moon-off"></i>
                            </div>
                            <div class="moon-logo">
                              <i class="ti ti-moon-filled"></i>
                            </div>
                          </li>

                          <li class="header-notification">
                            <div class="flex-shrink-0 app-dropdown">
                              <a href="#" class="d-block head-icon position-relative" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" aria-expanded="false">
                                <i class="ti ti-bell"></i>
                                <span
                                  class="position-absolute translate-middle p-1 bg-success border border-light rounded-circle animate__animated animate__fadeIn animate__infinite animate__slower"></span>
                              </a>
                              <div class="dropdown-menu dropdown-menu-end bg-transparent border-0">
                                <div class="card">
                                  <div class="card-header bg-primary">
                                    <h5 class="text-white">Notification <span class="float-end">
                                        <i class="ti ti-bell text-white"></i></span></h5>
                                  </div>
                                  <div class="card-body p-0">
                                    <div class="head-container app-scroll">
                                      <div class="head-box">
                                        <span class="bg-secondary h-35 w-35 d-flex-center b-r-50 position-relative">
                                          <img src="../assets/images/ai_avtar/6.jpg" alt="" class="img-fluid b-r-50">
                                          <span
                                            class="position-absolute bottom-0 end-0 p-1 bg-secondary border border-light rounded-circle"></span>
                                        </span>
                                        <div class="flex-grow-1 ps-2">
                                          <h6 class="mb-0 ">Gene Hart</h6>
                                          <p class="text-secondary f-s-13"> New account created</p>
                                        </div>
                                        <div class="text-end">
                                          <i class="ti ti-x text-dark f-s-15 close-btn"></i>
                                          <p class="f-s-12 text-muted">sep 23</p>
                                        </div>
                                      </div>
                                      <div class="head-box">
                                        <span class="text-light-primary h-40 w-40 d-flex-center b-r-50">
                                          <i class="ti ti-gift text-primary f-s-22"></i>
                                        </span>
                                        <div class="flex-grow-1 ps-2">
                                          <h6 class="mb-0">Gift-Voucher</h6>
                                          <p class="text-secondary f-s-13">50% sale active</p>
                                        </div>
                                        <div class="text-end">
                                          <i class="ti ti-x text-dark f-s-15 close-btn"></i>
                                          <p class="f-s-12 text-muted">min 02</p>
                                        </div>
                                      </div>
                                      <div class="head-box">
                                        <span class="bg-secondary h-35 w-35 d-flex-center b-r-50 position-relative">
                                          <img src="../assets/images/ai_avtar/4.jpg" alt="" class="img-fluid b-r-50">
                                          <span
                                            class="position-absolute bottom-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
                                        </span>
                                        <div class="flex-grow-1 ps-2">
                                          <h6 class="mb-0">Simon Young</h6>
                                          <p class="text-secondary f-s-13">Hello ..!</p>
                                        </div>
                                        <div class="text-end">
                                          <i class="ti ti-x text-dark f-s-15 close-btn"></i>
                                          <p class="f-s-12 text-muted">Oct 10</p>
                                        </div>
                                      </div>
                                      <div class="head-box">
                                        <span class="text-light-success h-40 w-40 d-flex-center b-r-50">
                                          <i class="ti ti-shopping-cart text-success f-s-22"></i>
                                        </span>
                                        <div class="flex-grow-1 ps-2">
                                          <h6 class="mb-0">Order Massage</h6>
                                          <p class="text-secondary f-s-13">Purchase ecommerce..</p>
                                        </div>
                                        <div class="text-end">
                                          <i class="ti ti-x text-dark f-s-15 close-btn"></i>
                                          <p class="f-s-12 text-muted">day 4</p>
                                        </div>
                                      </div>
                                      <div class="hidden-massage py-4 px-3">
                                        <img src="../assets/images/icons/bell.png" class="w-50 h-50 mb-3 mt-2" alt="">
                                        <div>
                                          <h6 class="mb-0">Notification Not Found</h6>
                                          <p class="text-secondary">When you have any notifications added here,will
                                            appear here.
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-footer">
                                    <button type="button" class="btn btn-primary w-100">
                                      <i class="ti ti-plus"></i> View All</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>

                          <li class="header-profile">
                            <div class="flex-shrink-0 dropdown">
                              <a href="#" class="d-block head-icon pe-0" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="../assets/images/avtar/woman.jpg" alt="mdo" class="rounded-circle h-35 w-35">
                              </a>
                              <ul class="dropdown-menu dropdown-menu-end header-card border-0 px-2">
                                <li class="dropdown-item d-flex align-items-center p-2">
                                  <span class="h-35 w-35 d-flex-center b-r-50 position-relative">
                                    <img src="../assets/images/avtar/woman.jpg" alt="" class="img-fluid b-r-50">
                                    <span
                                      class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle animate__animated animate__fadeIn animate__infinite animate__fast"></span>
                                  </span>
                                  <div class="flex-grow-1 ps-2">
                                    <h6 class="mb-0"> Ninja Monaldo</h6>
                                    <p class="f-s-12 mb-0 text-secondary">Web Designer</p>
                                  </div>
                                </li>

                                <li class="app-divider-v dotted my-1"></li>
                                <li>
                                  <a class="dropdown-item" href="profile.html">
                                    <i class="ti ti-user-circle pe-1 f-s-18"></i> Profile Detaiils
                                  </a>
                                </li>
                                <li>
                                  <a class="dropdown-item" href="#">
                                    <i class="ti ti-notification pe-1 f-s-18"></i> Notification
                                  </a>
                                </li>

                                <li class="app-divider-v dotted my-1"></li>
                                <li>
                                  <a class="dropdown-item" href="#">
                                    <i class="ti ti-help pe-1 f-s-18"></i> Help
                                  </a>
                                </li>
                                <li>
                                  <a class="dropdown-item" href="faq.html">
                                    <i class="ti ti-file-dollar pe-1 f-s-18"></i> FAQ
                                  </a>
                                </li>
                                <li>
                                  <a class="dropdown-item" href="pricing.html">
                                    <i class="ti ti-currency-dollar pe-1 f-s-18"></i> Pricing
                                  </a>
                                </li>
                                <li class="app-divider-v dotted my-1"></li>
                                <li class="btn-light-danger b-r-5">
                                  <a class="dropdown-item mb-0 text-danger" href="sign_in.html">
                                    <i class="ti ti-logout pe-1 f-s-18 text-danger"></i> Log Out
                                  </a>
                                </li>

                              </ul>
                            </div>

                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>
        <!-- Header Section ends -->

        <!-- Body main section starts -->

        <!-- file-modal start -->
        <div class="file-modal">
          <div class="modal fade" id="file-modals" tabindex="-1" aria-labelledby="file-modals" aria-hidden="true">
            <div class="modal-dialog app_modal_md">
              <div class="modal-content">
                <div class="modal-header bg-primary-800">
                  <h1 class="modal-title fs-5 text-white" id="file-modal">Create Folder</h1>
                  <button type="button" class="fs-5 border-0  bg-none text-white" data-bs-dismiss="modal"
                    aria-label="Close"><i class="fa-solid fa-xmark fs-3"></i></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="mb-4">
                      <label for="file-foldername-input" class="form-label">Folder Name</label>
                      <input type="text" class="form-control" id="file-foldername-input" required=""
                        placeholder="Enter folder name">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-light-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- file-modal end -->

        <main>
          <div class="container-fluid">
            <div class="row project_dashboard">
              <!-- Cards -->
              <div class="col-md-6 col-lg-3">
                <div class="card project-cards">
                  <div class="card-body d-flex justify-content-between">
                    <div>
                      <h6>Total Projects<span class="badge text-success">3.1%</span></h6>

                      <div class="d-flex align-items-center gap-2 mt-2">
                        <h4 class=" text-success f-w-600 counting" data-count='499'></h4>

                        <p class="m-0 text-secondary">All Projects This Month</p>
                      </div>
                    </div>
                    <div class="project-card-icon project-success bg-light-success h-55 w-55 d-flex-center b-r-100">
                      <i class="ti ti-select f-s-30 mb-1"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="card project-cards">
                  <div class="card-body d-flex justify-content-between">
                    <div>
                      <h6>Running Project<span class="badge text-warning">0.20%</span></h6>

                      <div class="d-flex align-items-center gap-2 mt-2">
                        <h4 class=" text-warning f-w-600 counting" data-count='159'></h4>
                        <p class="m-0 text-secondary">Delayed This Month</p>
                      </div>
                    </div>
                    <div class="project-card-icon project-secondary bg-light-warning h-55 w-55 d-flex-center b-r-100">
                      <i class="ti ti-alarm-minus f-s-30 mb-1"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="card project-cards">
                  <div class="card-body d-flex justify-content-between">
                    <div>
                      <h6>Pending<span class="badge text-danger">2.10%</span></h6>

                      <div class="d-flex align-items-center gap-2 mt-2">
                        <h4 class=" text-danger f-w-600 counting" data-count='220'></h4>
                        <p class="m-0 text-secondary">Pending This Month</p>
                      </div>
                    </div>
                    <div class="project-card-icon project-danger bg-light-danger h-55 w-55 d-flex-center b-r-100">
                      <i class="ti ti-rotate-clockwise-2 f-s-30 mb-1"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="card project-cards">
                  <div class="card-body d-flex justify-content-between">
                    <div>
                      <h6 class="text-secondary">Finished Projects<span class="badge text-success">1.1%</span></h6>

                      <div class="d-flex align-items-center gap-2 mt-2">
                        <h4 class=" text-success f-w-600 counting inline" data-count='199'></h4>
                        <p class="m-0 text-secondary">Finished This Month</p>
                      </div>
                    </div>
                    <div class="project-card-icon project-primary bg-light-success h-60 w-60 d-flex-center b-r-100">
                      <i class="ti ti-browser-check f-s-36 mb-1"></i>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Cards end -->

              <!-- Project Team -->
              <div class="col-md-6 col-lg-4 col-xl-6">
                <div class="card">
                  <div class="card-header border-0 pb-1">
                    <h5>Project Team</h5>
                  </div>
                  <div class="card-body p-0">
                    <div class="app-scroll table-responsive">
                      <table class="table table-bottom-border table-box-hover  project-team-table align-middle  mb-0">
                        <thead>
                        <tr>
                          <th scope="col">Members</th>
                          <th scope="col">Task</th>
                          <th scope="col">Status</th>
                          <th scope="col">Hours</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                          <td>
                            <div class="position-relative">
                              <div class="position-absolute">
                                  <span class="bg-danger h-35 w-35 d-flex-center b-r-50 position-relative">
                                    <img src="../assets/images/avtar/1.png" alt="" class="img-fluid b-r-50">
                                    <span
                                            class="active-status position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
                                  </span>
                              </div>
                              <div class="ms-5">
                                <h6 class="mb-0">Mark McKenzie</h6>
                                <p class="text-secondary f-s-12 mb-0">Full Stack Developer</p>
                              </div>
                            </div>
                          </td>
                          <td><b>21</b></td>
                          <td><span class="badge text-outline-danger d-inline-flex-center"><span class="me-1 w-5 h-5 bg-danger d-inline-block b-r-10"></span> Pending</span></td>
                          <td class="f-w-500">3H 09M</td>
                        </tr>

                        <tr>
                          <td>
                            <div class="position-relative">
                              <div class="position-absolute">
                                  <span class="bg-warning h-35 w-35 d-flex-center b-r-50 position-relative">
                                    <img src="../assets/images/avtar/07.png" alt="" class="img-fluid b-r-50">
                                    <span class="active-status position-absolute top-0 end-0 p-1 bg-secondary border border-light rounded-circle"></span>
                                  </span>
                              </div>
                              <div class="ms-5">
                                <h6 class="mb-0">Smith Acres</h6>
                                <p class="text-secondary f-s-12 mb-0">UI/UX Designer</p>
                              </div>
                            </div>
                          </td>
                          <td> <b>12</b></td>
                          <td><span class="badge text-outline-warning d-inline-flex-center"><span class="me-1 w-5 h-5 bg-warning d-inline-block b-r-10"></span>Running</span></td>
                          <td class="f-w-500">1H 24M</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="position-relative">
                              <div class="position-absolute">
                                  <span class="bg-warning h-35 w-35 d-flex-center b-r-50 position-relative">
                                    <img src="../assets/images/avtar/1.png" alt="" class="img-fluid b-r-50">
                                    <span
                                            class="active-status position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
                                  </span>
                              </div>
                              <div class="ms-5">
                                <h6 class="mb-0">Emery McKenzie</h6>
                                <p class="text-secondary f-s-12 mb-0">UI/UX Designer</p>
                              </div>
                            </div>
                          </td>
                          <td> <b>5</b></td>
                          <td><span class="badge text-outline-warning d-inline-flex-center"><span class="me-1 w-5 h-5 bg-warning d-inline-block b-r-10"></span>Running</span></td>
                          <td class="f-w-500">1H 0M</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="position-relative">
                              <div class="position-absolute">
                                  <span class="bg-success h-35 w-35 d-flex-center b-r-50 position-relative">
                                    <img src="../assets/images/avtar/14.png" alt="" class="img-fluid b-r-50">
                                    <span
                                            class="active-status position-absolute top-0 end-0 p-1 bg-secondary border border-light rounded-circle"></span>
                                  </span>
                              </div>
                              <div class="ms-5">
                                <h6 class="mb-0">Lenora Bogisich</h6>
                                <p class="text-secondary f-s-12 mb-0">React Developer</p>
                              </div>
                            </div>
                          </td>
                          <td> <b>28</b></td>
                          <td><span class="badge text-outline-success d-inline-flex-center"><span class="me-1 w-5 h-5 bg-success d-inline-block b-r-10"></span>complate</span></td>
                          <td class="f-w-500">3H 19M</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="position-relative">
                              <div class="position-absolute">
                                  <span class="bg-success h-35 w-35 d-flex-center b-r-50 position-relative">
                                    <img src="../assets/images/avtar/3.png" alt="" class="img-fluid b-r-50">
                                    <span
                                            class="active-status position-absolute top-0 end-0 p-1 bg-secondary border border-light rounded-circle"></span>
                                  </span>
                              </div>
                              <div class="ms-5">
                                <h6 class="mb-0">Davis Welsh</h6>
                                <p class="text-secondary f-s-12  mb-0">UI/UX Designer</p>
                              </div>
                            </div>
                          </td>
                          <td> <b>9</b></td>
                          <td><span class="badge text-outline-success d-inline-flex-center"><span class="me-1 w-5 h-5 bg-success d-inline-block b-r-10"></span>complate</span></td>
                          <td class="f-w-500">1H 09M</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="position-relative">
                              <div class="position-absolute">
                                  <span class="bg-warning h-35 w-35 d-flex-center b-r-50 position-relative">
                                    <img src="../assets/images/avtar/16.png" alt="" class="img-fluid b-r-50">
                                    <span
                                            class="active-status position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
                                  </span>
                              </div>
                              <div class="ms-5">
                                <h6 class="mb-0">Fleta Walsh</h6>
                                <p class="text-secondary f-s-12 mb-0">Wed Designer</p>
                              </div>
                            </div>
                          </td>
                          <td> <b>20</b></td>
                          <td><span class="badge text-outline-warning d-inline-flex-center"><span class="me-1 w-5 h-5 bg-warning d-inline-block b-r-10"></span>Running</span></td>
                          <td class="f-w-500">2H 45M</td>

                        </tr>
                        <tr>
                          <td>
                            <div class="position-relative">
                              <div class="position-absolute">
                                  <span class="bg-secondary h-35 w-35 d-flex-center b-r-50 position-relative">
                                    <img src="../assets/images/avtar/08.png" alt="" class="img-fluid b-r-50">
                                    <span
                                            class="active-status position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
                                  </span>
                              </div>
                              <div class="ms-5">
                                <h6 class="mb-0">Amelia Dev</h6>
                                <p class="text-secondary f-s-12 mb-0">Backend Developer</p>
                              </div>
                            </div>
                          </td>
                          <td><b>10</b></td>
                          <td><span class="badge text-outline-danger d-inline-flex-center"><span class="me-1 w-5 h-5 bg-danger d-inline-block b-r-10"></span> Pending</span></td>
                          <td class="f-w-500">2H 45M</td>
                        </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Project Team end -->

              <!-- Budget Card -->
              <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="card">
                  <div class="card-header">
                    <h5>Budget</h5>
                  </div>
                  <div class="card-body">
                    <div class="card-light-light shadow-none">

                        <div class="budget-card">
                          <div>
                            <p class="mb-0 text-secondary">Budget Spent</p>
                            <h4 class="text-secondary text-nowrap">$ 681,945.00</h4>
                          </div>
                          <div>
                            <img src="../assets/images/dashboard/project/01.png" class="w-80" alt="">
                          </div>
                        </div>


                    </div>
                    <div>
                      <table class="table budget-table mb-0">
                        <tbody>
                          <tr>
                            <td>
                              <div class="position-relative">
                                <span class="bg-primary h-40 w-40 d-flex-center position-absolute b-r-10">
                                  <i class="ti ti-device-desktop-analytics f-s-18"></i>
                                </span>
                                <div class="ms-5">
                                  <h6 class="mb-0">Design</h6>
                                  <p class="text-secondary mb-0">$45,456.00</p>
                                </div>
                              </div>
                            </td>
                            <td class="text-end"><i class="ti ti-chevron-right text-secondary fs-4"></i></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="position-relative">
                                <span class="bg-danger h-40 w-40 d-flex-center position-absolute b-r-10">
                                  <i class="ti ti-box f-s-18"></i>
                                </span>
                                <div class="ms-5">
                                  <h6 class="mb-0">Development</h6>
                                  <p class="text-secondary mb-0">$68,290.00</p>
                                </div>
                              </div>
                            </td>
                            <td class="text-end"><i class="ti ti-chevron-right text-secondary fs-4"></i></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="position-relative">
                                <span class="bg-secondary h-40 w-40 d-flex-center position-absolute b-r-10">
                                  <i class="ti ti-brand-codesandbox f-s-18"></i>
                                </span>
                                <div class="ms-5">
                                  <h6 class="mb-0">UI/UX design</h6>
                                  <p class="text-secondary mb-0">$2,100.00</p>
                                </div>
                              </div>
                            </td>
                            <td class="text-end"><i class="ti ti-chevron-right text-secondary fs-4"></i></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="position-relative">
                                <span class="bg-success h-40 w-40 d-flex-center position-absolute b-r-10">
                                  <i class="ti ti-app-window f-s-18"></i>
                                </span>
                                <div class="ms-5">
                                  <h6 class="mb-0">Apps</h6>
                                  <p class="text-secondary mb-0">$50,100.00</p>
                                </div>
                              </div>
                            </td>
                            <td class="text-end"><i class="ti ti-chevron-right text-secondary fs-4"></i></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="position-relative">
                                <span class="bg-dark h-40 w-40 d-flex-center position-absolute b-r-10">
                                  <i class="ti ti-apps f-s-18"></i>
                                </span>
                                <div class="ms-5">
                                  <h6 class="mb-0">Other</h6>
                                  <p class="text-secondary mb-0">$5,856.00</p>
                                </div>
                              </div>
                            </td>
                            <td class="text-end"><i class="ti ti-chevron-right text-secondary fs-4"></i></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Budget Card end -->

              <!-- Chart card -->
              <div class="col-lg-4 col-xl-3">
                <div class="row">
                  <div class="col-sm-6 col-lg-12">
                    <div class="card project-report-card">
                      <div class="card-body ">
                        <div>
                          <p>Total Spent Hours</p>
                          <h6 class="mb-0">68H 60M <span class="f-s-12 text-success"><i
                                class="ti ti-arrow-up-right bg-light-success"></i> +16.98</span></h6>
                        </div>
                        <div>
                          <div id="myChart"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-12">
                    <div class="card project-report-card">
                      <div class="card-body">
                        <div>
                          <p class="text-secondary">Average Week Report</p>
                          <h6 class="mb-0">14H 09M <span class="f-s-12 text-danger"><i
                                class="ti ti-arrow-down-right bg-light-danger"></i> +25.08</span></h6>
                        </div>
                        <div>
                          <div id="myChart1"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Chart card end  -->

              <!-- calendar card start -->
              <div class="col-md-6 col-lg-4 order-1-md">
                <div class="apps-calendar mb-4">
                  <div class="calendar"></div>
                </div>
              </div>
              <!-- calendar card end -->

              <!-- Transactions card start -->
              <div class="col-md-6 col-lg-4">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex justify-content-between">
                      <h5>Transactions</h5>
                    </div>
                  </div>
                  <div class="card-body">
                    <div>
                      <table class="table project-transaction-table mb-0">
                        <tbody>
                          <tr>
                            <td>
                              <div class="position-relative">
                                <span class="text-light-primary h-40 w-40 d-flex-center b-r-50 position-absolute">
                                  <i class="ti ti-wallet f-s-18"></i>
                                </span>
                                <div class="ms-5">
                                  <h6 class="mb-0">Gideon</h6>
                                  <p class="text-secondary mb-0">Wallet</p>
                                </div>
                              </div>
                            </td>
                            <td class="text-end">
                              <h6 class="mb-0 f-w-400 text-success">+500.00$</h6>
                              <p class="f-s-12 text-secondary mb-0">01:35 PM</p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="position-relative">
                                <span class="text-light-warning h-40 w-40 d-flex-center b-r-50 position-absolute">
                                  <i class="ti ti-access-point f-s-18"></i>
                                </span>
                                <div class="ms-5">
                                  <h6 class="mb-0">Kane</h6>
                                  <p class="text-secondary mb-0">Online</p>
                                </div>
                              </div>
                            </td>
                            <td class="text-end">
                              <h6 class="mb-0 f-w-400 text-danger">-480.89$</h6>
                              <p class="f-s-12 text-secondary mb-0">04:00 AM</p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="position-relative">
                                <span class="text-light-success h-40 w-40 d-flex-center b-r-50 position-absolute">
                                  <i class="ti ti-trending-up-2 f-s-18"></i>
                                </span>
                                <div class="ms-5">
                                  <h6 class="mb-0">Refund</h6>
                                  <p class="text-secondary mb-0">Transfer</p>
                                </div>
                              </div>
                            </td>
                            <td class="text-end">
                              <h6 class="mb-0 f-w-400 text-danger">-687.57$</h6>
                              <p class="f-s-12 text-secondary mb-0">1D ago</p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="position-relative">
                                <span class="text-light-info h-40 w-40 d-flex-center b-r-50 position-absolute">
                                  <i class="ti ti-brand-mastercard f-s-18"></i>
                                </span>
                                <div class="ms-5">
                                  <h6 class="mb-0">Aletha</h6>
                                  <p class="text-secondary mb-0">Visa</p>
                                </div>
                              </div>
                            </td>
                            <td class="text-end">
                              <h6 class="mb-0 f-w-400 text-success">+900.00$</h6>
                              <p class="f-s-12 text-secondary mb-0">12:09 PM</p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="position-relative">
                                <span class="text-light-dark h-40 w-40 d-flex-center b-r-50 position-absolute">
                                  <i class="ti ti-cards f-s-18"></i>
                                </span>
                                <div class="ms-5">
                                  <h6 class="mb-0">Order</h6>
                                  <p class="text-secondary mb-0">Crdit Card</p>
                                </div>
                              </div>
                            </td>
                            <td class="text-end">
                              <h6 class="mb-0 f-w-400 text-danger">-1,094.00$</h6>
                              <p class="f-s-12 text-secondary mb-0">1W ago</p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="position-relative">
                                <span class="text-light-danger h-40 w-40 d-flex-center b-r-50 position-absolute">
                                  <i class="ti ti-currency-dollar f-s-18"></i>
                                </span>
                                <div class="ms-5">
                                  <h6 class="mb-0">Dorian</h6>
                                  <p class="text-secondary mb-0">Pay</p>
                                </div>
                              </div>
                            </td>
                            <td class="text-end">
                              <h6 class="mb-0 f-w-400 text-success">+200.00$</h6>
                              <p class="f-s-12 text-secondary mb-0">09:58 AM</p>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Transactions card end -->

              <!-- Project Documents card start -->
              <div class="col-md-6 col-lg-4">
                <div class="card">
                  <div class="card-header">
                    <h5>Project Documents</h5>
                  </div>
                  <div class="card-body">
                    <ul class="document-list">
                      <li>
                        <div>
                          <img src="../assets/images/icons/02.png" class="w-35" alt="">
                        </div>
                        <div class="flex-grow-1 ps-2">
                          <h6 class="mb-0">Admin</h6>
                          <p class="text-muted mb-0">1 GB</p>
                        </div>
                        <div>
                          <span class="text-light-secondary h-35 w-35 d-flex-center b-r-6">
                            <i class="ti ti-download f-s-18"></i>
                          </span>
                        </div>
                      </li>
                      <li>
                        <div>
                          <img src="../assets/images/icons/09.png" class="w-35" alt="">
                        </div>
                        <div class="flex-grow-1 ps-2">
                          <h6 class="mb-0">Projcet Design</h6>
                          <p class="text-muted mb-0">278MB</p>
                        </div>
                        <div>
                          <span class="text-light-secondary h-35 w-35 d-flex-center b-r-6">
                            <i class="ti ti-download f-s-18"></i>
                          </span>
                        </div>
                      </li>
                      <li>
                        <div>
                          <img src="../assets/images/icons/10.png" class="w-35" alt="">
                        </div>
                        <div class="flex-grow-1 ps-2">
                          <h6 class="mb-0">Project Files</h6>
                          <p class="text-muted mb-0">100MB</p>
                        </div>
                        <div>
                          <span class="text-light-secondary h-35 w-35 d-flex-center b-r-6">
                            <i class="ti ti-download f-s-18"></i>
                          </span>
                        </div>
                      </li>
                      <li>
                        <div>
                          <img src="../assets/images/icons/02.png" class="w-35" alt="">
                        </div>
                        <div class="flex-grow-1 ps-2">
                          <h6 class="mb-0">Project</h6>
                          <p class="text-muted mb-0">2GB</p>
                        </div>
                        <div>
                          <span class="text-light-secondary h-35 w-35 d-flex-center b-r-6">
                            <i class="ti ti-download f-s-18"></i>
                          </span>
                        </div>
                      </li>
                      <li>
                        <div>
                          <img src="../assets/images/icons/10.png" class="w-35" alt="">
                        </div>
                        <div class="flex-grow-1 ps-2">
                          <h6 class="mb-0">Document</h6>
                          <p class="text-muted mb-0">400MB</p>
                        </div>
                        <div>
                          <span class="text-light-secondary h-35 w-35 d-flex-center b-r-6">
                            <i class="ti ti-download f-s-18"></i>
                          </span>
                        </div>
                      </li>
                      <li>
                        <div>
                          <img src="../assets/images/icons/09.png" class="w-35" alt="">
                        </div>
                        <div class="flex-grow-1 ps-2">
                          <h6 class="mb-0">PDF</h6>
                          <p class="text-muted mb-0">10MB</p>
                        </div>
                        <div>
                          <span class="text-light-secondary h-35 w-35 d-flex-center b-r-6">
                            <i class="ti ti-download f-s-18"></i>
                          </span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- Project Documents card end -->

              <!-- Projects -->
              <div class="col-lg-8">
                <div class="card">
                  <div class="card-body p-0">
                    <div class="table-responsive app-scroll project-table">
                      <table id="projectTable" class="display app-data-table table-box-hover">
                        <thead>
                          <tr>
                            <th>
                              <div class="form-check d-flex">
                                <input class="form-check-input mg-2" type="checkbox" id="select-all">
                              </div>
                            </th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Leader</th>
                            <th>start Date</th>
                            <th>End Date</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check d-flex">
                                <input class="form-check-input mg-2" type="checkbox">
                              </div>
                            </td>
                            <td>
                              <div class="d-flex justify-content-left align-items-center">
                                <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden me-2">
                                  <img src="../assets/images/icons/logo4.png" alt="" class="img-fluid">
                                </div>
                                <div>
                                  <h6 class="f-s-15 mb-0">React</h6>
                                  <p class="text-secondary f-s-13 mb-0">23 Jun 2024</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <span class="badge text-light-danger">New</span>
                            </td>
                            <td class="f-w-500 text-dark">Keith</td>
                            <td class="f-w-500 text-success">Dec 07, 2024</td>
                            <td class="f-w-500 text-danger">Dec 26, 2024</td>
                            <td>
                              <div class="dropdown taxt-center">
                                <button class="bg-none border-0" type="button" data-bs-toggle="dropdown"
                                  aria-expanded="false">
                                  <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                  <li>
                                    <a class="dropdown-item" href="#">
                                      <i class="ti ti-edit text-success"></i> Edit
                                    </a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="#">
                                      <i class="ti ti-trash text-danger"></i> Delete
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check d-flex">
                                <input class="form-check-input mg-2" type="checkbox">
                              </div>
                            </td>
                            <td>
                              <div class="d-flex justify-content-left align-items-center">
                                <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden me-2">
                                  <img src="../assets/images/icons/logo11.png" alt="" class="img-fluid">
                                </div>
                                <div>
                                  <h6 class="f-s-15 mb-0">Node js</h6>
                                  <p class="text-secondary f-s-13 mb-0">2 apr 2024</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <span class="badge text-light-secondary">Completed</span>
                            </td>
                            <td class="f-w-500 text-dark">Merline</td>
                            <td class="f-w-500 text-success">Jul 27, 2024</td>
                            <td class="f-w-500 text-danger">Jan 06, 2025</td>
                            <td>
                              <div class="dropdown taxt-center">
                                <button class="bg-none border-0" type="button" data-bs-toggle="dropdown"
                                  aria-expanded="false">
                                  <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                  <li>
                                    <a class="dropdown-item" href="#">
                                      <i class="ti ti-edit text-success"></i> Edit
                                    </a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="#">
                                      <i class="ti ti-trash text-danger"></i> Delete
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check d-flex">
                                <input class="form-check-input mg-2" type="checkbox">
                              </div>
                            </td>
                            <td>
                              <div class="d-flex justify-content-left align-items-center">
                                <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden me-2">
                                  <img src="../assets/images/icons/logo1.png" alt="" class="img-fluid">
                                </div>
                                <div>
                                  <h6 class="f-s-15 mb-0">Html</h6>
                                  <p class="text-secondary f-s-13 mb-0">22 Jun 2024</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <span class="badge text-light-danger">New</span>
                            </td>
                            <td class="f-w-500 text-dark">K Fred</td>
                            <td class="f-w-500 text-success">Aug 21, 2024</td>
                            <td class="f-w-500 text-danger">Apr 04, 2024</td>
                            <td>
                              <div class="dropdown taxt-center">
                                <button class="bg-none border-0" type="button" data-bs-toggle="dropdown"
                                  aria-expanded="false">
                                  <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                  <li>
                                    <a class="dropdown-item" href="#">
                                      <i class="ti ti-edit text-success"></i> Edit
                                    </a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="#">
                                      <i class="ti ti-trash text-danger"></i> Delete
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check d-flex">
                                <input class="form-check-input mg-2" type="checkbox">
                              </div>
                            </td>
                            <td>
                              <div class="d-flex justify-content-left align-items-center">
                                <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden me-2">
                                  <img src="../assets/images/icons/logo2.png" alt="" class="img-fluid">
                                </div>
                                <div>
                                  <h6 class="f-s-15 mb-0">tailwind </h6>
                                  <p class="text-secondary f-s-13 mb-0">23 Oct 2024</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <span class="badge text-light-warning">Pending</span>
                            </td>
                            <td class="f-w-500 text-dark">Genevra</td>
                            <td class="f-w-500 text-success">Nov 30, 2024</td>
                            <td class="f-w-500 text-danger">Dec 10, 2025</td>
                            <td>
                              <div class="dropdown taxt-center">
                                <button class="bg-none border-0" type="button" data-bs-toggle="dropdown"
                                  aria-expanded="false">
                                  <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                  <li>
                                    <a class="dropdown-item" href="#">
                                      <i class="ti ti-edit text-success"></i> Edit
                                    </a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="#">
                                      <i class="ti ti-trash text-danger"></i> Delete
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check d-flex">
                                <input class="form-check-input mg-2" type="checkbox">
                              </div>
                            </td>
                            <td>
                              <div class="d-flex justify-content-left align-items-center">
                                <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden me-2">
                                  <img src="../assets/images/icons/logo5.png" alt="" class="img-fluid">
                                </div>
                                <div>
                                  <h6 class="f-s-15 mb-0">Vue Js</h6>
                                  <p class="text-secondary f-s-13 mb-0">Dec 01, 2024</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <span class="badge text-light-success">Inprogress</span>
                            </td>
                            <td class="f-w-500 text-dark">Murazik</td>
                            <td class="f-w-500 text-success">Dec 01, 2024</td>
                            <td class="f-w-500 text-danger">Mar 20, 2025</td>
                            <td>
                              <div class="dropdown taxt-center">
                                <button class="bg-none border-0" type="button" data-bs-toggle="dropdown"
                                  aria-expanded="false">
                                  <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                  <li>
                                    <a class="dropdown-item" href="#">
                                      <i class="ti ti-edit text-success"></i> Edit
                                    </a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="#">
                                      <i class="ti ti-trash text-danger"></i> Delete
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check d-flex">
                                <input class="form-check-input mg-2" type="checkbox">
                              </div>
                            </td>
                            <td>
                              <div class="d-flex justify-content-left align-items-center">
                                <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden me-2">
                                  <img src="../assets/images/icons/logo14.png" alt="" class="img-fluid">
                                </div>
                                <div>
                                  <h6 class="f-s-15 mb-0">python</h6>
                                  <p class="text-secondary f-s-13 mb-0">Feb 28, 2024</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <span class="badge text-light-success">Inprogress</span>
                            </td>
                            <td class="f-w-500 text-dark">Fleta</td>
                            <td class="f-w-500 text-success">Jul 24, 2024</td>
                            <td class="f-w-500 text-danger">Feb 04, 2024</td>
                            <td>
                              <div class="dropdown taxt-center">
                                <button class="bg-none border-0" type="button" data-bs-toggle="dropdown"
                                  aria-expanded="false">
                                  <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                  <li>
                                    <a class="dropdown-item" href="#">
                                      <i class="ti ti-edit text-success"></i> Edit
                                    </a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="#">
                                      <i class="ti ti-trash text-danger"></i> Delete
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check d-flex">
                                <input class="form-check-input mg-2" type="checkbox">
                              </div>
                            </td>
                            <td>
                              <div class="d-flex justify-content-left align-items-center">
                                <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden me-2">
                                  <img src="../assets/images/icons/logo13.png" alt="" class="img-fluid">
                                </div>
                                <div>
                                  <h6 class="f-s-15 mb-0">XD</h6>
                                  <p class="text-secondary f-s-13 mb-0">Jan 19, 2024</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <span class="badge text-light-dark">New</span>
                            </td>
                            <td class="f-w-500 text-dark">Bette</td>
                            <td class="f-w-500 text-success">Feb 29, 2024</td>
                            <td class="f-w-500 text-danger">Mar 12, 2024</td>
                            <td>
                              <div class="dropdown taxt-center">
                                <button class="bg-none border-0" type="button" data-bs-toggle="dropdown"
                                  aria-expanded="false">
                                  <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                  <li>
                                    <a class="dropdown-item" href="#">
                                      <i class="ti ti-edit text-success"></i> Edit
                                    </a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="#">
                                      <i class="ti ti-trash text-danger"></i> Delete
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Projects end -->

              <!-- Earnining chart start -->
              <div class="col-md-6 col-lg-4 order-2-md">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex justify-content-between">
                      <h5>Total Earning Reports</h5>
                      <div class="dropdown">
                        <a aria-label="anchor" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="ti ti-dots-vertical f-s-17 text-secondary"></i>
                        </a>
                        <ul class="dropdown-menu border">
                          <li><a class="dropdown-item" href="#">View More</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <ul class="nav nav-tabs app-tabs-primary border-0" id="Basic" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="week-tab" data-bs-toggle="tab"
                          data-bs-target="#week-tab-pane" type="button" role="tab" aria-controls="week-tab-pane"
                          aria-selected="false" tabindex="-1">Week</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="month-tab" data-bs-toggle="tab" data-bs-target="#month-tab-pane"
                          type="button" role="tab" aria-controls="month-tab-pane" aria-selected="true">Month</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="year-tab" data-bs-toggle="tab" data-bs-target="#year-tab-pane"
                          type="button" role="tab" aria-controls="year-tab-pane" aria-selected="false"
                          tabindex="-1">Year</button>
                      </li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane fade show active" id="week-tab-pane" role="tabpanel" tabindex="0">
                        <div id="weekearningChart"></div>
                        <div>
                          <h6 class="header-heading mb-0">Earning This Week</h6>
                          <p class="text-secondary mb-0">$450.00 less than last week</p>
                        </div>
                      </div>

                      <div class="tab-pane fade show" id="month-tab-pane" role="tabpanel" tabindex="0">
                        <div id="monthearningChart"></div>
                        <div>
                          <h6 class="header-heading mb-0">Earning This Month</h6>
                          <p class="text-secondary mb-0">$1k less than last week</p>
                        </div>
                      </div>

                      <div class="tab-pane fade show" id="year-tab-pane" role="tabpanel" tabindex="0">
                        <div id="yearearningChart"></div>
                        <div>
                          <h6 class="header-heading mb-0">Earning This Year</h6>
                          <p class="text-secondary mb-0">$84,891.00 less than last week</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Earnining chart end -->

            </div>
          </div>
        </main>

      </div>
    </div>
    <!-- Body main section ends -->


    <!-- tap on top -->
    <div class="go-top">
      <span class="progress-value">
        <i class="ti ti-arrow-up"></i>
      </span>
    </div>


    <!-- Footer Section starts-->
    <footer>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-9 col-12">
            <ul class="footer-text">
              <li>
                <p class="mb-0">Copyright © 2024 AdminX. All rights reserved.</p>
              </li>
              <li> <a href="#"> V1.0.0 </a></li>
            </ul>
          </div>
          <div class="col-sm-3">
            <ul class="footer-text text-end">
              <li> <a href="https://desk.zoho.in/agent/lathemess/la-themes"> Need Help <i class="ti ti-help"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Section ends-->
  </div>

  <!-- essential   -->

  <!--customizer-->
  <div id="customizer"></div>

  <!-- latest jquery-->
  <script src="{{ asset('assets/js/jquery-3.6.3.min.js') }}"></script>

  <!-- Simple bar js-->
  <script src="{{ asset('assets/vendor/simplebar/simplebar.js') }}"></script>
  
  <!-- chart js -->
  <script src="{{ asset('assets/vendor/chartjs/chart.js') }}"></script>
  
  <!-- latest jquery-->
  <script src="{{ asset('assets/vendor/datatable/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/datatable/datatable2/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/datatable/datatable2/jszip.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/datatable/datatable2/pdfmake.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/datatable/datatable2/vfs_fonts.js') }}"></script>
  <script src="{{ asset('assets/vendor/datatable/datatable2/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/datatable/datatable2/buttons.print.min.js') }}"></script>
  
  <!-- data table js-->
  <script src="{{ asset('assets/js/data_table.js') }}"></script>
  
  <!-- slick-file -->
  <script src="{{ asset('assets/vendor/slick/slick.min.js') }}"></script>
  
  <!-- apexcharts -->
  <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  
  <!-- pignose-Calendar js  -->
  <script src="{{ asset('assets/vendor/pignose-Calendar/pignose.calendar.full.min.js') }}"></script>
  
  <!-- Customizer js-->
  <script src="{{ asset('assets/js/customizer.js') }}"></script>
  
  <!-- Project Dashboard js-->
  <script src="{{ asset('assets/js/project_dashboard.js') }}"></script>
  
  <!-- Bootstrap js-->
  <script src="{{ asset('assets/vendor/bootstrap/bootstrap.bundle.min.js') }}"></script>
  
  <!-- App js-->
  <script src="{{ asset('assets/js/script.js') }}"></script>
  
  <!-- prism js-->
  <script src="{{ asset('assets/vendor/prism/prism.min.js') }}"></script>
  


</body>


<!-- Mirrored from phpstack-1384472-5121645.cloudwaysapps.com/template/html/adminx/template/project_dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Feb 2025 09:39:59 GMT -->
</html>