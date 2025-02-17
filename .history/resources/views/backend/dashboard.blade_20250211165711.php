@extends('main');


@section('section');
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
@endsection