@extends('main');


@section('section');
<div class="container-fluid">
    <div class="row">
        <div class="col-xxl-9 col-xl-8">
            <div class="inner-contents">
                <div class="page-header d-flex align-items-center justify-content-between mr-bottom-30 flex-wrap">
                    <div class="left-part">
                        <h2 class="text-dark">Dashboard</h2>
                        <p class="text-gray mb-0">Lorem ipsum  dolor sit amet </p>
                    </div>
                    <div class="right-part">
                        <form class="search-form w-auto" action="https://srbthemes.kcubeinfotech.com/kleon/html/search.php">
                            <input type="text" name="search" class=" bg-white form-control" placeholder="Search">
                            <button type="submit" class="btn"><img src="assets/img/svg/search.svg" alt=""></button>
                        </form>
                    </div>
                </div>
                
                <div class="card border-0 p-5">
                    <div class="card-header card-graph--header  bg-transparent border-0 p-0 d-flex align-items-center justify-content-between gap-3">
                        <h4 class="mb-0">Activity Logs</h4>
                        <div class="ms-auto d-flex align-items-center gap-3">
                            <select class="kleon-select-simple nav-toggler-content">
                                <option selected value="0">Daily</option>
                                <option value="1">Weekly</option>
                                <option value="2">Monthly</option>
                                <option value="3">Yearly</option>
                            </select>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <div id="chart-17"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xxl-4 col-md-6">
                        <div class="card border-0 card--stat bg-primary text-white">
                            <div class="card-body">
                                <div class="card-img d-flex align-items-center gap-3">
                                    <span class="d-inline-block bg-secondary text-white"><i class="bi bi-check-square-fill"></i></span>
                                    <h5 class="mb-0 text-white fw-semibold">Projects Completed</h5>
                                </div>
                                <div class="card-content mt-4 mb-4">
                                    <h3 class="fs-38 mb-0 text-white">4,115</h3>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <span class="icon"><i class="bi bi-arrow-up-circle-fill"></i></span>
                                    <p class="mb-0"><span class="fw-bold">+15%</span> than last month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6">
                        <div class="card border-0 card--stat bg-info text-white">
                            <div class="card-body">
                                <div class="card-img d-flex align-items-center gap-3">
                                    <span class="d-inline-block bg-primary text-white"><i class="bi bi-lightbulb-fill"></i></span>
                                    <h5 class="mb-0 text-white fw-semibold">Projects In Progress</h5>
                                </div>
                                <div class="card-content mt-4 mb-4">
                                    <h3 class="fs-38 mb-0 text-white">182</h3>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <span class="icon"><i class="bi bi-arrow-up-circle-fill"></i></span>
                                    <p class="mb-0"><span class="fw-bold">+15%</span> than last month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-12">
                        <div class="card border-0 card--stat bg-secondary text-white">
                            <div class="card-body">
                                <div class="card-img d-flex align-items-center gap-3">
                                    <span class="d-inline-block bg-info text-white"><i class="bi bi-bookmarks-fill"></i></span>
                                    <h5 class="mb-0 text-white fw-semibold">Upcoming Projects</h5>
                                </div>
                                <div class="card-content mt-4 mb-4">
                                    <h3 class="fs-38 mb-0 text-white">1,125</h3>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <span class="icon"><i class="bi bi-arrow-up-circle-fill"></i></span>
                                    <p class="mb-0"><span class="fw-bold">+15%</span> than last month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xxl-8">
                        <div class="card border-0 card-graph p-5">
                            <div class="card-header card-graph--header  bg-transparent border-0 p-0 mb-5 d-flex align-items-center justify-content-between gap-3">
                                
                                <div>
                                    <h4 class="mb-0">Weekly Target</h4>
                                    <p>Lorem ipsum dolor sit amet</p>
                                </div>
                                <div class="ms-auto d-flex align-items-center gap-3">    
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="fs-24 text-gray">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu p-0">
                                            <a class="dropdown-item" href="#">View</a>
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center gap-4 mb-5 justify-content-between flex-wrap">
                                    <div>
                                        <div class="card-content mb-1">
                                            <h3 class="fs-38 mb-0">32,741</h3>
                                        </div>
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="icon text-success"><i class="bi bi-arrow-up-circle-fill"></i></span>
                                            <p class="mb-0 text-gray"><span class="fw-bold text-success">+15%</span> than last month</p>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center gap-5">
                                        <div>
                                            <p class="mb-0 d-flex align-items-center"><span class="indicator bg-primary"></span> Completed</p>
                                            <h4>85,741 <span class="text-primary ff-base fs-14 fw-normal">50%</span></h4>
                                        </div>
                                        <div>
                                            <p class="mb-0 d-flex align-items-center"><span class="indicator bg-info"></span> Ongoing</p>
                                            <h4>23,733 <span class="text-info ff-base fs-14 fw-normal">25%</span></h4>
                                        </div>
                                        <div>
                                            <p class="mb-0 d-flex align-items-center"><span class="indicator bg-secondary"></span> Completed</p>
                                            <h4>15,468 <span class="text-secondary ff-base fs-14 fw-normal">5%</span></h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="progress-stacked">
                                    <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                      <div class="progress-bar"><span class="ff-heading fs-18 fw-bold">50%</span></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
                                      <div class="progress-bar bg-info"><span class="ff-heading fs-18 fw-bold">25%</span></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 15%">
                                      <div class="progress-bar bg-secondary"><span class="ff-heading fs-18 fw-bold">15%</span></div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-4">
                        <div class="card border-0 p-5">
                            <div class="card-header card-graph--header  bg-transparent border-0 p-0 mb-4 d-flex align-items-center justify-content-between gap-3">
                                <h4 class="mb-0">Progress</h4>
                                <div class="ms-auto d-flex align-items-center gap-3">        
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="fs-24 text-gray">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu p-0">
                                            <a class="dropdown-item" href="#">View</a>
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body p-0">
                                <div id="chart-19"></div>
                                <div class="d-flex align-items-center justify-content-between gap-5">
                                    <div>
                                        <p class="mb-0"><span class="indicator bg-primary"></span> Completed</p>
                                        <h4>85,741 <span class="text-primary ff-base fs-14 fw-normal">65%</span></h4>
                                    </div>
                                    <div>
                                        <p class="mb-0"><span class="indicator bg-secondary"></span> Ongoing</p>
                                        <h4>23,733 <span class="text-secondary ff-base fs-14 fw-normal">35%</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-xxl-3 col-xl-4 p-0">
            <!-- Right Side Panel -->
            <div class="kleon-right-side-panel overflow-auto">
                <!-- Calendar -->
                <div class="card border-0 p-0 rounded-0">
                    <div class="card-body p-0">
                        <div class="flatpickr-inline"></div>
                    </div>
                </div>

                <!-- Schedule -->
                <div class="card border-0 dropdown-widget dropdown-schedule p-0 rounded-0">
                    <div class="card-header border-0 d-flex align-items-center gap-4">
                        <div>
                            <h4 class="mb-0">Schedule</h4>
                            <p>Thursday January 10th, 2022</p>
                        </div>
                        <div class="ms-auto">
                            <a href="#" data-bs-toggle="dropdown" class="fs-24 text-gray">
                                <i class="bi bi-three-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu p-0">
                                <a class="dropdown-item" href="#">View</a>
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item text-danger" href="#">Remove</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <ul class="notification-board list-unstyled">
                            <li class="author-online has-new-message d-flex gap-3">
                                <div class="media">
                                    <img src="assets/img/1.jpg" alt="img" width="60" class="rounded-2">
                                </div>
                                <div class="user-message">
                                    <h6 class="message mb-1"><a href="#" class="text-dark">Meeting with Candidate #1</a></h6>
                                    <p class="message-footer d-flex align-items-center justify-content-between"> <span><i class="bi bi-calendar-fill"></i> January 17, 2023</span> <span><i class="bi bi-clock-fill"></i> 10.00 - 11.00</span></p>
                                </div>
                            </li>
                            <li class="author-online has-new-message d-flex gap-3">
                                <div class="media">
                                    <img src="assets/img/2.jpg" alt="img" width="60" class="rounded-2">
                                </div>
                                <div class="user-message">
                                    <h6 class="message mb-1"><a href="#" class="text-dark">Meeting with Candidate #2</a></h6>
                                    <p class="message-footer d-flex align-items-center justify-content-between"> <span><i class="bi bi-calendar-fill"></i> January 17, 2023</span> <span><i class="bi bi-clock-fill"></i> 10.00 - 11.00</span></p>
                                </div>
                            </li>
                            <li class="author-online has-new-message d-flex gap-3">
                                <div class="media">
                                    <img src="assets/img/3.jpg" alt="img" width="60" class="rounded-2">
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

                <div class="card border-0 p-0 rounded-0">
                    <div class="card-header border-0 d-flex align-items-center gap-4">
                        <div>
                            <h4 class="mb-0">Project Task</h4>
                        </div>
                        <div class="ms-auto">
                            <a href="#" data-bs-toggle="dropdown" class="fs-24 text-gray">
                                <i class="bi bi-three-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu p-0">
                                <a class="dropdown-item" href="#">View</a>
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item text-danger" href="#">Remove</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="card-content">
                            <div id="chart-20"></div>
                        </div>
                    </div>
                </div>

                <!-- Project Task -->
                <div class="card border-0 p-0 rounded-0">
                    <div class="card-header border-0 d-flex align-items-center gap-4">
                        <div>
                            <h4 class="mb-0">Project Task</h4>
                        </div>
                        <div class="ms-auto">
                            <a href="#" data-bs-toggle="dropdown" class="fs-24 text-gray">
                                <i class="bi bi-three-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu p-0">
                                <a class="dropdown-item" href="#">View</a>
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item text-danger" href="#">Remove</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="card-content">
                            <h5 class="text-primary mt-0 mb-2">Kleon Dashboard Template</h5>
                            <div class="progress rounded-1 bg-light-200" role="progressbar" aria-label="Storage"
                                aria-valuenow="62" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-primary rounded-1" style="width: 61%"></div>
                            </div>
                            <h5 class="d-flex justify-content-between text-gray fw-semibold mt-2 mb-0"><span>Progress</span>
                                <span>61/100%</span></h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection