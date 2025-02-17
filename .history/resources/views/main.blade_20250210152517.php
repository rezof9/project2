<!DOCTYPE html>
<html lang="zxx">
    
<!-- Mirrored from srbthemes.kcubeinfotech.com/kleon/html/index-project.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Feb 2025 06:16:19 GMT -->
<head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="description" content="Kleon Admin Template">
        <meta name="author" content="">

        <!-- Favicon and touch Icons -->
    <!-- Favicon and touch Icons -->
<link href="{{ asset('assets/img/favicon.png') }}" rel="shortcut icon" type="image/png">
<link href="{{ asset('assets/img/apple-touch-icon.html') }}" rel="apple-touch-icon">
<link href="{{ asset('assets/img/apple-touch-icon-72x72.html') }}" rel="apple-touch-icon" sizes="72x72">
<link href="{{ asset('assets/img/apple-touch-icon-114x114.html') }}" rel="apple-touch-icon" sizes="114x114">
<link href="{{ asset('assets/img/apple-touch-icon-144x144.html') }}" rel="apple-touch-icon" sizes="144x144">

<!-- Page Title -->
<title>Kleon Admin Template</title>

<!-- Styles Include -->
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" id="stylesheet">
    </head>


    <body class="bg-light has-right-panel forFixedNav layout-horizontal-nav">
        
        <!-- Preloader -->
        <div id="preloader">
            <div class="preloader-inner">
                <div class="spinner"></div>
                <div class="logo"><img src="assets/img/logo-icon.svg" alt="img"></div>
            </div>
        </div>

     <!-- Default Nav -->
     <header class="header kleon-default-nav">				
        <div class="d-none d-xl-block">
            <div class="header-inner d-flex align-items-center justify-content-around justify-content-xl-between flex-wrap flex-xl-nowrap gap-3 gap-xl-5">
                <div class="header-left-part d-flex align-items-center flex-grow-1 w-100">
                    <div class="header-search w-100">
                        <form class="search-form" action="https://srbthemes.kcubeinfotech.com/kleon/html/search.php">
                            <input type="text" name="search" class="keyword form-control w-100" placeholder="Search">
                            <button type="submit" class="btn"><img src="assets/img/svg/search.svg" alt=""></button>
                        </form>
                    </div>
                </div>

                <div class="header-right-part d-flex align-items-center flex-shrink-0">
                    <ul class="nav-elements d-flex align-items-center list-unstyled m-0 p-0">
                        <li class="nav-item nav-color-switch d-flex align-items-center gap-3">
                            <div class="sun"><img src="assets/img/sun.svg" alt="img"></div>
                            <div class="switch">
                                <input type="checkbox" id="colorSwitch" value="false" name="defaultMode">
                                <div class="shutter">
                                    <span class="lbl-off"></span>
                                    <span class="lbl-on"></span>
                                    <div class="slider bg-primary"></div>
                                </div>
                            </div>
                            <div class="moon"><img src="assets/img/moon.svg" alt="img"></div>
                        </li>

                        <li class="nav-item nav-flag">
                            <select class="kleon-select-single nav-toggler-content">
                                <option selected value="en">Eng(US)</option>
                                <option value="fr">French</option>
                                <option value="de">German</option>
                                <option value="sp">Spanish</option>
                            </select>
                        </li>
                        
                        <li class="nav-item nav-notification dropdown">
                            <a href="#" class="nav-toggler" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assets/img/svg/bell.svg" alt="bell">
                                <div class="badge rounded-circle">12</div>
                            </a>
                            <div class="dropdown-widget dropdown-menu p-0">
                                <div class="dropdown-wrapper pd-50">
                                    <div class="dropdown-wrapper--title">
                                        <h4 class="d-flex align-items-center justify-content-between">Notifications <a href="#">View All</a></h4>
                                    </div>
                                    <ul class="notification-board list-unstyled">
                                        <li class="author-online has-new-message d-flex gap-3">
                                            <div class="media bg-primary text-white">
                                                <i class="bi bi-lightning"></i>
                                            </div>
                                            <div class="user-message">
                                                <h6 class="message"><a href="#">Jackie Kun</a> mentioned you at <a href="#">Kleon Projects</a></h6>
                                                <p class="message-footer d-flex align-items-center justify-content-between"> <span class="fs-14 text-gray fw-normal">2m ago</span> <span>Mark as read</span></p>
                                            </div>
                                        </li>
                                        <li class="author-online has-new-message d-flex gap-3">
                                            <div class="media bg-secondary text-white">
                                                <i class="bi bi-lightning"></i>
                                            </div>
                                            <div class="user-message">
                                                <h6 class="message"><a href="#">Olivia Johanna</a> has created new task at <a href="#">Kleon Projects</a></h6>
                                                <p class="message-footer d-flex align-items-center justify-content-between"> <span class="fs-14 text-gray fw-normal">2m ago</span> <span>Mark as read</span></p>
                                            </div>
                                        </li>
                                        <li class="author-online has-new-message d-flex gap-3">
                                            <div class="media media-outline-red text-red">
                                                <i class="bi bi-clock-fill"></i>
                                            </div>
                                            <div class="user-message">
                                                <h6 class="message">[REMINDER] Due date of <a href="#">Highspeed Studios Projects</a> te task will be coming</h6>
                                                <p class="message-footer d-flex align-items-center justify-content-between"> <span class="fs-14 text-gray fw-normal">2m ago</span> <span>Mark as read</span></p>
                                            </div>
                                        </li>
                                    </ul>
                                    <h6 class="all-notifications"> <a href="#" class="btn bg-muted text-primary w-100 fw-bold mt-3 ff-heading px-0">View All Notifications</a> </h6>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item nav-settings">
                            <a href="#" class="nav-toggler">
                                <img src="assets/img/svg/settings.svg" alt="img">
                            </a>
                        </li>

                        <li class="nav-item nav-author">
                            <a href="#" class="nav-toggler" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assets/img/nav_author.jpg" alt="img" width="54" class="rounded-2">
                                <div class="nav-toggler-content">
                                    <h6 class="mb-0">Franklin Jr.</h6>
                                    <div class="ff-heading fs-14 fw-normal text-gray">Super Admin</div>
                                </div>
                            </a>
                            <div class="dropdown-widget dropdown-menu p-0 admin-card">
                                <div class="dropdown-wrapper">
                                    <div class="card mb-0">
                                        <div class="card-header p-3 text-center">
                                            <img src="assets/img/nav_author.jpg" alt="img" width="80" class="rounded-circle avatar">
                                            <div class="mt-2">
                                                <h6 class="mb-0 lh-18">Franklin Jr.</h6>
                                                <div class="fs-14 fw-normal text-gray">Super Admin</div>
                                            </div>
                                        </div>
                                        <div class="card-body p-3">
                                            <ul class="list-unstyled p-0 m-0">
                                                <li>
                                                    <a href="profile.html" class="fs-14 fw-normal text-dark d-block p-1"><i class="bi bi-person me-2"></i> Profile</a>
                                                </li>
                                                <li >
                                                    <a href="email.html" class="fs-14 fw-normal text-dark d-block p-1"><i class="bi bi-envelope me-2 "></i> Inbox</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="fs-14 fw-normal text-dark d-block p-1"><i class="bi bi-gear me-2"></i> Setting & Privacy</a>
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="card-footer p-3">
                                            <a href="login.html" class="btn btn-outline-gray bg-transparent w-100 py-1 rounded-1 text-dark fs-14 fw-medium"><i class="bi bi-box-arrow-right"></i> Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="small-header d-flex align-items-center justify-content-between d-xl-none">
            <div class="logo">
                <a href="index.html" class="d-flex align-items-center gap-3 flex-shrink-0">
                    <img src="assets/img/logo-icon.svg" alt="logo">
                    <div class="position-relative flex-shrink-0">
                        <img src="assets/img/logo-text.svg" alt="" class="logo-text">
                        <img src="assets/img/logo-text-white.svg" alt="" class="logo-text-white">
                    </div>
                </a>
            </div>
            <div>
                <button type="button" class="kleon-header-expand-toggle"><span class="fs-24"><i class="bi bi-three-dots-vertical"></i></button>
                <button type="button" class="kleon-mobile-menu-opener"><span class="close"><i class="bi bi-arrow-left"></i></span> <span class="open"><i class="bi bi-list"></i></span></button>
            </div>
        </div>

        <div class="header-mobile-option">
            <div class="header-inner">
                <div class="d-flex align-items-center justify-content-end flex-shrink-0">
                    <ul class="nav-elements d-flex align-items-center list-unstyled m-0 p-0">
                        <li class="nav-item nav-search">
                            <button type="button" class="btn p-0 m-0 border-0" data-bs-toggle="modal" data-bs-target="#searchModal">
                                <i class="bi bi-search"></i>
                            </button>
                        </li>
                        <li class="nav-item nav-notification dropdown">
                            <a href="#" class="nav-toggler" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-bell-fill"></i>
                                <div class="badge rounded-circle">12</div>
                            </a>
                            <div class="dropdown-widget dropdown-menu p-0">
                                <div class="dropdown-wrapper pd-50">
                                    <div class="dropdown-wrapper--title">
                                        <h4 class="d-flex align-items-center justify-content-between">Notifications <a href="#">View All</a></h4>
                                    </div>
                                    <ul class="notification-board list-unstyled">
                                        <li class="author-online has-new-message d-flex gap-3">
                                            <div class="media bg-primary text-white">
                                                <i class="bi bi-lightning"></i>
                                            </div>
                                            <div class="user-message">
                                                <h6 class="message"><a href="#">Jackie Kun</a> mentioned you at <a href="#">Kleon Projects</a></h6>
                                                <p class="message-footer d-flex align-items-center justify-content-between"> <span class="fs-14 text-gray fw-normal">2m ago</span> <span>Mark as read</span></p>
                                            </div>
                                        </li>
                                        <li class="author-online has-new-message d-flex gap-3">
                                            <div class="media bg-secondary text-white">
                                                <i class="bi bi-lightning"></i>
                                            </div>
                                            <div class="user-message">
                                                <h6 class="message"><a href="#">Olivia Johanna</a> has created new task at <a href="#">Kleon Projects</a></h6>
                                                <p class="message-footer d-flex align-items-center justify-content-between"> <span class="fs-14 text-gray fw-normal">2m ago</span> <span>Mark as read</span></p>
                                            </div>
                                        </li>
                                        <li class="author-online has-new-message d-flex gap-3">
                                            <div class="media media-outline-red text-red">
                                                <i class="bi bi-clock-fill"></i>
                                            </div>
                                            <div class="user-message">
                                                <h6 class="message">[REMINDER] Due date of <a href="#">Highspeed Studios Projects</a> te task will be coming</h6>
                                                <p class="message-footer d-flex align-items-center justify-content-between"> <span class="fs-14 text-gray fw-normal">2m ago</span> <span>Mark as read</span></p>
                                            </div>
                                        </li>
                                    </ul>
                                    <h6 class="all-notifications"> <a href="#" class="btn bg-muted text-primary w-100 fw-bold mt-3 ff-heading px-0">View All Notifications</a> </h6>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item nav-settings">
                            <a href="#" class="nav-toggler">
                                <i class="bi bi-gear-fill"></i>
                            </a>
                        </li>

                        <li class="nav-item nav-author px-3">
                            <a href="#" class="nav-toggler" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assets/img/nav_author.jpg" alt="img" width="40" class="rounded-2">
                                <div class="nav-toggler-content">
                                    <h6 class="mb-0">Franklin Jr.</h6>
                                    <div class="ff-heading fs-14 fw-normal text-gray">Super Admin</div>
                                </div>
                            </a>
                            <div class="dropdown-widget dropdown-menu p-0 admin-card">
                                <div class="dropdown-wrapper">
                                    <div class="card mb-0">
                                        <div class="card-header p-3 text-center">
                                            <img src="assets/img/nav_author.jpg" alt="img" width="60" class="rounded-circle avatar">
                                            <div class="mt-2">
                                                <h6 class="mb-0 lh-18">Franklin Jr.</h6>
                                                <div class="fs-14 fw-normal text-gray">Super Admin</div>
                                            </div>
                                        </div>
                                        <div class="card-body p-3">
                                            <ul class="list-unstyled p-0 m-0">
                                                <li>
                                                    <a href="profile.html" class="fs-14 fw-normal text-dark d-block p-1"><i class="bi bi-person me-2"></i> Profile</a>
                                                </li>
                                                <li >
                                                    <a href="email.html" class="fs-14 fw-normal text-dark d-block p-1"><i class="bi bi-envelope me-2 "></i> Inbox</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="fs-14 fw-normal text-dark d-block p-1"><i class="bi bi-gear me-2"></i> Setting & Privacy</a>
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="card-footer p-3">
                                            <a href="login.html" class="btn btn-outline-gray bg-transparent w-100 py-1 rounded-1 text-dark fs-14 fw-medium"><i class="bi bi-box-arrow-right"></i> Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    
    <!-- Horizontal Nav -->
    <header class="header kleon-horizontal-nav shadow">				
        <div class="d-none d-xl-block">
            <div class="d-flex align-items-center justify-content-around justify-content-xl-between flex-wrap flex-xl-nowrap gap-3 gap-xl-5">
                <div class="d-flex align-items-center gap-7">
                    <div class="logo">
                        <a href="index.html" class="d-flex align-items-center gap-3 flex-shrink-0">
                            <img src="{{ asset('assets/img/mulyagiri.png') }}"  width="100" alt="logo">
                           
                    </div>

                    <div class="kleon-navmenu text-center">
                        <ul class="main-menu">
                
                            <li class="menu-item menu-item-has-children"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-speedometer fs-16"></i></span> <span class="nav-text">Dashboards</span></a> 
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="index.html">Invoice Management</a></li>
                                    <li class="menu-item"><a href="index-hr.html">HR Management</a></li>
                                    <li class="menu-item"><a href="index-job-hiring.html">Job Hiring Management</a></li>
                                    <li class="menu-item"><a href="index-project.html">Project Management v1</a></li>
                                    <li class="menu-item"><a href="index-project-2.html">Project Management v2</a></li>
                                    <li class="menu-item"><a href="index-general.html">General Dashboard</a></li>
                                </ul>
                                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                            </li>
                            
                            <li class="menu-item menu-item-has-children"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-speedometer2 fs-16"></i></span> <span class="nav-text">Sass</span></a> 
                                <ul class="sub-menu">
                                    <!-- HR Management -->
                                    <li class="menu-item menu-item-has-children"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-people fs-16"></i></span> <span class="nav-text">HR Management</span></a> 
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="employees.html"> Employees <span class="menuIndicator bg-soft-secondary rounded-3 py-0 px-3">New</span></a></li>
                                            <li class="menu-item"><a href="recruitment.html"> Recruitment</a></li>
                                            <li class="menu-item"><a href="jobs.html"> Jobs <span class="menuIndicator bg-info rounded-circle text-white">17</span></a></li>
                                            <li class="menu-item menu-item-has-children"><a href="#"> Candidates</a> 
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="candidates.html"> Candidate List</a></li>
                                                    <li class="menu-item"><a href="candidate.html"> Candidate</a></li>
                                                </ul>
                                                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                            </li>
                                            <li class="menu-item"><a href="attendances.html"> Attendances</a></li>
                                            <li class="menu-item"><a href="leaves.html"> Leaves</a></li>
                                            <li class="menu-item"><a href="documents.html"> Documents</a></li>
                                        </ul>
                                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                    </li>
                
                                    <!-- Job Hiring -->
                                    <li class="menu-item menu-item-has-children"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-briefcase fs-16"></i></span> <span class="nav-text">Job Hiring</span></a> 
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="jobs-hiring.html"> Jobs <span class="menuIndicator bg-info rounded-circle text-white">17</span></a></li>
                                            <li class="menu-item menu-item-has-children"><a href="#"> Candidates</a> 
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="candidates-grid-hiring.html"> Candidate Grid</a></li>
                                                    <li class="menu-item"><a href="candidates-list-hiring.html"> Candidate List</a></li>
                                                    <li class="menu-item"><a href="candidates-qualified-hiring.html"> Qualified Candidates</a></li>
                                                    <li class="menu-item"><a href="candidate-hiring.html"> Candidate Profile</a></li>
                                                </ul>
                                                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                            </li>
                                            <li class="menu-item"><a href="statistics-hiring.html"> Statistics</a></li>
                                            <li class="menu-item"><a href="company-hiring.html"> Company Profile</a></li>
                                            <li class="menu-item"><a href="documents-hiring.html"> Documents</a></li>
                                        </ul>
                                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                    </li>
                
                                    <!-- Project Management -->
                                    <li class="menu-item menu-item-has-children"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-kanban fs-16"></i></span> <span class="nav-text">Project Management</span></a> 
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="contacts.html"> Contacts</a></li>
                                            <li class="menu-item menu-item-has-children"><a href="#"> Projects</a> 
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="projects.html"> All Projects</a></li>
                                                    <li class="menu-item"><a href="project-details.html"> Project Detail</a></li>
                                                </ul>
                                                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                            </li>
                                            <li class="menu-item"><a href="files.html"> Files</a></li>
                                            <li class="menu-item"><a href="profile.html"> Profile</a></li>
                                        </ul>
                                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                    </li>
                
                                    <!-- General Dashboard -->
                                    <li class="menu-item menu-item-has-children"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-speedometer2 fs-16"></i></span> <span class="nav-text">General Dashboard</span></a> 
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-has-children"><a href="#"> Contacts</a> 
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="contacts-2.html"> Contact List</a></li>
                                                    <li class="menu-item"><a href="contact-new.html"> Add Contact</a></li>
                                                </ul>
                                                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                            </li>
                                            
                                            <li class="menu-item"><a href="profile-2.html"> Profile</a></li>
                                            <li class="menu-item"><a href="preferences.html"> Preferences</a></li>
                                        </ul>
                                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                    </li>
                                </ul>
                            </li>
        
                            <!-- Apps -->
                            <li class="menu-item menu-item-has-children"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-app-indicator fs-16"></i></span> <span class="nav-text">Apps</span></a> 
                                <ul class="sub-menu">         
                                    <li class="menu-item"><a href="calendar.html"><span class="nav-icon flex-shrink-0"><i class="bi bi-calendar-day fs-16"></i></span> <span class="nav-text">Calendar</span></a></li>
                                        
                                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-envelope fs-16"></i></span> <span class="nav-text">Email</span></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="email.html">Inbox</a></li>
                                            <li class="menu-item"><a href="email-compose.html">Email Compose</a></li>
                                            <li class="menu-item"><a href="email-details.html">Email Preview</a></li>
                                        </ul>
                                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-chat fs-16"></i></span> <span class="nav-text">Chat</span></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="inbox.html">Inbox</a></li>
                                            <li class="menu-item"><a href="chat.html">Chat Preview</a></li>
                                            <li class="menu-item"><a href="chat-2.html">Chat 2 Preview</a></li>
                                        </ul>
                                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-receipt fs-16"></i></span> <span class="nav-text">Invoices</span></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="invoices.html">Invoice List</a></li>
                                            <li class="menu-item"><a href="invoice.html">Invoice Details</a></li>
                                            <li class="menu-item"><a href="invoice-new.html">Create Invoice</a></li>
                                        </ul>
                                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-kanban fs-16"></i></span> <span class="nav-text">Task</span></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="task.html">Task List</a></li>
                                            <li class="menu-item"><a href="task-2.html">Task 2</a></li>
                                            <li class="menu-item"><a href="task-jkanban.html">Kanban</a></li>
                                        </ul>
                                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                    </li>
                                </ul>
                            </li>
        
                            <!-- UI Components -->
                            <li class="menu-item menu-item-has-children"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-bricks fs-16"></i></span> <span class="nav-text">Components</span></a> 
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-bricks fs-16"></i></span> <span class="nav-text">UI Elements</span></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="accordion.html">Accordion</a></li>
                                            <li class="menu-item"><a href="alerts.html">Alerts</a></li>
                                            <li class="menu-item"><a href="avatar.html">Avatar</a></li>
                                            <li class="menu-item"><a href="badge.html">Badge</a></li>
                                            <li class="menu-item"><a href="breadcrumb.html">Breadcrumb</a></li>
                                            <li class="menu-item"><a href="collapse.html">Collapse</a></li>
                                            <li class="menu-item"><a href="dropdowns.html">Dropdowns</a></li>
                                            <li class="menu-item"><a href="list-group.html">List Group</a></li>
                                            <li class="menu-item"><a href="modals.html">Modal</a></li>
                                            <li class="menu-item"><a href="offcanvas.html">Offcanvas</a></li>
                                            <li class="menu-item"><a href="tabs.html">Tabs</a></li>
                                            <li class="menu-item"><a href="pagination.html">Pagination</a></li>
                                            <li class="menu-item"><a href="placeholders.html">Placeholders</a></li>
                                            <li class="menu-item"><a href="popovers.html">Popovers</a></li>
                                            <li class="menu-item"><a href="progressbar.html">Progressbar</a></li>
                                            <li class="menu-item"><a href="spinners.html">Spinners</a></li>
                                            <li class="menu-item"><a href="toasts.html">Toasts</a></li>
                                            <li class="menu-item"><a href="tooltips.html">Tooltips</a></li>
                                        </ul>
                                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-card-image fs-16"></i></span> <span class="nav-text">Cards</span></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="cards-basic.html">Bootstrap Basic</a></li>
                                            <li class="menu-item"><a href="cards.html">Customized Cards</a></li>
                                        </ul>
                                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-send fs-16"></i></span> <span class="nav-text">Buttons</span></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="buttons.html">Default Buttons</a></li>
                                            <li class="menu-item"><a href="video-buttons.html">Video Buttons</a></li>
                                        </ul>
                                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                    </li>
                                    <!-- Forms -->
                                    <li class="menu-item menu-item-has-children"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-textarea-resize fs-16"></i></span> <span class="nav-text">Forms</span></a> 
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-textarea-t fs-16"></i></span> <span class="nav-text">Form Elements</span></a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="form-basic.html">Basic Forms</a></li>
                                                    <li class="menu-item"><a href="form-inputs.html">Forms Inputs</a></li>
                                                    <li class="menu-item"><a href="form-input-groups.html">Forms Inputs Group</a></li>
                                                    <li class="menu-item"><a href="form-horizontal.html">Forms Horizontal</a></li>
                                                    <li class="menu-item"><a href="form-vertical.html">Forms Vertical</a></li>
                                                    <li class="menu-item"><a href="form-wizard.html">Forms Wizard</a></li>
                                                </ul>
                                                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                            </li>
                                            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-check-square-fill fs-16"></i></span> <span class="nav-text">Form Validation</span></a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="form-validation-bootstrap.html">Bootstrap Validation</a></li>
                                                    <li class="menu-item"><a href="form-validation-custom.html">Custom Validation</a></li>
                                                </ul>
                                                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                            </li>
                                            
                                        </ul>
                                    </li>
                                    <!-- Content -->
                                    <li class="menu-item menu-item-has-children"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-fonts fs-16"></i></span> <span class="nav-text">Content</span></a> 
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="typography.html"><span class="nav-icon flex-shrink-0"><i class="bi bi-fonts fs-16"></i></span> <span class="nav-text">Typography</span></a></li>
                                            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-table fs-16"></i></span> <span class="nav-text">Tables</span></a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-text">Bootstrap Table</span></a>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item"><a href="tables-bootstrap-basic.html">Basic Table</a></li>
                                                            <li class="menu-item"><a href="tables-bootstrap.html">Customized Table</a></li>
                                                        </ul>
                                                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                                    </li>
                                                    <li class="menu-item"><a href="tables-datatables.html">Data Tables</a></li>
                                                </ul>
                                                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                            </li>
                                            
                                        </ul>
                                    </li>

                                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-plugin fs-16"></i></span> <span class="nav-text">Plugins</span></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="form-dropzone.html">Forms Dropzone</a></li>
                                            <li class="menu-item"><a href="form-repeater.html">Forms Repeater</a></li>
                                            <li class="menu-item"><a href="form-select2.html">Forms Select 2</a></li>
                                            <li class="menu-item"><a href="sweetalert.html">Sweet Alert</a></li>
                                            <li class="menu-item"><a href="toastr.html">Toastr</a></li>
                                        </ul>
                                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                    </li>
                                </ul>
                            </li>
                            
                            <!-- Pages -->
                            <li class="menu-item menu-item-has-children"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-briefcase fs-16"></i></span> <span class="nav-text">Pages</span></a> 
                                <ul class="sub-menu">
                                    <!-- Authentication -->
                                    <li class="menu-item menu-item-has-children"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-person-bounding-box fs-16"></i></span> <span class="nav-text">Authentication</span></a> 
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-info-circle fs-16"></i></span> <span class="nav-text">Error</span></a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="403.html">403 Error</a></li>
                                                    <li class="menu-item"><a href="404.html">404 Error</a></li>
                                                    <li class="menu-item"><a href="500.html">500 Error</a></li>
                                                </ul>
                                                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                            </li>
                                            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-box-arrow-in-right fs-16"></i></span> <span class="nav-text">Login</span></a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="login.html">Boxed Login</a></li>
                                                    <li class="menu-item"><a href="login-2.html">Side Login</a></li>
                                                </ul>
                                                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                            </li>
                                            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-person-plus fs-16"></i></span> <span class="nav-text">Registration</span></a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="register.html">Boxed Registration</a></li>
                                                    <li class="menu-item"><a href="register-2.html">Side Registration</a></li>
                                                </ul>
                                                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                            </li>
                                            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-key fs-16"></i></span> <span class="nav-text">Password</span></a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item menu-item-has-children"><a href="#">Reset Passward</a>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item"><a href="reset-password.html">Boxed Reset Passward</a></li>
                                                            <li class="menu-item"><a href="reset-password-2.html">Side Reset Passward</a></li>
                                                        </ul>
                                                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                                    </li>
                                                    <li class="menu-item menu-item-has-children"><a href="#">Forgot Passward</a>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item"><a href="forgot-password.html">Boxed Forgot Passward</a></li>
                                                            <li class="menu-item"><a href="forgot-password-2.html">Side Forgot Passward</a></li>
                                                        </ul>
                                                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                                    </li>
                                                </ul>
                                                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                            </li>
                                            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-qr-code-scan fs-16"></i></span> <span class="nav-text">Two Step Varification</span></a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="two-step-varification.html">Boxed Varification</a></li>
                                                    <li class="menu-item"><a href="two-step-varification-2.html">Side Varification</a></li>
                                                </ul>
                                                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- Charts -->
                                    <li class="menu-item menu-item-has-children"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-graph-up-arrow fs-16"></i></span> <span class="nav-text">Charts</span></a> 
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-pie-chart-fill fs-16"></i></span> <span class="nav-text">Apex Chart</span></a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="apexchart-line.html">Line Chart</a></li>
                                                    <li class="menu-item"><a href="apexchart-bar.html">Bar Chart</a></li>
                                                    <li class="menu-item"><a href="apexchart-column.html">Column Chart</a></li>
                                                    <li class="menu-item"><a href="apexchart-area.html">Area Chart</a></li>
                                                    <li class="menu-item"><a href="apexchart-pie.html">Pie Chart</a></li>
                                                    <li class="menu-item"><a href="apexchart-radial.html">Radial Chart</a></li>
                                                </ul>
                                                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="d-flex align-items-center flex-shrink-0">
                    <ul class="nav-elements d-flex align-items-center list-unstyled m-0 p-0">
                        <li class="nav-item nav-search">
                            <button type="button" class="btn p-0 m-0 border-0" data-bs-toggle="modal" data-bs-target="#searchModal">
                                <img src="assets/img/svg/search.svg" alt="">
                            </button>
                        </li>
                        <li class="nav-item nav-color-switch d-flex align-items-center gap-3">
                            <div class="sun"><img src="assets/img/sun.svg" alt="img"></div>
                            <div class="switch">
                                <input type="checkbox" id="colorSwitch2" value="false" name="defaultMode">
                                <div class="shutter">
                                    <span class="lbl-off"></span>
                                    <span class="lbl-on"></span>
                                    <div class="slider bg-primary"></div>
                                </div>
                            </div>
                            <div class="moon"><img src="assets/img/moon.svg" alt="img"></div>
                        </li>

                        <li class="nav-item nav-flag">
                            <select class="kleon-select-single nav-toggler-content">
                                <option selected value="en">Eng(US)</option>
                                <option value="fr">French</option>
                                <option value="de">German</option>
                                <option value="sp">Spanish</option>
                            </select>
                        </li>
                        
                        <li class="nav-item nav-notification dropdown">
                            <a href="#" class="nav-toggler" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assets/img/svg/bell.svg" alt="bell">
                                <div class="badge rounded-circle">12</div>
                            </a>
                            <div class="dropdown-widget dropdown-menu p-0">
                                <div class="dropdown-wrapper pd-50">
                                    <div class="dropdown-wrapper--title">
                                        <h4 class="d-flex align-items-center justify-content-between">Notifications <a href="#">View All</a></h4>
                                    </div>
                                    <ul class="notification-board list-unstyled">
                                        <li class="author-online has-new-message d-flex gap-3">
                                            <div class="media bg-primary text-white">
                                                <i class="bi bi-lightning"></i>
                                            </div>
                                            <div class="user-message">
                                                <h6 class="message"><a href="#">Jackie Kun</a> mentioned you at <a href="#">Kleon Projects</a></h6>
                                                <p class="message-footer d-flex align-items-center justify-content-between"> <span class="fs-14 text-gray fw-normal">2m ago</span> <span>Mark as read</span></p>
                                            </div>
                                        </li>
                                        <li class="author-online has-new-message d-flex gap-3">
                                            <div class="media bg-secondary text-white">
                                                <i class="bi bi-lightning"></i>
                                            </div>
                                            <div class="user-message">
                                                <h6 class="message"><a href="#">Olivia Johanna</a> has created new task at <a href="#">Kleon Projects</a></h6>
                                                <p class="message-footer d-flex align-items-center justify-content-between"> <span class="fs-14 text-gray fw-normal">2m ago</span> <span>Mark as read</span></p>
                                            </div>
                                        </li>
                                        <li class="author-online has-new-message d-flex gap-3">
                                            <div class="media media-outline-red text-red">
                                                <i class="bi bi-clock-fill"></i>
                                            </div>
                                            <div class="user-message">
                                                <h6 class="message">[REMINDER] Due date of <a href="#">Highspeed Studios Projects</a> te task will be coming</h6>
                                                <p class="message-footer d-flex align-items-center justify-content-between"> <span class="fs-14 text-gray fw-normal">2m ago</span> <span>Mark as read</span></p>
                                            </div>
                                        </li>
                                    </ul>
                                    <h6 class="all-notifications"> <a href="#" class="btn bg-muted text-primary w-100 fw-bold mt-3 ff-heading px-0">View All Notifications</a> </h6>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item nav-settings">
                            <a href="#" class="nav-toggler">
                                <img src="assets/img/svg/settings.svg" alt="img">
                            </a>
                        </li>

                        <li class="nav-item nav-author">
                            <a href="#" class="nav-toggler" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assets/img/nav_author.jpg" alt="img" width="54" class="rounded-2">
                                <div class="nav-toggler-content">
                                    <h6 class="mb-0">Franklin Jr.</h6>
                                    <div class="ff-heading fs-14 fw-normal text-gray">Super Admin</div>
                                </div>
                            </a>
                            <div class="dropdown-widget dropdown-menu p-0 admin-card">
                                <div class="dropdown-wrapper">
                                    <div class="card mb-0">
                                        <div class="card-header p-3 text-center">
                                            <img src="assets/img/nav_author.jpg" alt="img" width="80" class="rounded-circle avatar">
                                            <div class="mt-2">
                                                <h6 class="mb-0 lh-18">Franklin Jr.</h6>
                                                <div class="fs-14 fw-normal text-gray">Super Admin</div>
                                            </div>
                                        </div>
                                        <div class="card-body p-3">
                                            <ul class="list-unstyled p-0 m-0">
                                                <li>
                                                    <a href="profile.html" class="fs-14 fw-normal text-dark d-block p-1"><i class="bi bi-person me-2"></i> Profile</a>
                                                </li>
                                                <li >
                                                    <a href="email.html" class="fs-14 fw-normal text-dark d-block p-1"><i class="bi bi-envelope me-2 "></i> Inbox</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="fs-14 fw-normal text-dark d-block p-1"><i class="bi bi-gear me-2"></i> Setting & Privacy</a>
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="card-footer p-3">
                                            <a href="login.html" class="btn btn-outline-gray bg-transparent w-100 py-1 rounded-1 text-dark fs-14 fw-medium"><i class="bi bi-box-arrow-right"></i> Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="small-header d-flex align-items-center justify-content-between d-xl-none">
            <div class="logo">
                <a href="index.html" class="d-flex align-items-center gap-3 flex-shrink-0">
                    <img src="assets/img/logo-icon.svg" alt="logo">
                    <div class="position-relative flex-shrink-0">
                        <img src="assets/img/logo-text.svg" alt="" class="logo-text">
                        <img src="assets/img/logo-text-white.svg" alt="" class="logo-text-white">
                    </div>
                </a>
            </div>
            <div>
                <button type="button" class="kleon-header-expand-toggle"><span class="fs-24"><i class="bi bi-three-dots-vertical"></i></button>
                <button type="button" class="kleon-mobile-menu-opener"><span class="close"><i class="bi bi-arrow-left"></i></span> <span class="open"><i class="bi bi-list"></i></span></button>
            </div>
        </div>

        <div class="header-mobile-option">
            <div class="header-inner">
                <div class="d-flex align-items-center justify-content-end flex-shrink-0">
                    <ul class="nav-elements d-flex align-items-center list-unstyled m-0 p-0">
                        <li class="nav-item nav-search">
                            <button type="button" class="btn p-0 m-0 border-0" data-bs-toggle="modal" data-bs-target="#searchModal">
                                <i class="bi bi-search"></i>
                            </button>
                        </li>
                        <li class="nav-item nav-notification dropdown">
                            <a href="#" class="nav-toggler" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-bell-fill"></i>
                                <div class="badge rounded-circle">12</div>
                            </a>
                            <div class="dropdown-widget dropdown-menu p-0">
                                <div class="dropdown-wrapper pd-50">
                                    <div class="dropdown-wrapper--title">
                                        <h4 class="d-flex align-items-center justify-content-between">Notifications <a href="#">View All</a></h4>
                                    </div>
                                    <ul class="notification-board list-unstyled">
                                        <li class="author-online has-new-message d-flex gap-3">
                                            <div class="media bg-primary text-white">
                                                <i class="bi bi-lightning"></i>
                                            </div>
                                            <div class="user-message">
                                                <h6 class="message"><a href="#">Jackie Kun</a> mentioned you at <a href="#">Kleon Projects</a></h6>
                                                <p class="message-footer d-flex align-items-center justify-content-between"> <span class="fs-14 text-gray fw-normal">2m ago</span> <span>Mark as read</span></p>
                                            </div>
                                        </li>
                                        <li class="author-online has-new-message d-flex gap-3">
                                            <div class="media bg-secondary text-white">
                                                <i class="bi bi-lightning"></i>
                                            </div>
                                            <div class="user-message">
                                                <h6 class="message"><a href="#">Olivia Johanna</a> has created new task at <a href="#">Kleon Projects</a></h6>
                                                <p class="message-footer d-flex align-items-center justify-content-between"> <span class="fs-14 text-gray fw-normal">2m ago</span> <span>Mark as read</span></p>
                                            </div>
                                        </li>
                                        <li class="author-online has-new-message d-flex gap-3">
                                            <div class="media media-outline-red text-red">
                                                <i class="bi bi-clock-fill"></i>
                                            </div>
                                            <div class="user-message">
                                                <h6 class="message">[REMINDER] Due date of <a href="#">Highspeed Studios Projects</a> te task will be coming</h6>
                                                <p class="message-footer d-flex align-items-center justify-content-between"> <span class="fs-14 text-gray fw-normal">2m ago</span> <span>Mark as read</span></p>
                                            </div>
                                        </li>
                                    </ul>
                                    <h6 class="all-notifications"> <a href="#" class="btn bg-muted text-primary w-100 fw-bold mt-3 ff-heading px-0">View All Notifications</a> </h6>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item nav-settings">
                            <a href="#" class="nav-toggler">
                                <i class="bi bi-gear-fill"></i>
                            </a>
                        </li>

                        <li class="nav-item nav-author px-3">
                            <a href="#" class="nav-toggler" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assets/img/nav_author.jpg" alt="img" width="40" class="rounded-2">
                                <div class="nav-toggler-content">
                                    <h6 class="mb-0">Franklin Jr.</h6>
                                    <div class="ff-heading fs-14 fw-normal text-gray">Super Admin</div>
                                </div>
                            </a>
                            <div class="dropdown-widget dropdown-menu p-0 admin-card">
                                <div class="dropdown-wrapper">
                                    <div class="card mb-0">
                                        <div class="card-header p-3 text-center">
                                            <img src="assets/img/nav_author.jpg" alt="img" width="60" class="rounded-circle avatar">
                                            <div class="mt-2">
                                                <h6 class="mb-0 lh-18">Franklin Jr.</h6>
                                                <div class="fs-14 fw-normal text-gray">Super Admin</div>
                                            </div>
                                        </div>
                                        <div class="card-body p-3">
                                            <ul class="list-unstyled p-0 m-0">
                                                <li>
                                                    <a href="profile.html" class="fs-14 fw-normal text-dark d-block p-1"><i class="bi bi-person me-2"></i> Profile</a>
                                                </li>
                                                <li >
                                                    <a href="email.html" class="fs-14 fw-normal text-dark d-block p-1"><i class="bi bi-envelope me-2 "></i> Inbox</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="fs-14 fw-normal text-dark d-block p-1"><i class="bi bi-gear me-2"></i> Setting & Privacy</a>
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="card-footer p-3">
                                            <a href="login.html" class="btn btn-outline-gray bg-transparent w-100 py-1 rounded-1 text-dark fs-14 fw-medium"><i class="bi bi-box-arrow-right"></i> Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>            
    </header>
    
    <!-- Combo Nav -->
    <header class="header kleon-combo-nav shadow">				
        <div class="d-none d-xl-block">
            <div class="d-flex align-items-center justify-content-around justify-content-xl-between flex-wrap flex-xl-nowrap gap-3 gap-xl-5">
                <div class="d-flex align-items-center flex-shrink-0">
                    <ul class="nav-elements d-flex align-items-center list-unstyled m-0 p-0">
                        <li class="nav-item nav-notification dropdown">
                            <a href="#" class="nav-toggler" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assets/img/svg/bell.svg" alt="bell">
                                <div class="badge rounded-circle">12</div>
                            </a>
                            <div class="dropdown-widget dropdown-menu p-0">
                                <div class="dropdown-wrapper pd-50">
                                    <div class="dropdown-wrapper--title">
                                        <h4 class="d-flex align-items-center justify-content-between">Notifications <a href="#">View All</a></h4>
                                    </div>
                                    <ul class="notification-board list-unstyled">
                                        <li class="author-online has-new-message d-flex gap-3">
                                            <div class="media bg-primary text-white">
                                                <i class="bi bi-lightning"></i>
                                            </div>
                                            <div class="user-message">
                                                <h6 class="message"><a href="#">Jackie Kun</a> mentioned you at <a href="#">Kleon Projects</a></h6>
                                                <p class="message-footer d-flex align-items-center justify-content-between"> <span class="fs-14 text-gray fw-normal">2m ago</span> <span>Mark as read</span></p>
                                            </div>
                                        </li>
                                        <li class="author-online has-new-message d-flex gap-3">
                                            <div class="media bg-secondary text-white">
                                                <i class="bi bi-lightning"></i>
                                            </div>
                                            <div class="user-message">
                                                <h6 class="message"><a href="#">Olivia Johanna</a> has created new task at <a href="#">Kleon Projects</a></h6>
                                                <p class="message-footer d-flex align-items-center justify-content-between"> <span class="fs-14 text-gray fw-normal">2m ago</span> <span>Mark as read</span></p>
                                            </div>
                                        </li>
                                        <li class="author-online has-new-message d-flex gap-3">
                                            <div class="media media-outline-red text-red">
                                                <i class="bi bi-clock-fill"></i>
                                            </div>
                                            <div class="user-message">
                                                <h6 class="message">[REMINDER] Due date of <a href="#">Highspeed Studios Projects</a> te task will be coming</h6>
                                                <p class="message-footer d-flex align-items-center justify-content-between"> <span class="fs-14 text-gray fw-normal">2m ago</span> <span>Mark as read</span></p>
                                            </div>
                                        </li>
                                    </ul>
                                    <h6 class="all-notifications"> <a href="#" class="btn bg-muted text-primary w-100 fw-bold mt-3 ff-heading px-0">View All Notifications</a> </h6>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item nav-giftbox">
                            <a href="#" class="nav-toggler" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assets/img/svg/gift.svg" alt="img">
                                <div class="badge rounded-circle">5</div>
                            </a>
                            <div class="dropdown-widget dropdown-menu p-0">
                                <div class="dropdown-wrapper pd-50">
                                    <div class="dropdown-wrapper--title">
                                        <h4 class="d-flex align-items-center justify-content-between">Notifications <a href="#"><i class="bi bi-three-dots-vertical"></i></a></h4>
                                    </div>
                                    <ul class="notification-board list-unstyled">
                                        <li class="author-online has-new-message d-flex gap-3">
                                            <div class="media bg-soft-primary">
                                                <i class="bi bi-bell-fill"></i>
                                            </div>
                                            <div class="user-message d-flex align-items-center justify-content-between gap-5">
                                                <h6 class="message mb-0">Review New Candidate Application</h6>
                                                <p class="message-footer flex-shrink-0 mb-0"> <span class="time">08:00 AM</span></p>
                                            </div>
                                        </li>
                                        <li class="author-online has-new-message d-flex gap-3">
                                            <div class="media bg-soft-warning">
                                                <i class="bi bi-bell-fill"></i>
                                            </div>
                                            <div class="user-message d-flex align-items-center justify-content-between gap-5">
                                                <h6 class="message mb-0">Your Premium service end soon. <a href="#">Renew your service</a></h6>
                                                <p class="message-footer flex-shrink-0 mb-0"> <span class="time">08:00 AM</span></p>
                                            </div>
                                        </li>
                                        <li class="author-online has-new-message d-flex gap-3">
                                            <div class="media bg-soft-secondary">
                                                <i class="bi bi-bell-fill"></i>
                                            </div>
                                            <div class="user-message d-flex align-items-center justify-content-between gap-5">
                                                <h6 class="message mb-0">You got New 10 Appilcation. <a href="#" class="text-secondary">Check Now</a></h6>
                                                <p class="message-footer flex-shrink-0 mb-0"> <span class="time">08:00 AM</span></p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item nav-folder">
                            <a href="#" class="nav-toggler">
                                <img src="assets/img/svg/folder.svg" alt="img">
                                <div class="badge rounded-circle">!</div>
                            </a>
                            <div class="dropdown-widget dropdown-menu dropdown-schedule p-0">
                                <div class="dropdown-wrapper pd-50">
                                    <div class="dropdown-wrapper--title">
                                        <h4 class="d-flex align-items-center justify-content-between">Schedule <a href="#"><i class="bi bi-three-dots-vertical"></i></a></h4>
                                        <p>Thursday January 10th, 2022</p>
                                    </div>
                                    <ul class="notification-board list-unstyled">
                                        <li class="author-online has-new-message d-flex gap-3">
                                            <div class="media">
                                                <img src="assets/img/2.jpg" alt="img" width="60" class="rounded-2">
                                            </div>
                                            <div class="user-message">
                                                <h6 class="message mb-1"><a href="#" class="text-dark">Meeting with Candidate #1</a></h6>
                                                <p class="message-footer d-flex align-items-center justify-content-between"> <span><i class="bi bi-calendar-fill"></i> January 17, 2023</span> <span><i class="bi bi-clock-fill"></i> 10.00 - 11.00</span></p>
                                            </div>
                                        </li>
                                        <li class="author-online has-new-message d-flex gap-3">
                                            <div class="media">
                                                <img src="assets/img/4.jpg" alt="img" width="60" class="rounded-2">
                                            </div>
                                            <div class="user-message">
                                                <h6 class="message mb-1"><a href="#" class="text-dark">Meeting with Candidate #2</a></h6>
                                                <p class="message-footer d-flex align-items-center justify-content-between"> <span><i class="bi bi-calendar-fill"></i> January 17, 2023</span> <span><i class="bi bi-clock-fill"></i> 10.00 - 11.00</span></p>
                                            </div>
                                        </li>
                                        <li class="author-online has-new-message d-flex gap-3">
                                            <div class="media">
                                                <img src="assets/img/6.jpg" alt="img" width="60" class="rounded-2">
                                            </div>
                                            <div class="user-message">
                                                <h6 class="message mb-1"><a href="#" class="text-dark">Meeting with Candidate #3</a></h6>
                                                <p class="message-footer d-flex align-items-center justify-content-between"> <span><i class="bi bi-calendar-fill"></i> January 17, 2023</span> <span><i class="bi bi-clock-fill"></i> 10.00 - 11.00</span></p>
                                            </div>
                                        </li>
                                    </ul>
                                    <h6 class="all-notifications"> <a href="#" class="btn bg-muted text-primary w-100 fw-bold mt-3 ff-heading px-0">View All</a> </h6>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item nav-settings">
                            <a href="#" class="nav-toggler">
                                <img src="assets/img/svg/settings.svg" alt="img">
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="d-flex align-items-center gap-7 order-1 order-xl-0">
                    <div class="kleon-navmenu text-center">
                        <ul class="main-menu">
                
                            <li class="menu-item menu-item-has-children"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-speedometer fs-16"></i></span> <span class="nav-text">Dashboards</span></a> 
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="index.html">Invoice Management</a></li>
                                    <li class="menu-item"><a href="index-hr.html">HR Management</a></li>
                                    <li class="menu-item"><a href="index-job-hiring.html">Job Hiring Management</a></li>
                                    <li class="menu-item"><a href="index-project.html">Project Management v1</a></li>
                                    <li class="menu-item"><a href="index-project-2.html">Project Management v2</a></li>
                                    <li class="menu-item"><a href="index-general.html">General Dashboard</a></li>
                                </ul>
                                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                            </li>
                            
                            <li class="menu-item menu-item-has-children"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-speedometer2 fs-16"></i></span> <span class="nav-text">Sass</span></a> 
                                <ul class="sub-menu">
                                    <!-- HR Management -->
                                    <li class="menu-item menu-item-has-children"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-people fs-16"></i></span> <span class="nav-text">HR Management</span></a> 
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="employees.html"> Employees <span class="menuIndicator bg-soft-secondary rounded-3 py-0 px-3">New</span></a></li>
                                            <li class="menu-item"><a href="recruitment.html"> Recruitment</a></li>
                                            <li class="menu-item"><a href="jobs.html"> Jobs <span class="menuIndicator bg-info rounded-circle text-white">17</span></a></li>
                                            <li class="menu-item menu-item-has-children"><a href="#"> Candidates</a> 
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="candidates.html"> Candidate List</a></li>
                                                    <li class="menu-item"><a href="candidate.html"> Candidate</a></li>
                                                </ul>
                                                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                            </li>
                                            <li class="menu-item"><a href="attendances.html"> Attendances</a></li>
                                            <li class="menu-item"><a href="leaves.html"> Leaves</a></li>
                                            <li class="menu-item"><a href="documents.html"> Documents</a></li>
                                        </ul>
                                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                    </li>
                
                                    <!-- Job Hiring -->
                                    <li class="menu-item menu-item-has-children"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-briefcase fs-16"></i></span> <span class="nav-text">Job Hiring</span></a> 
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="jobs-hiring.html"> Jobs <span class="menuIndicator bg-info rounded-circle text-white">17</span></a></li>
                                            <li class="menu-item menu-item-has-children"><a href="#"> Candidates</a> 
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="candidates-grid-hiring.html"> Candidate Grid</a></li>
                                                    <li class="menu-item"><a href="candidates-list-hiring.html"> Candidate List</a></li>
                                                    <li class="menu-item"><a href="candidates-qualified-hiring.html"> Qualified Candidates</a></li>
                                                    <li class="menu-item"><a href="candidate-hiring.html"> Candidate Profile</a></li>
                                                </ul>
                                                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                            </li>
                                            <li class="menu-item"><a href="statistics-hiring.html"> Statistics</a></li>
                                            <li class="menu-item"><a href="company-hiring.html"> Company Profile</a></li>
                                            <li class="menu-item"><a href="documents-hiring.html"> Documents</a></li>
                                        </ul>
                                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                    </li>
                
                                    <!-- Project Management -->
                                    <li class="menu-item menu-item-has-children"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-kanban fs-16"></i></span> <span class="nav-text">Project Management</span></a> 
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="contacts.html"> Contacts</a></li>
                                            <li class="menu-item menu-item-has-children"><a href="#"> Projects</a> 
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="projects.html"> All Projects</a></li>
                                                    <li class="menu-item"><a href="project-details.html"> Project Detail</a></li>
                                                </ul>
                                                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                            </li>
                                            <li class="menu-item"><a href="files.html"> Files</a></li>
                                            <li class="menu-item"><a href="profile.html"> Profile</a></li>
                                        </ul>
                                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                    </li>
                
                                    <!-- General Dashboard -->
                                    <li class="menu-item menu-item-has-children"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-speedometer2 fs-16"></i></span> <span class="nav-text">General Dashboard</span></a> 
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-has-children"><a href="#"> Contacts</a> 
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="contacts-2.html"> Contact List</a></li>
                                                    <li class="menu-item"><a href="contact-new.html"> Add Contact</a></li>
                                                </ul>
                                                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                            </li>
                                            
                                            <li class="menu-item"><a href="profile-2.html"> Profile</a></li>
                                            <li class="menu-item"><a href="preferences.html"> Preferences</a></li>
                                        </ul>
                                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                    </li>
                                </ul>
                            </li>
        
                            <!-- Apps -->
                            <li class="menu-item menu-item-has-children"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-app-indicator fs-16"></i></span> <span class="nav-text">Apps</span></a> 
                                <ul class="sub-menu">         
                                    <li class="menu-item"><a href="calendar.html"><span class="nav-icon flex-shrink-0"><i class="bi bi-calendar-day fs-16"></i></span> <span class="nav-text">Calendar</span></a></li>
                                        
                                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-envelope fs-16"></i></span> <span class="nav-text">Email</span></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="email.html">Inbox</a></li>
                                            <li class="menu-item"><a href="email-compose.html">Email Compose</a></li>
                                            <li class="menu-item"><a href="email-details.html">Email Preview</a></li>
                                        </ul>
                                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-chat fs-16"></i></span> <span class="nav-text">Chat</span></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="inbox.html">Inbox</a></li>
                                            <li class="menu-item"><a href="chat.html">Chat Preview</a></li>
                                            <li class="menu-item"><a href="chat-2.html">Chat 2 Preview</a></li>
                                        </ul>
                                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-receipt fs-16"></i></span> <span class="nav-text">Invoices</span></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="invoices.html">Invoice List</a></li>
                                            <li class="menu-item"><a href="invoice.html">Invoice Details</a></li>
                                            <li class="menu-item"><a href="invoice-new.html">Create Invoice</a></li>
                                        </ul>
                                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-kanban fs-16"></i></span> <span class="nav-text">Task</span></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="task.html">Task List</a></li>
                                            <li class="menu-item"><a href="task-2.html">Task 2</a></li>
                                            <li class="menu-item"><a href="task-jkanban.html">Kanban</a></li>
                                        </ul>
                                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                    </li>
                                </ul>
                            </li>
        
                            <!-- UI Components -->
                            <li class="menu-item menu-item-has-children"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-bricks fs-16"></i></span> <span class="nav-text">Components</span></a> 
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-bricks fs-16"></i></span> <span class="nav-text">UI Elements</span></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="accordion.html">Accordion</a></li>
                                            <li class="menu-item"><a href="alerts.html">Alerts</a></li>
                                            <li class="menu-item"><a href="avatar.html">Avatar</a></li>
                                            <li class="menu-item"><a href="badge.html">Badge</a></li>
                                            <li class="menu-item"><a href="breadcrumb.html">Breadcrumb</a></li>
                                            <li class="menu-item"><a href="collapse.html">Collapse</a></li>
                                            <li class="menu-item"><a href="dropdowns.html">Dropdowns</a></li>
                                            <li class="menu-item"><a href="list-group.html">List Group</a></li>
                                            <li class="menu-item"><a href="modals.html">Modal</a></li>
                                            <li class="menu-item"><a href="offcanvas.html">Offcanvas</a></li>
                                            <li class="menu-item"><a href="tabs.html">Tabs</a></li>
                                            <li class="menu-item"><a href="pagination.html">Pagination</a></li>
                                            <li class="menu-item"><a href="placeholders.html">Placeholders</a></li>
                                            <li class="menu-item"><a href="popovers.html">Popovers</a></li>
                                            <li class="menu-item"><a href="progressbar.html">Progressbar</a></li>
                                            <li class="menu-item"><a href="spinners.html">Spinners</a></li>
                                            <li class="menu-item"><a href="toasts.html">Toasts</a></li>
                                            <li class="menu-item"><a href="tooltips.html">Tooltips</a></li>
                                        </ul>
                                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-card-image fs-16"></i></span> <span class="nav-text">Cards</span></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="cards-basic.html">Bootstrap Basic</a></li>
                                            <li class="menu-item"><a href="cards.html">Customized Cards</a></li>
                                        </ul>
                                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-send fs-16"></i></span> <span class="nav-text">Buttons</span></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="buttons.html">Default Buttons</a></li>
                                            <li class="menu-item"><a href="video-buttons.html">Video Buttons</a></li>
                                        </ul>
                                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                    </li>
                                    <!-- Forms -->
                                    <li class="menu-item menu-item-has-children"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-textarea-resize fs-16"></i></span> <span class="nav-text">Forms</span></a> 
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-textarea-t fs-16"></i></span> <span class="nav-text">Form Elements</span></a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="form-basic.html">Basic Forms</a></li>
                                                    <li class="menu-item"><a href="form-inputs.html">Forms Inputs</a></li>
                                                    <li class="menu-item"><a href="form-input-groups.html">Forms Inputs Group</a></li>
                                                    <li class="menu-item"><a href="form-horizontal.html">Forms Horizontal</a></li>
                                                    <li class="menu-item"><a href="form-vertical.html">Forms Vertical</a></li>
                                                    <li class="menu-item"><a href="form-wizard.html">Forms Wizard</a></li>
                                                </ul>
                                                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                            </li>
                                            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-check-square-fill fs-16"></i></span> <span class="nav-text">Form Validation</span></a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="form-validation-bootstrap.html">Bootstrap Validation</a></li>
                                                    <li class="menu-item"><a href="form-validation-custom.html">Custom Validation</a></li>
                                                </ul>
                                                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                            </li>
                                            
                                        </ul>
                                    </li>
                                    <!-- Content -->
                                    <li class="menu-item menu-item-has-children"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-fonts fs-16"></i></span> <span class="nav-text">Content</span></a> 
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="typography.html"><span class="nav-icon flex-shrink-0"><i class="bi bi-fonts fs-16"></i></span> <span class="nav-text">Typography</span></a></li>
                                            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-table fs-16"></i></span> <span class="nav-text">Tables</span></a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-text">Bootstrap Table</span></a>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item"><a href="tables-bootstrap-basic.html">Basic Table</a></li>
                                                            <li class="menu-item"><a href="tables-bootstrap.html">Customized Table</a></li>
                                                        </ul>
                                                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                                    </li>
                                                    <li class="menu-item"><a href="tables-datatables.html">Data Tables</a></li>
                                                </ul>
                                                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                            </li>
                                            
                                        </ul>
                                    </li>

                                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-plugin fs-16"></i></span> <span class="nav-text">Plugins</span></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="form-dropzone.html">Forms Dropzone</a></li>
                                            <li class="menu-item"><a href="form-repeater.html">Forms Repeater</a></li>
                                            <li class="menu-item"><a href="form-select2.html">Forms Select 2</a></li>
                                            <li class="menu-item"><a href="sweetalert.html">Sweet Alert</a></li>
                                            <li class="menu-item"><a href="toastr.html">Toastr</a></li>
                                        </ul>
                                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                    </li>
                                </ul>
                            </li>
                            
                            <!-- Pages -->
                            <li class="menu-item menu-item-has-children"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-briefcase fs-16"></i></span> <span class="nav-text">Pages</span></a> 
                                <ul class="sub-menu">
                                    <!-- Authentication -->
                                    <li class="menu-item menu-item-has-children"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-person-bounding-box fs-16"></i></span> <span class="nav-text">Authentication</span></a> 
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-info-circle fs-16"></i></span> <span class="nav-text">Error</span></a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="403.html">403 Error</a></li>
                                                    <li class="menu-item"><a href="404.html">404 Error</a></li>
                                                    <li class="menu-item"><a href="500.html">500 Error</a></li>
                                                </ul>
                                                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                            </li>
                                            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-box-arrow-in-right fs-16"></i></span> <span class="nav-text">Login</span></a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="login.html">Boxed Login</a></li>
                                                    <li class="menu-item"><a href="login-2.html">Side Login</a></li>
                                                </ul>
                                                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                            </li>
                                            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-person-plus fs-16"></i></span> <span class="nav-text">Registration</span></a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="register.html">Boxed Registration</a></li>
                                                    <li class="menu-item"><a href="register-2.html">Side Registration</a></li>
                                                </ul>
                                                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                            </li>
                                            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-key fs-16"></i></span> <span class="nav-text">Password</span></a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item menu-item-has-children"><a href="#">Reset Passward</a>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item"><a href="reset-password.html">Boxed Reset Passward</a></li>
                                                            <li class="menu-item"><a href="reset-password-2.html">Side Reset Passward</a></li>
                                                        </ul>
                                                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                                    </li>
                                                    <li class="menu-item menu-item-has-children"><a href="#">Forgot Passward</a>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item"><a href="forgot-password.html">Boxed Forgot Passward</a></li>
                                                            <li class="menu-item"><a href="forgot-password-2.html">Side Forgot Passward</a></li>
                                                        </ul>
                                                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                                    </li>
                                                </ul>
                                                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                            </li>
                                            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-qr-code-scan fs-16"></i></span> <span class="nav-text">Two Step Varification</span></a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="two-step-varification.html">Boxed Varification</a></li>
                                                    <li class="menu-item"><a href="two-step-varification-2.html">Side Varification</a></li>
                                                </ul>
                                                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- Charts -->
                                    <li class="menu-item menu-item-has-children"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-graph-up-arrow fs-16"></i></span> <span class="nav-text">Charts</span></a> 
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-pie-chart-fill fs-16"></i></span> <span class="nav-text">Apex Chart</span></a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="apexchart-line.html">Line Chart</a></li>
                                                    <li class="menu-item"><a href="apexchart-bar.html">Bar Chart</a></li>
                                                    <li class="menu-item"><a href="apexchart-column.html">Column Chart</a></li>
                                                    <li class="menu-item"><a href="apexchart-area.html">Area Chart</a></li>
                                                    <li class="menu-item"><a href="apexchart-pie.html">Pie Chart</a></li>
                                                    <li class="menu-item"><a href="apexchart-radial.html">Radial Chart</a></li>
                                                </ul>
                                                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="d-flex align-items-center flex-shrink-0">
                    <ul class="nav-elements d-flex align-items-center list-unstyled m-0 p-0">
                        <li class="nav-item nav-search">
                            <button type="button" class="btn p-0 m-0 border-0" data-bs-toggle="modal" data-bs-target="#searchModal">
                                <img src="assets/img/svg/search.svg" alt="">
                            </button>
                        </li>
                        <li class="nav-item nav-color-switch d-flex align-items-center gap-3">
                            <div class="sun"><img src="assets/img/sun.svg" alt="img"></div>
                            <div class="switch">
                                <input type="checkbox" id="colorSwitch3" value="false" name="defaultMode">
                                <div class="shutter">
                                    <span class="lbl-off"></span>
                                    <span class="lbl-on"></span>
                                    <div class="slider bg-primary"></div>
                                </div>
                            </div>
                            <div class="moon"><img src="assets/img/moon.svg" alt="img"></div>
                        </li>

                        <li class="nav-item nav-flag">
                            <select class="kleon-select-single nav-toggler-content">
                                <option selected value="en">Eng(US)</option>
                                <option value="fr">French</option>
                                <option value="de">German</option>
                                <option value="sp">Spanish</option>
                            </select>
                        </li>

                        <li class="nav-item nav-author">
                            <a href="#" class="nav-toggler" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assets/img/nav_author.jpg" alt="img" width="54" class="rounded-2">
                                <div class="nav-toggler-content">
                                    <h6 class="mb-0">Franklin Jr.</h6>
                                    <div class="ff-heading fs-14 fw-normal text-gray">Super Admin</div>
                                </div>
                            </a>
                            <div class="dropdown-widget dropdown-menu p-0 admin-card">
                                <div class="dropdown-wrapper">
                                    <div class="card mb-0">
                                        <div class="card-header p-3 text-center">
                                            <img src="assets/img/nav_author.jpg" alt="img" width="80" class="rounded-circle avatar">
                                            <div class="mt-2">
                                                <h6 class="mb-0 lh-18">Franklin Jr.</h6>
                                                <div class="fs-14 fw-normal text-gray">Super Admin</div>
                                            </div>
                                        </div>
                                        <div class="card-body p-3">
                                            <ul class="list-unstyled p-0 m-0">
                                                <li>
                                                    <a href="profile.html" class="fs-14 fw-normal text-dark d-block p-1"><i class="bi bi-person me-2"></i> Profile</a>
                                                </li>
                                                <li >
                                                    <a href="email.html" class="fs-14 fw-normal text-dark d-block p-1"><i class="bi bi-envelope me-2 "></i> Inbox</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="fs-14 fw-normal text-dark d-block p-1"><i class="bi bi-gear me-2"></i> Setting & Privacy</a>
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="card-footer p-3">
                                            <a href="login.html" class="btn btn-outline-gray bg-transparent w-100 py-1 rounded-1 text-dark fs-14 fw-medium"><i class="bi bi-box-arrow-right"></i> Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="small-header d-flex align-items-center justify-content-between d-xl-none">
            <div class="logo">
                <a href="index.html" class="d-flex align-items-center gap-3 flex-shrink-0">
                    <img src="assets/img/logo-icon.svg" alt="logo">
                    <div class="position-relative flex-shrink-0">
                        <img src="assets/img/logo-text.svg" alt="" class="logo-text">
                        <img src="assets/img/logo-text-white.svg" alt="" class="logo-text-white">
                    </div>
                </a>
            </div>
            <div>
                <button type="button" class="kleon-header-expand-toggle"><span class="fs-24"><i class="bi bi-three-dots-vertical"></i></button>
                <button type="button" class="kleon-mobile-menu-opener"><span class="close"><i class="bi bi-arrow-left"></i></span> <span class="open"><i class="bi bi-list"></i></span></button>
            </div>
        </div>

        <div class="header-mobile-option">
            <div class="header-inner">
                <div class="d-flex align-items-center justify-content-end flex-shrink-0">
                    <ul class="nav-elements d-flex align-items-center list-unstyled m-0 p-0">
                        <li class="nav-item nav-search">
                            <button type="button" class="btn p-0 m-0 border-0" data-bs-toggle="modal" data-bs-target="#searchModal">
                                <i class="bi bi-search"></i>
                            </button>
                        </li>
                        <li class="nav-item nav-notification dropdown">
                            <a href="#" class="nav-toggler" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-bell-fill"></i>
                                <div class="badge rounded-circle">12</div>
                            </a>
                            <div class="dropdown-widget dropdown-menu p-0">
                                <div class="dropdown-wrapper pd-50">
                                    <div class="dropdown-wrapper--title">
                                        <h4 class="d-flex align-items-center justify-content-between">Notifications <a href="#">View All</a></h4>
                                    </div>
                                    <ul class="notification-board list-unstyled">
                                        <li class="author-online has-new-message d-flex gap-3">
                                            <div class="media bg-primary text-white">
                                                <i class="bi bi-lightning"></i>
                                            </div>
                                            <div class="user-message">
                                                <h6 class="message"><a href="#">Jackie Kun</a> mentioned you at <a href="#">Kleon Projects</a></h6>
                                                <p class="message-footer d-flex align-items-center justify-content-between"> <span class="fs-14 text-gray fw-normal">2m ago</span> <span>Mark as read</span></p>
                                            </div>
                                        </li>
                                        <li class="author-online has-new-message d-flex gap-3">
                                            <div class="media bg-secondary text-white">
                                                <i class="bi bi-lightning"></i>
                                            </div>
                                            <div class="user-message">
                                                <h6 class="message"><a href="#">Olivia Johanna</a> has created new task at <a href="#">Kleon Projects</a></h6>
                                                <p class="message-footer d-flex align-items-center justify-content-between"> <span class="fs-14 text-gray fw-normal">2m ago</span> <span>Mark as read</span></p>
                                            </div>
                                        </li>
                                        <li class="author-online has-new-message d-flex gap-3">
                                            <div class="media media-outline-red text-red">
                                                <i class="bi bi-clock-fill"></i>
                                            </div>
                                            <div class="user-message">
                                                <h6 class="message">[REMINDER] Due date of <a href="#">Highspeed Studios Projects</a> te task will be coming</h6>
                                                <p class="message-footer d-flex align-items-center justify-content-between"> <span class="fs-14 text-gray fw-normal">2m ago</span> <span>Mark as read</span></p>
                                            </div>
                                        </li>
                                    </ul>
                                    <h6 class="all-notifications"> <a href="#" class="btn bg-muted text-primary w-100 fw-bold mt-3 ff-heading px-0">View All Notifications</a> </h6>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item nav-settings">
                            <a href="#" class="nav-toggler">
                                <i class="bi bi-gear-fill"></i>
                            </a>
                        </li>

                        <li class="nav-item nav-author px-3">
                            <a href="#" class="nav-toggler" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assets/img/nav_author.jpg" alt="img" width="40" class="rounded-2">
                                <div class="nav-toggler-content">
                                    <h6 class="mb-0">Franklin Jr.</h6>
                                    <div class="ff-heading fs-14 fw-normal text-gray">Super Admin</div>
                                </div>
                            </a>
                            <div class="dropdown-widget dropdown-menu p-0 admin-card">
                                <div class="dropdown-wrapper">
                                    <div class="card mb-0">
                                        <div class="card-header p-3 text-center">
                                            <img src="assets/img/nav_author.jpg" alt="img" width="60" class="rounded-circle avatar">
                                            <div class="mt-2">
                                                <h6 class="mb-0 lh-18">Franklin Jr.</h6>
                                                <div class="fs-14 fw-normal text-gray">Super Admin</div>
                                            </div>
                                        </div>
                                        <div class="card-body p-3">
                                            <ul class="list-unstyled p-0 m-0">
                                                <li>
                                                    <a href="profile.html" class="fs-14 fw-normal text-dark d-block p-1"><i class="bi bi-person me-2"></i> Profile</a>
                                                </li>
                                                <li >
                                                    <a href="email.html" class="fs-14 fw-normal text-dark d-block p-1"><i class="bi bi-envelope me-2 "></i> Inbox</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="fs-14 fw-normal text-dark d-block p-1"><i class="bi bi-gear me-2"></i> Setting & Privacy</a>
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="card-footer p-3">
                                            <a href="login.html" class="btn btn-outline-gray bg-transparent w-100 py-1 rounded-1 text-dark fs-14 fw-medium"><i class="bi bi-box-arrow-right"></i> Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
    </header>

         <!-- Vertical Nav -->
        <div class="kleon-vertical-nav">
            <!-- Logo  -->
            <div class="logo d-flex align-items-center justify-content-between">
                <a href="index.html" class="d-flex align-items-center gap-3 flex-shrink-0">
                    <img src="assets/img/logo-icon.svg" alt="logo">
                    <div class="position-relative flex-shrink-0">
                        <img src="assets/img/logo-text.svg" alt="" class="logo-text">
                        <img src="assets/img/logo-text-white.svg" alt="" class="logo-text-white">
                    </div>
                </a>
                <button type="button" class="kleon-vertical-nav-toggle"><i class="bi bi-list"></i></button>
            </div>

            <div class="kleon-navmenu">
                <h6 class="hidden-header text-gray text-uppercase ls-1 ms-4 mb-4">Main Menu</h6>
                <ul class="main-menu">
                    
                    <li class="menu-section-title text-gray ff-heading fs-16 fw-bold text-uppercase mt-4 mb-2"><span>Home</span></li>
                    <li class="menu-item menu-item-has-children"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-speedometer fs-18"></i></span> <span class="nav-text">Dashboards</span></a> 
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="index.html">Invoice Management</a></li>
                            <li class="menu-item"><a href="index-hr.html">HR Management</a></li>
                            <li class="menu-item"><a href="index-job-hiring.html">Job Hiring Management</a></li>
                            <li class="menu-item"><a href="index-project.html">Project Management v1</a></li>
                            <li class="menu-item"><a href="index-project-2.html">Project Management v2</a></li>
                            <li class="menu-item"><a href="index-general.html">General Dashboard</a></li>
                        </ul>
                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                    </li>
                    
                    <li class="menu-section-title text-gray ff-heading fs-16 fw-bold text-uppercase mt-4 mb-2"><span>Sass</span></li>
                    <!-- HR Management -->
                    <li class="menu-item menu-item-has-children"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-people fs-18"></i></span> <span class="nav-text">HR Management</span></a> 
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="employees.html"> Employees <span class="menuIndicator bg-soft-secondary rounded-3 py-0 px-3">New</span></a></li>
                            <li class="menu-item"><a href="recruitment.html"> Recruitment</a></li>
                            <li class="menu-item"><a href="jobs.html"> Jobs <span class="menuIndicator bg-info rounded-circle text-white">17</span></a></li>
                            <li class="menu-item menu-item-has-children"><a href="#"> Candidates</a> 
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="candidates.html"> Candidate List</a></li>
                                    <li class="menu-item"><a href="candidate.html"> Candidate</a></li>
                                </ul>
                                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                            </li>
                            <li class="menu-item"><a href="attendances.html"> Attendances</a></li>
                            <li class="menu-item"><a href="leaves.html"> Leaves</a></li>
                            <li class="menu-item"><a href="documents.html"> Documents</a></li>
                        </ul>
                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                    </li>

                    <!-- Job Hiring -->
                    <li class="menu-item menu-item-has-children"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-briefcase fs-18"></i></span> <span class="nav-text">Job Hiring</span></a> 
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="jobs-hiring.html"> Jobs <span class="menuIndicator bg-info rounded-circle text-white">17</span></a></li>
                            <li class="menu-item menu-item-has-children"><a href="#"> Candidates</a> 
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="candidates-grid-hiring.html"> Candidate Grid</a></li>
                                    <li class="menu-item"><a href="candidates-list-hiring.html"> Candidate List</a></li>
                                    <li class="menu-item"><a href="candidates-qualified-hiring.html"> Qualified Candidates</a></li>
                                    <li class="menu-item"><a href="candidate-hiring.html"> Candidate Profile</a></li>
                                </ul>
                                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                            </li>
                            <li class="menu-item"><a href="statistics-hiring.html"> Statistics</a></li>
                            <li class="menu-item"><a href="company-hiring.html"> Company Profile</a></li>
                            <li class="menu-item"><a href="documents-hiring.html"> Documents</a></li>
                        </ul>
                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                    </li>

                    <!-- Project Management -->
                    <li class="menu-item menu-item-has-children"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-kanban fs-18"></i></span> <span class="nav-text">Project Management</span></a> 
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="contacts.html"> Contacts</a></li>
                            <li class="menu-item menu-item-has-children"><a href="#"> Projects</a> 
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="projects.html"> All Projects</a></li>
                                    <li class="menu-item"><a href="project-details.html"> Project Detail</a></li>
                                </ul>
                                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                            </li>
                            <li class="menu-item"><a href="files.html"> Files</a></li>
                            <li class="menu-item"><a href="profile.html"> Profile</a></li>
                        </ul>
                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                    </li>

                    <!-- General Dashboard -->
                    <li class="menu-item menu-item-has-children"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-speedometer2 fs-18"></i></span> <span class="nav-text">General</span></a> 
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-has-children"><a href="#"> Contacts</a> 
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="contacts-2.html"> Contact List</a></li>
                                    <li class="menu-item"><a href="contact-new.html"> Add Contact</a></li>
                                </ul>
                                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                            </li>
                            
                            <li class="menu-item"><a href="profile-2.html"> Profile</a></li>
                            <li class="menu-item"><a href="preferences.html"> Preferences</a></li>
                        </ul>
                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                    </li>

                    <!-- Apps -->
                    <li class="menu-section-title text-gray ff-heading fs-16 fw-bold text-uppercase mt-4 mb-2"><span>Apps</span></li>                    
                    <li class="menu-item"><a href="calendar.html"><span class="nav-icon flex-shrink-0"><i class="bi bi-calendar-day fs-18"></i></span> <span class="nav-text">Calendar</span></a></li>
                    
                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-envelope fs-18"></i></span> <span class="nav-text">Email</span></a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="email.html">Inbox</a></li>
                            <li class="menu-item"><a href="email-compose.html">Email Compose</a></li>
                            <li class="menu-item"><a href="email-details.html">Email Preview</a></li>
                        </ul>
                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                    </li>
                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-chat fs-18"></i></span> <span class="nav-text">Chat</span></a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="inbox.html">Inbox</a></li>
                            <li class="menu-item"><a href="chat.html">Chat Preview</a></li>
                            <li class="menu-item"><a href="chat-2.html">Chat 2 Preview</a></li>
                        </ul>
                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                    </li>
                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-receipt fs-18"></i></span> <span class="nav-text">Invoices</span></a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="invoices.html">Invoice List</a></li>
                            <li class="menu-item"><a href="invoice.html">Invoice Details</a></li>
                            <li class="menu-item"><a href="invoice-new.html">Create Invoice</a></li>
                        </ul>
                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                    </li>
                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-kanban fs-18"></i></span> <span class="nav-text">Task</span></a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="task.html">Task List</a></li>
                            <li class="menu-item"><a href="task-2.html">Task 2</a></li>
                            <li class="menu-item"><a href="task-jkanban.html">Kanban</a></li>
                        </ul>
                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                    </li>

                    <!-- Content -->
                    <li class="menu-section-title text-gray ff-heading fs-16 fw-bold text-uppercase mt-4 mb-2"><span>Content</span></li>
                    <li class="menu-item"><a href="typography.html"><span class="nav-icon flex-shrink-0"><i class="bi bi-fonts fs-18"></i></span> <span class="nav-text">Typography</span></a></li>
                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-table fs-18"></i></span> <span class="nav-text">Tables</span></a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-text">Bootstrap Table</span></a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="tables-bootstrap-basic.html">Basic Table</a></li>
                                    <li class="menu-item"><a href="tables-bootstrap.html">Customized Table</a></li>
                                </ul>
                                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                            </li>
                            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-text">Flex Table</span></a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="tables-flex-basic.html">Basic Flex Table</a></li>
                                    <li class="menu-item"><a href="tables-flex-customized.html">Customized Flex Table</a></li>
                                </ul>
                                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                            </li>
                            <li class="menu-item"><a href="tables-datatables.html">Data Tables</a></li>
                        </ul>
                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                    </li>
                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-gift fs-18"></i></span> <span class="nav-text">Widgets</span></a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="widget-apps.html">Widget Apps</a></li>
                            <li class="menu-item"><a href="widget-charts.html">Widget Charts</a></li>
                            <li class="menu-item"><a href="widget-cards.html">Widget Cards</a></li>
                            <li class="menu-item"><a href="widget-listing.html">Widget Listing</a></li>
                        </ul>
                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                    </li>
                    
                    
                    <!-- Forms -->
                    <li class="menu-section-title text-gray ff-heading fs-16 fw-bold text-uppercase mt-4 mb-2"><span>Forms</span></li>
                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-textarea-t fs-18"></i></span> <span class="nav-text">Form Elements</span></a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="form-basic.html">Basic Forms</a></li>
                            <li class="menu-item"><a href="form-inputs.html">Forms Inputs</a></li>
                            <li class="menu-item"><a href="form-input-groups.html">Forms Inputs Group</a></li>
                            <li class="menu-item"><a href="form-horizontal.html">Forms Horizontal</a></li>
                            <li class="menu-item"><a href="form-vertical.html">Forms Vertical</a></li>
                            <li class="menu-item"><a href="form-wizard.html">Forms Wizard</a></li>
                        </ul>
                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                    </li>
                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-check-square fs-18"></i></span> <span class="nav-text">Form Validation</span></a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="form-validation-bootstrap.html">Bootstrap Validation</a></li>
                            <li class="menu-item"><a href="form-validation-custom.html">Custom Validation</a></li>
                        </ul>
                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                    </li>
                    

                    <!-- UI Components -->
                    <li class="menu-section-title text-gray ff-heading fs-16 fw-bold text-uppercase mt-4 mb-2"><span>UI Components</span></li>
                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-bricks fs-18"></i></span> <span class="nav-text">UI Elements</span></a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="accordion.html">Accordion</a></li>
                            <li class="menu-item"><a href="alerts.html">Alerts</a></li>
                            <li class="menu-item"><a href="avatar.html">Avatar</a></li>
                            <li class="menu-item"><a href="badge.html">Badge</a></li>
                            <li class="menu-item"><a href="breadcrumb.html">Breadcrumb</a></li>
                            <li class="menu-item"><a href="collapse.html">Collapse</a></li>
                            <li class="menu-item"><a href="dropdowns.html">Dropdowns</a></li>
                            <li class="menu-item"><a href="list-group.html">List Group</a></li>
                            <li class="menu-item"><a href="modals.html">Modal</a></li>
                            <li class="menu-item"><a href="offcanvas.html">Offcanvas</a></li>
                            <li class="menu-item"><a href="tabs.html">Tabs</a></li>
                            <li class="menu-item"><a href="pagination.html">Pagination</a></li>
                            <li class="menu-item"><a href="placeholders.html">Placeholders</a></li>
                            <li class="menu-item"><a href="popovers.html">Popovers</a></li>
                            <li class="menu-item"><a href="progressbar.html">Progressbar</a></li>
                            <li class="menu-item"><a href="spinners.html">Spinners</a></li>
                            <li class="menu-item"><a href="toasts.html">Toasts</a></li>
                            <li class="menu-item"><a href="tooltips.html">Tooltips</a></li>
                        </ul>
                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                    </li>
                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-card-image fs-18"></i></span> <span class="nav-text">Cards</span></a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="cards-basic.html">Bootstrap Basic</a></li>
                            <li class="menu-item"><a href="cards.html">Customized Cards</a></li>
                        </ul>
                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                    </li>
                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-send fs-18"></i></span> <span class="nav-text">Buttons</span></a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="buttons.html">Default Buttons</a></li>
                            <li class="menu-item"><a href="video-buttons.html">Video Buttons</a></li>
                        </ul>
                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                    </li>
                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-plugin fs-18"></i></span> <span class="nav-text">Plugins</span></a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="form-dropzone.html">Dropzone</a></li>
                            <li class="menu-item"><a href="form-repeater.html">Repeater</a></li>
                            <li class="menu-item"><a href="form-select2.html">Select 2</a></li>
                            <li class="menu-item"><a href="sweetalert.html">Sweet Alert</a></li>
                            <li class="menu-item"><a href="toastr.html">Toastr</a></li>
                        </ul>
                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                    </li>

                    <!-- Authentication -->
                    <li class="menu-section-title text-gray ff-heading fs-16 fw-bold text-uppercase mt-4 mb-2"><span>Authentication</span></li>
                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-info-circle fs-18"></i></span> <span class="nav-text">Error</span></a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="403.html">403 Error</a></li>
                            <li class="menu-item"><a href="404.html">404 Error</a></li>
                            <li class="menu-item"><a href="500.html">500 Error</a></li>
                        </ul>
                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                    </li>
                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-box-arrow-in-right fs-18"></i></span> <span class="nav-text">Login</span></a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="login.html">Boxed Login</a></li>
                            <li class="menu-item"><a href="login-2.html">Side Login</a></li>
                        </ul>
                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                    </li>
                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-person-plus fs-18"></i></span> <span class="nav-text">Registration</span></a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="register.html">Boxed Registration</a></li>
                            <li class="menu-item"><a href="register-2.html">Side Registration</a></li>
                        </ul>
                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                    </li>
                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-key fs-18"></i></span> <span class="nav-text">Password</span></a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-has-children"><a href="#">Reset Passward</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="reset-password.html">Boxed Reset Passward</a></li>
                                    <li class="menu-item"><a href="reset-password-2.html">Side Reset Passward</a></li>
                                </ul>
                                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                            </li>
                            <li class="menu-item menu-item-has-children"><a href="#">Forgot Passward</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="forgot-password.html">Boxed Forgot Passward</a></li>
                                    <li class="menu-item"><a href="forgot-password-2.html">Side Forgot Passward</a></li>
                                </ul>
                                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                            </li>
                        </ul>
                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                    </li>
                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-qr-code-scan fs-18"></i></span> <span class="nav-text">Two Step Varification</span></a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="two-step-varification.html">Boxed Varification</a></li>
                            <li class="menu-item"><a href="two-step-varification-2.html">Side Varification</a></li>
                        </ul>
                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                    </li>

                    <!-- Charts -->
                    <li class="menu-section-title text-gray ff-heading fs-16 fw-bold text-uppercase mt-4 mb-2"><span>Charts</span></li>
                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-pie-chart fs-18"></i></span> <span class="nav-text">Apex Chart</span></a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="apexchart-line.html">Line Chart</a></li>
                            <li class="menu-item"><a href="apexchart-bar.html">Bar Chart</a></li>
                            <li class="menu-item"><a href="apexchart-column.html">Column Chart</a></li>
                            <li class="menu-item"><a href="apexchart-area.html">Area Chart</a></li>
                            <li class="menu-item"><a href="apexchart-pie.html">Pie Chart</a></li>
                            <li class="menu-item"><a href="apexchart-radial.html">Radial Chart</a></li>
                        </ul>
                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                    </li>
                    
                    
                </ul>
            </div>

            <div class="card border-0 text-white mr-top-70 boost-card">
                <div class="card-body">
                    <div class="icon fs-20 mb-2"><i class="bi bi-speedometer2"></i></div>
                    <h5 class="fs-18 text-white">Boost your work</h5>
                    <p class="fs-14 mb-4">Upgrade to premium here</p>
                    <a href="#" class="btn ff-heading fw-bold fs-16 bg-white text-primary rounded-3 border-0">Upgrade Now <i class="bi bi-caret-right-fill"></i></a>
                </div>
            </div>

            <div class="card border-0 rounded-0 mt-6">
                <div class="card-body p-0">
                    <h6 class="text-gray lh-20 mb-0">Kleon Admin Dashboard</h6>
                    <h6 class="text-gray fs-14 fw-medium">Made with <i class="bi bi-heart-fill text-red"></i> by <a href="#">WPThemeBooster</a></h6>
                </div>
            </div>
        </div>
        
        
      
        <!-- Theme Customizer Panel -->
        <button class="aside_open btn btn-primary position-fixed z-index-9 rounded-circle p-0 m-0 d-flex align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#themeSwitcher"><i class="bi bi-gear-fill fs-20"></i></button>
        <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="themeSwitcher">
            <div class="offcanvas-header bg-light-200">
                <h5 class="offcanvas-title">Theme Customizer</h5>
                <button type="button" class="aside_close btn btn-danger z-index-9 rounded-circle p-0 m-0 d-flex align-items-center justify-content-center" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x-lg"></i></button>
            </div>
            <div class="offcanvas-body bg-white p-0">
                <div class="bg-light-500 p-4 flex-grow-1">
                    <h6 class="mb-3 lh-16">Theme Color Mode</h6>
                    <div>
                        <div class="form-switch p-0">
                            <label class="form-label mb-0" for="colorSwitch4">Light</label>
                            <input type="checkbox" class="form-check-input border-0 m-0 mx-3" id="colorSwitch4">
                            <label class="form-label mb-0" for="colorSwitch4">Dark</label>
                        </div>
                    </div>
                </div>


                <div class="bg-light-200 p-4 flex-grow-1">
                    <h6 class="mb-3 lh-16">Navigation Layout</h6>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-check form-check-inline with-layout-image m-0">
                                <input type="radio" class="form-check-input" id="verticalNav" name="checkLayout" value="vertical" checked>
                                <label class="form-label mb-0" for="verticalNav">
                                    <span class="d-inline-block mb-2">
                                        <img class="light-version img-fluid rounded-1" src="assets/img/customizer/vertical-light.png" alt="img">
                                        <img class="dark-version img-fluid rounded-1" src="assets/img/customizer/vertical-dark.png" alt="img">
                                    </span>
                                    <span class="label-text">Vertical</span>
                                </label>
                            </div>                                
                        </div>                                
                        <div class="col-4">
                            <div class="form-check form-check-inline with-layout-image m-0">
                                <input type="radio" class="form-check-input" id="horizontalNav" name="checkLayout" value="horizontal">
                                <label class="form-label mb-0" for="horizontalNav">
                                    <span class="d-inline-block mb-2">
                                        <img class="light-version img-fluid rounded-1" src="assets/img/customizer/horizontal-light.png" alt="img">
                                        <img class="dark-version img-fluid rounded-1" src="assets/img/customizer/horizontal-dark.png" alt="img">
                                    </span>
                                    <span class="label-text">Horizontal</span>
                                </label>
                            </div> 
                        </div>
                        <div class="col-4">
                            <div class="form-check form-check-inline with-layout-image m-0">
                                <input type="radio" class="form-check-input" id="comboNav" name="checkLayout" value="combo">
                                <label class="form-label mb-0" for="comboNav">
                                    <span class="d-inline-block mb-2">
                                        <img class="light-version img-fluid rounded-1" src="assets/img/customizer/combo-light.png" alt="img">
                                        <img class="dark-version img-fluid rounded-1" src="assets/img/customizer/combo-dark.png" alt="img">
                                    </span>
                                    <span class="label-text">Combo</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="bg-light-500 p-4 flex-grow-1">
                    <h6 class="mb-3 lh-16">Vertical Navigation Styles</h6>
                    <div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="fullwidthNav" name="checkVerticalNav" value="fullwidth" checked>
                            <label class="form-label mb-0" for="fullwidthNav">Fullwidth</label>
                        </div>                                
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="collapseNav" name="checkVerticalNav" value="collapse">
                            <label class="form-label mb-0" for="collapseNav">Collapse</label>
                        </div>
                    </div>
                </div>


                <div class="bg-light-200 p-4 flex-grow-1">
                    <h6 class="mb-3 lh-16">Header Position</h6>
                    <div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="scrollableHeader" name="headerPosition" value="scrollable" checked>
                            <label class="form-label mb-0" for="scrollableHeader">Scrollable</label>
                        </div>                                
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="fixedHeader" name="headerPosition" value="fixed">
                            <label class="form-label mb-0" for="fixedHeader">Fixed</label>
                        </div>
                    </div>
                </div>

                <div class="bg-light-500 p-4 flex-grow-1">
                    <h6 class="mb-3 lh-16">Topbar Style</h6>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-check form-check-inline with-layout-image m-0">
                                <label class="form-label mb-0">
                                <a href="index.html" target="_blank" rel="noopener noreferrer" class="fs-14 fw-semibold text-dark">
                                        <span class="d-inline-block mb-2">
                                            <img class="light-version img-fluid rounded-1" src="assets/img/customizer/vertical-light.png" alt="img">
                                            <img class="dark-version img-fluid rounded-1" src="assets/img/customizer/vertical-dark.png" alt="img">
                                        </span>
                                        <span class="label-text">Style One</span>
                                    </a>
                                </label>
                            </div>                                
                        </div>                                
                        <div class="col-4">
                            <div class="form-check form-check-inline with-layout-image m-0">
                                <label class="form-label mb-0">
                                <a href="index-horizontal.html" target="_blank" rel="noopener noreferrer" class="fs-14 fw-semibold text-dark">
                                        <span class="d-inline-block mb-2">
                                            <img class="light-version img-fluid rounded-1" src="assets/img/customizer/horizontal-light.png" alt="img">
                                            <img class="dark-version img-fluid rounded-1" src="assets/img/customizer/horizontal-dark.png" alt="img">
                                        </span>
                                        <span class="label-text">Style Two</span>
                                    </a>
                                </label>
                            </div> 
                        </div>
                        <div class="col-4">
                            <div class="form-check form-check-inline with-layout-image m-0">
                                <label class="form-label mb-0">
                                <a href="index-combo.html" target="_blank" rel="noopener noreferrer" class="fs-14 fw-semibold text-dark">
                                        <span class="d-inline-block mb-2">
                                            <img class="light-version img-fluid rounded-1" src="assets/img/customizer/combo-light.png" alt="img">
                                            <img class="dark-version img-fluid rounded-1" src="assets/img/customizer/combo-dark.png" alt="img">
                                        </span>
                                        <span class="label-text">Style Three</span>
                                    </a>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Modal Search -->
        <div class="modal fade header-search-modal" id="searchModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <form class="search-form" action="https://srbthemes.kcubeinfotech.com/kleon/html/search.php">
                            <input type="text" name="search" class="keyword form-control w-100" placeholder="Search">
                            <button type="submit" class="btn"><img src="assets/img/svg/search.svg" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Wrapper-->
        <main class="main-wrapper">
            @yield('section');
        </main>

        


