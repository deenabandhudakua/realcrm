   <?php require_once 'includes/header.php' ?>
   <?php require_once 'includes/common-css.php' ?>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
          <?php require_once 'includes/menu-inner.php' ?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <?php require_once 'includes/navbar.php' ?>
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row gy-4 mb-4">

                <div class="col-xl-4">
                  <div class="card h-100">
                    <div class="card-body text-nowrap">
                      <h4 class="card-title mb-1 d-flex gap-2 flex-wrap">Welcome Profile Name</h4>
                      <p class="pb-0">Wishing You A Great Day Ahead</p>
                      <ul class="list-unstyled mb-4">
                        <li class="mb-2">
                          <span class="h6 me-1">Designation:</span>
                          <span>Developer</span>
                        </li>
                        <li class="mb-2">
                          <span class="h6 me-1">Department:</span>
                          <span>IT</span>
                        </li>

                        <li class="mb-2">
                          <span class="h6 me-1">Contact:</span>
                          <span>+91 456 356 7890</span>
                        </li>

                        <li>
                          <span class="h6 me-1">Email:</span>
                          <span>johan@gmail.com</span>
                        </li>
                      </ul>
                      <a href="javascript:;" class="btn btn-sm btn-primary">View Profile</a>
                    </div>
                    <img
                      src="assets/img/avatars/1.png"
                      class="bottom-0 end-0 mb-1 me-1 position-absolute"
                      height="140"
                      alt="view sales" />
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="card h-100">
                    <div class="card-body text-center">
                   
                   
                      <h5 class="mb-1 card-title">Enquiries</h5>
                      <div class="d-flex align-items-center justify-content-center my-4 gap-2">
                        <a href="javascript:;" class="me-1"
                          ><span class="badge bg-label-info rounded-pill">Prospet</span></a
                        >
                        <a href="javascript:;" class="me-1"
                          ><span class="badge bg-label-danger rounded-pill">Lead</span></a
                        >
                        <a href="javascript:;"><span class="badge bg-label-primary rounded-pill">Sales</span></a>
                      </div>

                      <div class="d-flex align-items-center justify-content-around mb-4">
                        <div>
                          <h4 class="mb-1">244</h4>
                          <span>Prospet</span>
                        </div>
                        <div>
                          <h4 class="mb-1">23.8k</h4>
                          <span>Lead</span>
                        </div>
                        <div>
                          <h4 class="mb-1">2.14k</h4>
                          <span>Sales</span>
                        </div>
                      </div>
                      <div class="d-flex align-items-center justify-content-center">
                        <a href="javascript:;" class="btn btn-primary d-flex align-items-center me-3"
                          ><i class="mdi mdi-account-check-outline me-1"></i>Enquiries</a
                        >
                        <a href="javascript:;" class="btn btn-outline-secondary btn-icon"
                          ><i class="mdi mdi-email-outline lh-sm"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Follow up</h5>
                    </div>
                    <div class="card-body">
                  
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-3">
                          <div class="flex-shrink-0">
                            <img
                              src="assets/img/avatars/1.png"
                              alt="facebook"
                              class="me-3"
                              height="34" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Today</h6>
                            </div>
                            <div class="d-flex align-items-center">
                              <span class="h6 mb-0">12,348</span>
                              <div class="ms-3 badge bg-label-success rounded-pill">+12%</div>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-3">
                          <div class="flex-shrink-0">
                            <img
                              src="assets/img/avatars/2.png"
                              alt="dribbble"
                              class="me-3"
                              height="34" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Upcoming</h6>
                            </div>
                            <div class="d-flex align-items-center">
                              <span class="h6 mb-0">8,450</span>
                              <div class="ms-3 badge bg-label-success rounded-pill">+32%</div>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-3">
                          <div class="flex-shrink-0">
                            <img
                              src="assets/img/avatars/3.png"
                              alt="facebook"
                              class="me-3"
                              height="34" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Pending</h6>
                            </div>
                            <div class="d-flex align-items-center">
                              <span class="h6 mb-0">350</span>
                              <div class="ms-3 badge bg-label-danger rounded-pill">-18%</div>
                            </div>
                          </div>
                        </li>
                        <a href="javascript:;" class="btn btn-sm btn-primary">View Follow</a>  
                      </ul>
                    </div>
                  </div>
                </div>
              <!-- Total Growth chart -->
                <div class="col-xl-2 col-md-3 col-sm-6">
                  <div class="card h-100">
                    <div class="card-header pb-0">
                      <div class="d-flex align-items-end mb-1 flex-wrap gap-2">
                        <h5 class="mb-0 me-2">Sales</h5>
                      </div>
                      <div class="align-items-center d-flex mb-1">
                        <span class="mb-0">Total Sales</span>
                        <div class="ms-3 badge bg-label-secondary rounded-pill">+23%</div>
                      </div>
                     <div class="align-items-center d-flex mb-1">
                        <span class="mb-0">Pipeline Sales</span>
                        <div class="ms-3 badge bg-label-primary rounded-pill">+35%</div>
                      </div>
                    <div class="align-items-center d-flex mb-1">
                        <span class="mb-0">Quote</span>
                        <div class="ms-3 badge bg-label-success rounded-pill">+30%</div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div id="totalGrowthChart"></div>
                    </div>
                    <a href="javascript:;" class="btn btn-sm btn-primary">View Details</a>  
                  </div>
                </div>
                <!--/ Total Sales chart -->
                <div class="col-xl-2 col-md-3 col-sm-6">
                  <div class="card h-100">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                        <div class="avatar">
                          <div class="avatar-initial bg-label-primary rounded">
                            <i class="mdi mdi-cart-plus mdi-24px"></i>
                          </div>
                        </div>
                        <div class="d-flex align-items-center">
                          <p class="mb-0 text-success me-1">+22%</p>
                          <i class="mdi mdi-chevron-up text-success"></i>
                        </div>
                      </div>

                      <div class="card-info mt-4 pt-1">
                        <h5 class="mb-2">Lead Status</h5>
                      </div>
                      <div class="align-items-center d-flex mb-1">
                        <span class="mb-0 bg-label-danger badge rounded-pill">Hot Lead</span>
                        <div class="fw-bold ms-5 text-danger">20</div>
                      </div>
                      <div class="align-items-center d-flex mb-1">
                        <span class="mb-0 bg-label-success badge rounded-pill">Cold Lead</span>
                        <div class="fw-bold ms-5 text-success">50</div>
                      </div>
                      <div class="align-items-center d-flex mb-1">
                        <span class="mb-0 bg-label-warning badge rounded-pill">Warm Lead</span>
                        <div class="fw-bold ms-5 text-warning">20</div>
                      </div>
                      
                    </div>
                    <a href="javascript:;" class="btn btn-sm btn-primary">View Status</a>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="card h-100">
                    <div class="card-header pb-0">
                      <div class="d-flex align-items-end mb-1 flex-wrap gap-2">
                        <h5 class="mb-0 me-2">Finance</h5>
                      </div>
                    </div>
                    <div class="card-body">
                      <ul class="list-unstyled mb-0">
                        <li class="d-flex pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-primary"
                              ><i class="mdi mdi-currency-usd mdi-20px"></i></span>
                          </div>
                          <div class="row w-100 align-items-center">
                            <div class="col-sm-8 col-lg-12 col-xxl-8 mb-1 mb-sm-0 mb-lg-1 mb-xxl-0">
                              <h6 class="mb-0 lh-sm">Salary</h6>
                            </div>
                            <div class="col-sm-4 col-lg-12 col-xxl-4 text-sm-end text-lg-start text-xxl-end">
                              <div class="badge bg-label-secondary rounded-pill fw-normal">1.2k Views</div>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-info"
                              ><i class="mdi mdi-code-tags mdi-24px"></i
                            ></span>
                          </div>
                          <div class="row w-100 align-items-center">
                            <div class="col-sm-8 col-lg-12 col-xxl-8 mb-1 mb-sm-0 mb-lg-1 mb-xxl-0">
                              <h6 class="mb-0 lh-sm">Commission Earned</h6>
                            </div>
                            <div class="col-sm-4 col-lg-12 col-xxl-4 text-sm-end text-lg-start text-xxl-end">
                              <div class="badge bg-label-secondary rounded-pill fw-normal">834 Views</div>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-success"
                              ><i class="mdi mdi-camera-image mdi-24px"></i
                            ></span>
                          </div>
                          <div class="row w-100 align-items-center">
                            <div class="col-sm-8 col-lg-12 col-xxl-8 mb-1 mb-sm-0 mb-lg-1 mb-xxl-0">
                              <h6 class="mb-0 lh-sm">Commission Received</h6>
                            </div>
                            <div class="col-sm-4 col-lg-12 col-xxl-4 text-sm-end text-lg-start text-xxl-end">
                              <div class="badge bg-label-secondary rounded-pill fw-normal">3.7k Views</div>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-warning"
                              ><i class="mdi mdi-palette-outline mdi-24px"></i
                            ></span>
                          </div>
                          <div class="row w-100 align-items-center">
                            <div class="col-sm-8 col-lg-12 col-xxl-8 mb-1 mb-sm-0 mb-lg-1 mb-xxl-0">
                              <h6 class="mb-0 lh-sm">Commission Due</h6>
                            </div>
                            <div class="col-sm-4 col-lg-12 col-xxl-4 text-sm-end text-lg-start text-xxl-end">
                              <div class="badge bg-label-secondary rounded-pill fw-normal">2.5k Views</div>
                            </div>
                          </div>
                        </li>
                 
                      </ul>
                       <a href="javascript:;" class="btn btn-sm btn-primary">View Status</a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="card h-100">
                    <div class="card-header pb-0">
                      <div class="d-flex align-items-end mb-1 flex-wrap gap-2">
                        <h5 class="mb-0 me-2">Finance</h5>
                      </div>
                    </div>
                    <div class="card-body">
                      <ul class="list-unstyled mb-0">
                        <li class="d-flex pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-primary"
                              ><i class="mdi mdi-currency-usd mdi-20px"></i></span>
                          </div>
                          <div class="row w-100 align-items-center">
                            <div class="col-sm-8 col-lg-12 col-xxl-8 mb-1 mb-sm-0 mb-lg-1 mb-xxl-0">
                              <h6 class="mb-0 lh-sm">Salary</h6>
                            </div>
                            <div class="col-sm-4 col-lg-12 col-xxl-4 text-sm-end text-lg-start text-xxl-end">
                              <div class="badge bg-label-secondary rounded-pill fw-normal">1.2k Views</div>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-info"
                              ><i class="mdi mdi-code-tags mdi-24px"></i
                            ></span>
                          </div>
                          <div class="row w-100 align-items-center">
                            <div class="col-sm-8 col-lg-12 col-xxl-8 mb-1 mb-sm-0 mb-lg-1 mb-xxl-0">
                              <h6 class="mb-0 lh-sm">Commission Earned</h6>
                            </div>
                            <div class="col-sm-4 col-lg-12 col-xxl-4 text-sm-end text-lg-start text-xxl-end">
                              <div class="badge bg-label-secondary rounded-pill fw-normal">834 Views</div>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-success"
                              ><i class="mdi mdi-camera-image mdi-24px"></i
                            ></span>
                          </div>
                          <div class="row w-100 align-items-center">
                            <div class="col-sm-8 col-lg-12 col-xxl-8 mb-1 mb-sm-0 mb-lg-1 mb-xxl-0">
                              <h6 class="mb-0 lh-sm">Commission Received</h6>
                            </div>
                            <div class="col-sm-4 col-lg-12 col-xxl-4 text-sm-end text-lg-start text-xxl-end">
                              <div class="badge bg-label-secondary rounded-pill fw-normal">3.7k Views</div>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-warning"
                              ><i class="mdi mdi-palette-outline mdi-24px"></i
                            ></span>
                          </div>
                          <div class="row w-100 align-items-center">
                            <div class="col-sm-8 col-lg-12 col-xxl-8 mb-1 mb-sm-0 mb-lg-1 mb-xxl-0">
                              <h6 class="mb-0 lh-sm">Commission Due</h6>
                            </div>
                            <div class="col-sm-4 col-lg-12 col-xxl-4 text-sm-end text-lg-start text-xxl-end">
                              <div class="badge bg-label-secondary rounded-pill fw-normal">2.5k Views</div>
                            </div>
                          </div>
                        </li>
                 
                      </ul>
                       <a href="javascript:;" class="btn btn-sm btn-primary">View Status</a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title mb-0 me-2">Target</h5>
                    </div>
                    <div class="card-body">
                      <div class="d-none d-lg-flex vehicles-progress-labels mb-3">
                        <div class="vehicles-progress-label on-the-way-text" style="width: 39.7%">Target</div>
                        <div class="vehicles-progress-label unloading-text" style="width: 28.3%">Target month</div>
                        <div class="vehicles-progress-label loading-text" style="width: 17.4%">Target Annual</div>
             
                      </div>
                      <div class="vehicles-overview-progress progress rounded mb-3" style="height: 46px">
                        <div
                          class="progress-bar fs-big fw-medium text-start bg-label-light text-heading px-1 px-lg-3"
                          role="progressbar"
                          style="width: 40%"
                          aria-valuenow="39.7"
                          aria-valuemin="0"
                          aria-valuemax="100">
                          39.7%
                        </div>
                        <div
                          class="progress-bar fs-big fw-medium text-start bg-primary px-1 px-lg-3"
                          role="progressbar"
                          style="width: 20%"
                          aria-valuenow="28.3"
                          aria-valuemin="0"
                          aria-valuemax="100">
                          28.3%
                        </div>
                        <div
                          class="progress-bar fs-big fw-medium text-start text-bg-info px-1 px-lg-3"
                          role="progressbar"
                          style="width: 40%"
                          aria-valuenow="17.4"
                          aria-valuemin="0"
                          aria-valuemax="100">
                          17.4%
                        </div>
                      </div>
                      <div class="table-responsive">
                        <table class="table card-table">
                          <tbody class="table-border-bottom-0">
                            <tr>
                              <td class="ps-0">
                                <div class="d-flex justify-content-start align-items-center">
                                  <h6 class="mb-0 fw-normal">Goal</h6>
                                </div>
                              </td>
                              <td class="pe-0 text-center text-nowrap">
                                <h6 class="mb-0">Sales Unit Value</h6>
                              </td>
                              <td class="pe-0 text-nowrap">
                                <h6 class="mb-0">Total Due</h6>
                              </td>
                           
                            </tr>

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                   <!-- Meeting Schedule -->
                <div class="col-xl-3 col-md-6">
                  <div class="card">
                    <div class="align-items-center card-header d-flex justify-content-between py-3">
                      <h5 class="card-title m-0 me-2">Performance Chart</h5>
                    </div>
                    <div class="card-body py-1">
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="assets/img/avatars/4.png" alt="avatar" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Call with Woods</h6>
                              <small>
                                <i class="mdi mdi-calendar-blank-outline mdi-14px"></i>
                                <span>21 Jul | 08:20-10:30</span>
                              </small>
                            </div>
                            <div class="badge bg-label-primary rounded-pill">Business</div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="assets/img/avatars/5.png" alt="avatar" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Conference call</h6>
                              <small>
                                <i class="mdi mdi-calendar-blank-outline mdi-14px"></i>
                                <span>21 Jul | 08:20-10:30</span>
                              </small>
                            </div>
                            <div class="badge bg-label-warning rounded-pill">Dinner</div>
                          </div>
                        </li>
                        <li class="d-flex pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="assets/img/avatars/3.png" alt="avatar" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Meeting with Mark</h6>
                              <small>
                                <i class="mdi mdi-calendar-blank-outline mdi-14px"></i>
                                <span>21 Jul | 08:20-10:30</span>
                              </small>
                            </div>
                            <div class="badge bg-label-secondary rounded-pill">Meetup</div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- Total Visits -->
                <div class="col-lg-3 col-sm-6">
                  <div class="card">
                    <div class="card-header pb-0">
                      <div class="d-flex justify-content-between flex-wrap gap-2">
                         <h5 class="card-title m-0 me-2">Visits</h5>
                        <div class="d-flex text-success">
                          <p class="me-1">+18.4%</p>
                          <i class="mdi mdi-chevron-up"></i>
                        </div>
                      </div>
                      <h4 class="mb-1">$42.5k</h4>
                    </div>
                    <div class="card-body pt-2">
                      <div class="row mt-3">
                        <div class="col-4">
                          <div class="d-flex gap-2 align-items-center mb-2">
                            <div class="avatar avatar-xs flex-shrink-0">
                              <div class="avatar-initial rounded bg-label-warning">
                                <i class="mdi mdi-cellphone mdi-14px"></i>
                              </div>
                            </div>
                            <p class="mb-0">Mobile</p>
                          </div>
                          <h4 class="mb-0 pt-1 text-nowrap">23.5%</h4>
                          <small class="text-muted">2,890</small>
                        </div>
                        <div class="col-4">
                          <div class="divider divider-vertical">
                            <div class="divider-text">
                              <span class="badge-divider-bg bg-label-secondary">VS</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-4 text-end pe-lg-0 pe-xl-2">
                          <div class="d-flex gap-2 justify-content-end align-items-center mb-2">
                            <p class="mb-0">Desktop</p>
                            <div class="avatar avatar-xs flex-shrink-0">
                              <div class="avatar-initial rounded bg-label-primary">
                                <i class="mdi mdi-monitor mdi-14px"></i>
                              </div>
                            </div>
                          </div>
                          <h4 class="mb-0 pt-1 text-nowrap">76.5%</h4>
                          <small class="text-muted">22,465</small>
                        </div>
                      </div>
                      <div class="d-flex align-items-center mt-2 pt-1">
                        <div class="progress w-100 rounded" style="height: 10px">
                          <div
                            class="progress-bar bg-warning"
                            style="width: 20%"
                            role="progressbar"
                            aria-valuenow="20"
                            aria-valuemin="0"
                            aria-valuemax="100"></div>
                          <div
                            class="progress-bar bg-primary"
                            role="progressbar"
                            style="width: 80%"
                            aria-valuenow="80"
                            aria-valuemin="0"
                            aria-valuemax="100"></div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="col-12 col-xl-4 col-md-6">
                  <div class="card h-100">
                    <div class="card-body">
                      <div class="bg-label-info text-center mb-3 pt-2 rounded-3">
                        <img
                          class="img-fluid"
                          src="assets/img/illustrations/lead2.png"
                          alt="Boy card image"
                          width="130" />
                      </div>
                      <h5 class="mb-2 pb-1">Lead Funnel</h5>
                      <p>Next Generation Frontend Architecture Using Layout Engine And React Native Web.</p>
                      <div class="row mb-3 g-3">
                        <div class="col-6">
                          <div class="d-flex">
                            <div class="avatar flex-shrink-0 me-2">
                              <span class="avatar-initial rounded bg-label-primary"
                                ><i class="mdi mdi-calendar-blank mdi-24px"></i
                              ></span>
                            </div>
                            <div>
                              <h6 class="mb-0 text-nowrap">17 Nov 23</h6>
                              <small>Date</small>
                            </div>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="d-flex">
                            <div class="avatar flex-shrink-0 me-2">
                              <span class="avatar-initial rounded bg-label-primary"
                                ><i class="mdi mdi-timer-outline mdi-24px"></i
                              ></span>
                            </div>
                            <div>
                              <h6 class="mb-0 text-nowrap">32 minutes</h6>
                              <small>Duration</small>
                            </div>
                          </div>
                        </div>
                      </div>
                      <a href="javascript:void(0);" class="btn btn-primary w-100">View Details</a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-md-6">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Customer List</h5>
                    </div>
                    <div class="table-responsive text-nowrap">
                      <table class="table table-borderless">
                        <thead class="border-bottom">
                          <tr>
                            <th class="text-capitalize text-body fw-medium fs-6">Name</th>
                            <th class="text-capitalize text-body fw-medium fs-6">Phone</th>
                            <th class="text-capitalize text-body fw-medium fs-6">Project</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="d-flex pt-3">
                              <div class="avatar flex-shrink-0">
                                <img src="assets/img/avatars/5.png" alt="avatar" class="rounded">
                              </div>
                              <div class="ms-3">
                                <h6 class="mb-0">Deenabandhu</h6>
                              </div>
                            </td>
                            <td class="px-1 small">+91 1236547892</td>
                            <td class="px-1">
                              <div class="ms-2">
                                <h6 class="mb-0">RealEstate</h6>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td class="d-flex pt-3">
                              <div class="avatar flex-shrink-0">
                                <img src="assets/img/avatars/5.png" alt="avatar" class="rounded">
                              </div>
                              <div class="ms-3">
                                <h6 class="mb-0">Deenabandhu</h6>
                              </div>
                            </td>
                            <td class="px-1 small">+91 1236547892</td>
                            <td class="px-1">
                              <div class="ms-2">
                                <h6 class="mb-0">RealEstate</h6>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td class="d-flex pt-3">
                              <div class="avatar flex-shrink-0">
                                <img src="assets/img/avatars/5.png" alt="avatar" class="rounded">
                              </div>
                              <div class="ms-3">
                                <h6 class="mb-0">Deenabandhu</h6>
                              </div>
                            </td>
                            <td class="px-1 small">+91 1236547892</td>
                            <td class="px-1">
                              <div class="ms-2">
                                <h6 class="mb-0">RealEstate</h6>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td class="d-flex pt-3">
                              <div class="avatar flex-shrink-0">
                                <img src="assets/img/avatars/5.png" alt="avatar" class="rounded">
                              </div>
                              <div class="ms-3">
                                <h6 class="mb-0">Deenabandhu</h6>
                              </div>
                            </td>
                            <td class="px-1 small">+91 1236547892</td>
                            <td class="px-1">
                              <div class="ms-2">
                                <h6 class="mb-0">RealEstate</h6>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-md-6">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Social Network Visits</h5>
                      <div class="dropdown">
                        <button
                          class="btn p-0"
                          type="button"
                          id="socialNetworkList"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false">
                          <i class="mdi mdi-dots-vertical mdi-24px"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="socialNetworkList">
                          <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                          <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                          <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="mb-3">
                        <div class="d-flex align-items-center mb-1">
                          <h4 class="mb-0">28,468</h4>
                          <span class="text-success ms-2 fw-medium">
                            <i class="mdi mdi-menu-up"></i>
                            <small>62%</small>
                          </span>
                        </div>
                        <small>Last 1 Year Visits</small>
                      </div>
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-3">
                          <div class="flex-shrink-0">
                            <img
                              src="assets/img/icons/brands/facebook-rounded.png"
                              alt="facebook"
                              class="me-3"
                              height="34" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Facebook</h6>
                              <small>Social Media</small>
                            </div>
                            <div class="d-flex align-items-center">
                              <span class="h6 mb-0">12,348</span>
                              <div class="ms-3 badge bg-label-success rounded-pill">+12%</div>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-3">
                          <div class="flex-shrink-0">
                            <img
                              src="assets/img/icons/brands/dribbble-rounded.png"
                              alt="dribbble"
                              class="me-3"
                              height="34" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Dribbble</h6>
                              <small>Community</small>
                            </div>
                            <div class="d-flex align-items-center">
                              <span class="h6 mb-0">8,450</span>
                              <div class="ms-3 badge bg-label-success rounded-pill">+32%</div>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-3">
                          <div class="flex-shrink-0">
                            <img
                              src="assets/img/icons/brands/twitter-rounded.png"
                              alt="facebook"
                              class="me-3"
                              height="34" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Twitter</h6>
                              <small>Social Media</small>
                            </div>
                            <div class="d-flex align-items-center">
                              <span class="h6 mb-0">350</span>
                              <div class="ms-3 badge bg-label-danger rounded-pill">-18%</div>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex">
                          <div class="flex-shrink-0">
                            <img
                              src="assets/img/icons/brands/instagram-rounded.png"
                              alt="instagram"
                              class="me-3"
                              height="34" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Instagram</h6>
                              <small>Social Media</small>
                            </div>
                            <div class="d-flex align-items-center">
                              <span class="h6 mb-0">25,566</span>
                              <div class="ms-3 badge bg-label-success rounded-pill">+42%</div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-6">
                  <div class="card h-100">
                    <div class="card-header">
                      <div class="d-flex justify-content-between">
                        <h5 class="mb-1">Weekly Overview</h5>
                        <div class="dropdown">
                          <button
                            class="btn p-0"
                            type="button"
                            id="weeklySalesDropdown"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">
                            <i class="mdi mdi-dots-vertical mdi-24px"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="weeklySalesDropdown">
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Update</a>
                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                          </div>
                        </div>
                      </div>
                      <p class="text-body mb-0">Total 85.4k Sales</p>
                    </div>
                    <div class="card-body">
                      <div class="row mb-2">
                        <div class="col-6 d-flex align-items-center">
                          <div class="avatar">
                            <div class="avatar-initial bg-label-primary rounded">
                              <i class="mdi mdi-trending-up mdi-24px"></i>
                            </div>
                          </div>
                          <div class="ms-3 d-flex flex-column">
                            <small class="text-body mb-1">Net Income</small>
                            <h6 class="mb-0">$438.5K</h6>
                          </div>
                        </div>
                        <div class="col-6 d-flex align-items-center">
                          <div class="avatar">
                            <div class="avatar-initial bg-label-warning rounded">
                              <i class="mdi mdi-currency-usd mdi-24px"></i>
                            </div>
                          </div>
                          <div class="ms-3 d-flex flex-column">
                            <small class="text-body mb-1">Expense</small>
                            <h6 class="mb-0">$22.4K</h6>
                          </div>
                        </div>
                      </div>
                      <div id="weeklySalesChart"></div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-6">
                  <div class="card h-100">
                    <div class="card-header d-flex justify-content-between">
                      <div class="card-title m-0">
                        <h5 class="mb-1">Product List</h5>
                        <p class="text-body mb-0">82% Activity Growth</p>
                      </div>
                      <div class="dropdown">
                        <button
                          class="btn p-0"
                          type="button"
                          id="earningReportsTabsId"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false">
                          <i class="mdi mdi-dots-vertical mdi-24px"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReportsTabsId">
                          <a class="dropdown-item" href="javascript:void(0);">View More</a>
                          <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body py-0">
                      <ul class="nav nav-tabs nav-tabs-widget pb-3 gap-4 mx-1 d-flex flex-nowrap" role="tablist">
                        <li class="nav-item">
                          <a
                            href="javascript:void(0);"
                            class="nav-link btn active d-flex flex-column align-items-center justify-content-center"
                            role="tab"
                            data-bs-toggle="tab"
                            data-bs-target="#navs-orders-id"
                            aria-controls="navs-orders-id"
                            aria-selected="true">
                            <div class="avatar">
                              <div class="avatar-initial bg-label-secondary rounded">
                                <i class="mdi mdi-cellphone"></i>
                              </div>
                            </div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            href="javascript:void(0);"
                            class="nav-link btn d-flex flex-column align-items-center justify-content-center"
                            role="tab"
                            data-bs-toggle="tab"
                            data-bs-target="#navs-sales-id"
                            aria-controls="navs-sales-id"
                            aria-selected="false">
                            <div class="avatar">
                              <div class="avatar-initial bg-label-secondary rounded">
                                <i class="mdi mdi-television"></i>
                              </div>
                            </div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            href="javascript:void(0);"
                            class="nav-link btn d-flex flex-column align-items-center justify-content-center"
                            role="tab"
                            data-bs-toggle="tab"
                            data-bs-target="#navs-profit-id"
                            aria-controls="navs-profit-id"
                            aria-selected="false">
                            <div class="avatar">
                              <div class="avatar-initial bg-label-secondary rounded">
                                <i class="mdi mdi-gamepad-circle-outline"></i>
                              </div>
                            </div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a
                            href="javascript:void(0);"
                            class="nav-link btn d-flex align-items-center justify-content-center disabled"
                            role="tab"
                            data-bs-toggle="tab"
                            aria-selected="false">
                            <div class="avatar">
                              <div class="avatar-initial bg-label-secondary rounded">
                                <i class="mdi mdi-plus"></i>
                              </div>
                            </div>
                          </a>
                        </li>
                      </ul>
                      <div class="tab-content p-0 ms-0 ms-sm-2">
                        <div class="tab-pane fade show active" id="navs-orders-id" role="tabpanel">
                          <div class="table-responsive text-nowrap">
                            <table class="table table-borderless">
                              <thead class="border-bottom">
                                <tr>
                                  <th class="ps-0 fw-medium text-heading">Image</th>
                                  <th class="fw-medium ps-0 text-heading">Product Name</th>
                                  <th class="pe-0 fw-medium text-end text-heading">Status</th>
                                  <th class="pe-0 fw-medium text-end text-heading">Revenue</th>
                                  <th class="pe-0 text-end fw-medium text-heading">Conversion</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="ps-0">
                                    <img
                                      src="assets/img/products/samsung-s22.png"
                                      alt="samsung"
                                      class="rounded"
                                      height="34" />
                                  </td>
                                  <td class="h6 ps-0">Oneplus 9 Pro</td>
                                  <td class="text-heading text-end pe-0">
                                    <span class="badge rounded-pill bg-label-primary">Out of Stock</span>
                                  </td>
                                  <td class="h6 mb-0 text-end pe-0">$12.5k</td>
                                  <td class="pe-0 text-end fw-medium h6 text-success">+24%</td>
                                </tr>
                                <tr>
                                  <td class="ps-0">
                                    <img
                                      src="assets/img/products/apple-iPhone-13-pro.png"
                                      alt="iphone"
                                      class="rounded"
                                      height="34" />
                                  </td>
                                  <td class="h6 ps-0">Apple iPhone 13 Pro</td>
                                  <td class="text-heading text-end pe-0">
                                    <span class="badge rounded-pill bg-label-success">In Stock</span>
                                  </td>
                                  <td class="h6 mb-0 text-end pe-0">$45k</td>
                                  <td class="pe-0 text-end fw-medium h6 text-danger">-18%</td>
                                </tr>
                                <tr>
                                  <td class="ps-0">
                                    <img
                                      src="assets/img/products/oneplus-9-pro.png"
                                      alt="us-flag"
                                      class="rounded"
                                      height="34" />
                                  </td>
                                  <td class="h6 ps-0">Oneplus 9 Pro</td>
                                  <td class="text-heading text-end pe-0">
                                    <span class="badge rounded-pill bg-label-warning">Coming Soon</span>
                                  </td>
                                  <td class="h6 mb-0 text-end pe-0 text-heading">$98.2k</td>
                                  <td class="pe-0 text-end fw-medium h6 text-success">+55%</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="navs-sales-id" role="tabpanel">
                          <div class="table-responsive text-nowrap">
                            <table class="table table-borderless">
                              <thead class="border-bottom">
                                <tr>
                                  <th class="ps-0 fw-medium text-heading">Image</th>
                                  <th class="fw-medium ps-0 text-heading">Product Name</th>
                                  <th class="pe-0 fw-medium text-end text-heading">Status</th>
                                  <th class="pe-0 fw-medium text-end text-heading">Revenue</th>
                                  <th class="pe-0 text-end fw-medium text-heading">Conversion</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="ps-0">
                                    <img
                                      src="../../assets//img/products/apple-mac-mini.png"
                                      alt="mac-mini"
                                      class="rounded"
                                      height="34" />
                                  </td>
                                  <td class="h6 ps-0">Apple Mac Mini</td>
                                  <td class="text-heading text-end pe-0">
                                    <span class="badge rounded-pill bg-label-success">In Stock</span>
                                  </td>
                                  <td class="h6 mb-0 text-end pe-0">$94.6k</td>
                                  <td class="pe-0 text-end fw-medium h6 text-success">+16%</td>
                                </tr>
                                <tr>
                                  <td class="ps-0">
                                    <img
                                      src="../../assets//img/products/hp-envy-x360.png"
                                      alt="hp-envy"
                                      class="rounded"
                                      height="34" />
                                  </td>
                                  <td class="h6 ps-0">Newest HP Envy x360</td>
                                  <td class="text-heading text-end pe-0">
                                    <span class="badge rounded-pill bg-label-warning">Coming Soon</span>
                                  </td>
                                  <td class="h6 mb-0 text-end pe-0">$76.5k</td>
                                  <td class="pe-0 text-end fw-medium h6 text-success">+27%</td>
                                </tr>
                                <tr>
                                  <td class="ps-0">
                                    <img
                                      src="../../assets//img/products/dell-inspiron-3000.png"
                                      alt="dell"
                                      class="rounded"
                                      height="34" />
                                  </td>
                                  <td class="h6 ps-0">Dell Inspiron 3000</td>
                                  <td class="text-heading text-end pe-0">
                                    <span class="badge rounded-pill bg-label-primary">Out of Stock</span>
                                  </td>
                                  <td class="h6 mb-0 text-end pe-0">$69.3k</td>
                                  <td class="pe-0 text-end fw-medium h6 text-danger">-9%</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="navs-profit-id" role="tabpanel">
                          <div class="table-responsive text-nowrap">
                            <table class="table table-borderless">
                              <thead class="border-bottom">
                                <tr>
                                  <th class="ps-0 fw-medium text-heading">Image</th>
                                  <th class="fw-medium ps-0 text-heading">Product Name</th>
                                  <th class="pe-0 fw-medium text-end text-heading">Status</th>
                                  <th class="pe-0 fw-medium text-end text-heading">Revenue</th>
                                  <th class="pe-0 text-end fw-medium text-heading">Conversion</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="ps-0">
                                    <img
                                      src="assets/img/products/sony-play-station-5.png"
                                      alt="sony-play-station"
                                      class="rounded"
                                      height="34" />
                                  </td>
                                  <td class="h6 ps-0">Sony Play Station 5</td>
                                  <td class="text-heading text-end pe-0">
                                    <span class="badge rounded-pill bg-label-warning">Coming Soon</span>
                                  </td>
                                  <td class="h6 mb-0 text-end pe-0">$18.6k</td>
                                  <td class="pe-0 text-end fw-medium h6 text-success">+34%</td>
                                </tr>
                                <tr>
                                  <td class="ps-0">
                                    <img
                                      src="assets/img/products/xbox-series-x.png"
                                      alt="xbox"
                                      class="rounded"
                                      height="34" />
                                  </td>
                                  <td class="h6 ps-0">XBOX Series X</td>
                                  <td class="text-heading text-end pe-0">
                                    <span class="badge rounded-pill bg-label-primary">Out of Stock</span>
                                  </td>
                                  <td class="h6 mb-0 text-end pe-0">$29.7k</td>
                                  <td class="pe-0 text-end fw-medium h6 text-danger">-21%</td>
                                </tr>
                                <tr>
                                  <td class="ps-0">
                                    <img
                                      src="assets/  img/products/nintendo-switch.png"
                                      alt="nintendo-switch"
                                      class="rounded"
                                      height="34" />
                                  </td>
                                  <td class="h6 ps-0">Nintendo Switch</td>
                                  <td class="text-heading text-end pe-0">
                                    <span class="badge rounded-pill bg-label-success">In Stock</span>
                                  </td>
                                  <td class="h6 mb-0 text-end pe-0">$10.4k</td>
                                  <td class="pe-0 text-end fw-medium h6 text-success">+38%</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Total Visits -->
              </div>
            </div>
            <!-- / Content -->
            <?php require_once 'includes/footer.php' ?>
            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>
      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->
  <?php require_once 'includes/common-js.php' ?>
<script src="assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
<script src="assets/js/dashboards-crm.js"></script>