<!-- Core JS -->
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

<!-- jQuery UI Kit -->
<script src="{{ asset('plugins/jquery_ui/jquery-ui.1.12.1.min.js') }}"></script>

<!-- ApexChart -->
<script src="{{ asset('plugins/apexchart/apexcharts.min.js') }}"></script>
<script src="{{ asset('plugins/apexchart/apexchart-inits/apexcharts-project.js') }}"></script>

<!-- Peity -->
<script src="{{ asset('plugins/peity/jquery.peity.min.js') }}"></script>
<script src="{{ asset('plugins/peity/piety-init.js') }}"></script>

<!-- Select 2 -->
<script src="{{ asset('plugins/select2/js/select2.min.js') }}"></script>

<!-- Datatables -->
<script src="{{ asset('plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/js/datatables.init.js') }}"></script>

<!-- Date Picker -->
<script src="{{ asset('plugins/flatpickr/flatpickr.min.js') }}"></script>

<!-- Dropzone -->
<script src="{{ asset('plugins/dropzone/dropzone.min.js') }}"></script>
<script src="{{ asset('plugins/dropzone/dropzone_custom.js') }}"></script>

<!-- TinyMCE -->
<script src="{{ asset('plugins/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('plugins/prism/prism.js') }}"></script>
<script src="{{ asset('plugins/jquery-repeater/jquery.repeater.js') }}"></script>

<!-- Sweet Alert -->
<script src="{{ asset('plugins/sweetalert/sweetalert2.min.js') }}"></script>
<script src="{{ asset('plugins/sweetalert/sweetalert2-init.js') }}"></script>

<!-- Snippets JS -->
<script src="{{ asset('assets/js/snippets.js') }}"></script>

<!-- Theme Custom JS -->
<script src="{{ asset('assets/js/theme.js') }}"></script>

    </body>

<!-- Mirrored from srbthemes.kcubeinfotech.com/kleon/html/index-project.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Feb 2025 06:16:19 GMT -->
</html>