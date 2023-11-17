
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul
        class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
        id="accordionSidebar"
      >
        <!-- Sidebar - Brand -->
        <a
          class="sidebar-brand d-flex align-items-center justify-content-center"
          href="index.html"
        >
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
          </div>
          <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="#">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">Ticket</div>

        <!-- Nav Item - Ticket -->
        <li class="nav-item">
          <a class="nav-link" href="tiket">
            <i class="fas fa-fw fa-ticket-alt"></i>
            <span>Ticket</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />

        <!-- Sidebar Toggler (Sidebar) -->
        <!-- <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div> -->

        <!-- Sidebar Message -->
        <!-- <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div> -->

        <a
          class="dropdown-item"
          href="#"
          data-toggle="modal"
          data-target="#logoutModal"
        >
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i
          >Logout</a
        >
      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav
            class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"
          >
            <!-- Sidebar Toggle (Topbar) -->
            <button
              id="sidebarToggleTop"
              class="btn btn-link d-md-none rounded-circle mr-3"
            >
              <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            <form
              class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
            >
              <div class="input-group">
                <input
                  type="text"
                  class="form-control bg-light border-0 small"
                  placeholder="Search for..."
                  aria-label="Search"
                  aria-describedby="basic-addon2"
                />
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="searchDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div
                  class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                  aria-labelledby="searchDropdown"
                >
                  <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control bg-light border-0 small"
                        placeholder="Search for..."
                        aria-label="Search"
                        aria-describedby="basic-addon2"
                      />
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>

              <!-- Nav Item - Alerts -->
              <li class="nav-item dropdown no-arrow mx-1">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="alertsDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fas fa-bell fa-fw"></i>
                  <!-- Counter - Alerts -->
                  <span class="badge badge-danger badge-counter">3+</span>
                </a>
                <!-- Dropdown - Alerts -->
                <div
                  class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="alertsDropdown"
                >
                  <h6 class="dropdown-header">Alerts Center</h6>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                      <div class="icon-circle bg-primary">
                        <i class="fas fa-file-alt text-white"></i>
                      </div>
                    </div>
                    <div>
                      <div class="small text-gray-500">December 12, 2019</div>
                      <span class="font-weight-bold"
                        >A new monthly report is ready to download!</span
                      >
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                      <div class="icon-circle bg-success">
                        <i class="fas fa-donate text-white"></i>
                      </div>
                    </div>
                    <div>
                      <div class="small text-gray-500">December 7, 2019</div>
                      $290.29 has been deposited into your account!
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                      <div class="icon-circle bg-warning">
                        <i class="fas fa-exclamation-triangle text-white"></i>
                      </div>
                    </div>
                    <div>
                      <div class="small text-gray-500">December 2, 2019</div>
                      Spending Alert: We've noticed unusually high spending for
                      your account.
                    </div>
                  </a>
                  <a
                    class="dropdown-item text-center small text-gray-500"
                    href="#"
                    >Show All Alerts</a
                  >
                </div>
              </li>

              <!-- Nav Item - Messages -->
              <li class="nav-item dropdown no-arrow mx-1">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="messagesDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fas fa-envelope fa-fw"></i>
                  <!-- Counter - Messages -->
                  <span class="badge badge-danger badge-counter">7</span>
                </a>
                <!-- Dropdown - Messages -->
                <div
                  class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="messagesDropdown"
                >
                  <h6 class="dropdown-header">Message Center</h6>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                      <img
                        class="rounded-circle"
                        src="img/icon/profile.png"
                        alt="..."
                      />
                      <div class="status-indicator bg-success"></div>
                    </div>
                    <div class="font-weight-bold">
                      <div class="text-truncate">
                        Hi there! I am wondering if you can help me with a
                        problem I've been having.
                      </div>
                      <div class="small text-gray-500">Emily Fowler · 58m</div>
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                      <img
                        class="rounded-circle"
                        src="img/undraw_profile_2.svg"
                        alt="..."
                      />
                      <div class="status-indicator"></div>
                    </div>
                    <div>
                      <div class="text-truncate">
                        I have the photos that you ordered last month, how would
                        you like them sent to you?
                      </div>
                      <div class="small text-gray-500">Jae Chun · 1d</div>
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                      <img
                        class="rounded-circle"
                        src="img/undraw_profile_3.svg"
                        alt="..."
                      />
                      <div class="status-indicator bg-warning"></div>
                    </div>
                    <div>
                      <div class="text-truncate">
                        Last month's report looks great, I am very happy with
                        the progress so far, keep up the good work!
                      </div>
                      <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                      <img
                        class="rounded-circle"
                        src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                        alt="..."
                      />
                      <div class="status-indicator bg-success"></div>
                    </div>
                    <div>
                      <div class="text-truncate">
                        Am I a good boy? The reason I ask is because someone
                        told me that people say this to all dogs, even if they
                        aren't good...
                      </div>
                      <div class="small text-gray-500">
                        Chicken the Dog · 2w
                      </div>
                    </div>
                  </a>
                  <a
                    class="dropdown-item text-center small text-gray-500"
                    href="#"
                    >Read More Messages</a
                  >
                </div>
              </li>

              <div class="topbar-divider d-none d-sm-block"></div>

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="userDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"
                    >Admin</span
                  >
                  <img
                    class="img-profile rounded-circle"
                    src="img/undraw_profile.svg"
                  />
                </a>
                <!-- Dropdown - User Information -->
                <div
                  class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="userDropdown"
                >
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                  </a>

                  <div class="dropdown-divider"></div>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="modal"
                    data-target="#logoutModal"
                  >
                    <i
                      class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"
                    ></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
          </nav>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <div
              class="d-sm-flex align-items-center justify-content-between mb-4"
            >
              <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

              <!-- Button Tambah Ticket Start -->
              <button
                type="button"
                class="btn btn-primary"
                data-toggle="modal"
                data-target="#exampleModal"
              >
                Tambah Tiket
              </button>

              <!-- Modal -->
              <div
                class="modal fade"
                id="exampleModal"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
              >
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">
                        Tambah Tiket
                      </h5>

                      <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                      >
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>

                    <div class="modal-body">
                      <div class="container">
                        <!-- Item Chose File Start-->
                        <form>
                          <div class="form-group">
                            <input
                              type="file"
                              class="form-control-file"
                              id="exampleFormControlFile1"
                            />
                          </div>
                        </form>
                      </div>
                      <!-- Item Chose File End-->

                      <!-- Text Form start -->
                      <form>
                        <div class="form-group">
                          <label for="exampleFormControlInput1"
                            >Nama Ticket</label
                          >
                          <input
                            type="email"
                            class="form-control"
                            id="exampleFormControlInput1"
                          />
                        </div>

                        <div class="form-group">
                          <label for="exampleFormControlTextarea1"
                            >Deskripsi</label
                          >
                          <textarea
                            class="form-control"
                            id="exampleFormControlTextarea1"
                            rows="3"
                          ></textarea>
                        </div>
                      </form>

                      <div class="form-group">
                        <label for="exampleFormControlInput1">Harga</label>
                        <input
                          type="email"
                          class="form-control"
                          id="exampleFormControlInput1"
                        />
                      </div>
                    </div>
                    <!-- text Form End -->

                    <div class="modal-footer">
                      <button
                        type="button"
                        class="btn btn-secondary"
                        data-dismiss="modal"
                      >
                        Close
                      </button>
                      <button type="button" class="btn btn-primary">
                        Save changes
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Button Tambah Ticket End-->



            <!-- Content Row -->
            <div class="row">
              <!-- Card Content Start -->
              <!-- 1 -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-border-right-primary shadow h-100 py-2">
                  <div class="card-body">

<!-- Terdapat masalah ,, tadi icon nya tidak dapat di pindahkan ke pojok kanan atas..
Penyelesaian : tambahkan class item di sebelah tulisan kebun raya, tambahkan d-flex pada class tulisan kebun raya
dan tambahkan ml-auto pada class iconnya. -->
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-l font-weight-bold text-uppercase mb-1 d-flex"
                        >
                          Kebun Raya
                          <i class="fas fa-fw fa-info-circle ml-auto"></i>
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          Rp.50.000
                        </div>
                      </div>
                    </div>

                    <div class="d-flex row no-gutters justify-content-end">
                      <div class="col-auto ">
                        

<!-- menambahkan Modal Untuk Button Edit Ticket -->
        <!-- Button Edit Tiket (Pake Modal) Start -->
                        <button
                          type="button"
                          class="btn btn-warning"
                          data-toggle="modal"
                          data-target="#ModalEdit"
                        >
                          <i class="fas fa-fw fa-edit"></i>
                        </button>

                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="ModalEdit"
                          tabindex="-1"
                          aria-labelledby="EditModalLabel"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="ModalEditLabel">
                                  Edit Tiket
                                </h5>

                                <button
                                  type="button"
                                  class="close"
                                  data-dismiss="modal"
                                  aria-label="Close"
                                >
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>

                              <div class="modal-body">
                                <div class="container">
                                  <form>
                                    <div class="form-group">
                                      <input
                                        type="file"
                                        class="form-control-file"
                                        id="exampleFormControlFile1"
                                      />
                                    </div>
                                  </form>

                                  <form>
                                    <div class="form-group">
                                      <label for="FormControlInput"
                                        >Nama Ticket</label
                                      >
                                      <input
                                        type="text"
                                        class="form-control"
                                        id="FormControlInput"
                                      />
                                    </div>
                                  </form>

                                  <div class="form-group">
                                    <label for="exampleFormControlTextarea1"
                                      >Deskripsi</label
                                    >
                                    <textarea
                                      class="form-control"
                                      id="exampleFormControlTextarea1"
                                      rows="3"
                                    ></textarea>
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleFormControlInput1"
                                      >Harga</label
                                    >
                                    <input
                                      type="email"
                                      class="form-control"
                                      id="exampleFormControlInput1"
                                    />
                                  </div>
                                </div>

                                <div class="modal-footer">
                                  <button
                                    type="button"
                                    class="btn btn-secondary"
                                    data-dismiss="modal"
                                  >
                                    Close
                                  </button>
                                  <button type="button" class="btn btn-primary">
                                    Save changes
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Button Edit Tiket (Pake Modal) End -->

    <!-- Button Tong Sampah -->
                        <button type="button" class="btn btn-danger">
                          <i class="fas fa-fw fa-trash"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- 2 -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-border-right-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-l font-weight-bold text-uppercase mb-1 d-flex"
                        >
                          Kebun Raya
                          <i class="fas fa-fw fa-info-circle ml-auto"></i>
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          Rp.50.000
                        </div>
                      </div>
                    </div>

                    <div class="d-flex row no-gutters justify-content-end">
                      <div class="col-auto text-center">
                        <button type="button" class="btn btn-warning">
                          <i class="fas fa-fw fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-danger">
                          <i class="fas fa-fw fa-trash"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- 3 -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-border-right-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-l font-weight-bold text-uppercase mb-1 d-flex"
                        >
                          Kebun Raya
                          <i class="fas fa-fw fa-info-circle ml-auto"></i>
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          Rp.50.000
                        </div>
                      </div>
                    </div>

                    <div class="d-flex row no-gutters justify-content-end">
                      <div class="col-auto text-center">
                        <button type="button" class="btn btn-warning">
                          <i class="fas fa-fw fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-danger">
                          <i class="fas fa-fw fa-trash"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- 4 -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-border-right-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-l font-weight-bold text-uppercase mb-1 d-flex"
                        >
                          Kebun Raya
                          <i class="fas fa-fw fa-info-circle ml-auto"></i>
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          Rp.50.000
                        </div>
                      </div>
                    </div>

                    <div class="d-flex row no-gutters justify-content-end">
                      <div class="col-auto text-center">
                        <button type="button" class="btn btn-warning">
                          <i class="fas fa-fw fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-danger">
                          <i class="fas fa-fw fa-trash"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- 5 -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-border-right-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-l font-weight-bold text-uppercase mb-1 d-flex"
                        >
                          Kebun Raya
                          <i class="fas fa-fw fa-info-circle ml-auto"></i>
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          Rp.50.000
                        </div>
                      </div>
                    </div>

                    <div class="d-flex row no-gutters justify-content-end">
                      <div class="col-auto text-center">
                        <button type="button" class="btn btn-warning">
                          <i class="fas fa-fw fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-danger">
                          <i class="fas fa-fw fa-trash"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- 6 -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-border-right-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-l font-weight-bold text-uppercase mb-1 d-flex"
                        >
                          Kebun Raya
                          <i class="fas fa-fw fa-info-circle ml-auto"></i>
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          Rp.50.000
                        </div>
                      </div>
                    </div>

                    <div class="d-flex row no-gutters justify-content-end">
                      <div class="col-auto text-center">
                        <button type="button" class="btn btn-warning">
                          <i class="fas fa-fw fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-danger">
                          <i class="fas fa-fw fa-trash"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- 7 -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-border-right-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-l font-weight-bold text-uppercase mb-1 d-flex"
                        >
                          Kebun Raya
                          <i class="fas fa-fw fa-info-circle ml-auto"></i>
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          Rp.50.000
                        </div>
                      </div>
                    </div>

                    <div class="d-flex row no-gutters justify-content-end">
                      <div class="col-auto text-center">
                        <button type="button" class="btn btn-warning">
                          <i class="fas fa-fw fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-danger">
                          <i class="fas fa-fw fa-trash"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- 8 -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-border-right-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-l font-weight-bold text-uppercase mb-1 d-flex"
                        >
                          Kebun Raya
                          <i class="fas fa-fw fa-info-circle ml-auto"></i>
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          Rp.50.000
                        </div>
                      </div>
                    </div>

                    <div class="d-flex row no-gutters justify-content-end">
                      <div class="col-auto text-center">
                        <button type="button" class="btn btn-warning">
                          <i class="fas fa-fw fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-danger">
                          <i class="fas fa-fw fa-trash"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- 9 -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-border-right-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-l font-weight-bold text-uppercase mb-1 d-flex"
                        >
                          Kebun Raya
                          <i class="fas fa-fw fa-info-circle ml-auto"></i>
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          Rp.50.000
                        </div>
                      </div>
                    </div>

                    <div class="d-flex row no-gutters justify-content-end">
                      <div class="col-auto text-center">
                        <button type="button" class="btn btn-warning">
                          <i class="fas fa-fw fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-danger">
                          <i class="fas fa-fw fa-trash"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- 10 -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-border-right-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-l font-weight-bold text-uppercase mb-1 d-flex"
                        >
                          Kebun Raya
                          <i class="fas fa-fw fa-info-circle ml-auto"></i>
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          Rp.50.000
                        </div>
                      </div>
                    </div>

                    <div class="d-flex row no-gutters justify-content-end">
                      <div class="col-auto text-center">
                        <button type="button" class="btn btn-warning">
                          <i class="fas fa-fw fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-danger">
                          <i class="fas fa-fw fa-trash"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- 11 -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-border-right-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-l font-weight-bold text-uppercase mb-1 d-flex"
                        >
                          Kebun Raya
                          <i class="fas fa-fw fa-info-circle ml-auto"></i>
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          Rp.50.000
                        </div>
                      </div>
                    </div>

                    <div class="d-flex row no-gutters justify-content-end">
                      <div class="col-auto text-center">
                        <button type="button" class="btn btn-warning">
                          <i class="fas fa-fw fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-danger">
                          <i class="fas fa-fw fa-trash"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- 12 -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-border-right-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-l font-weight-bold text-uppercase mb-1 d-flex"
                        >
                          Kebun Raya
                          <i class="fas fa-fw fa-info-circle ml-auto"></i>
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          Rp.50.000
                        </div>
                      </div>
                    </div>

                    <div class="d-flex row no-gutters justify-content-end">
                      <div class="col-auto text-center">
                        <button type="button" class="btn btn-warning">
                          <i class="fas fa-fw fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-danger">
                          <i class="fas fa-fw fa-trash"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
              <div class="container my-auto">
                <div class="copyright text-center my-auto">
                  <span>Copyright &copy; Your Website 2021</span>
                </div>
              </div>
            </footer>
            <!-- End of Footer -->
          </div>
          <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div
          class="modal fade"
          id="logoutModal"
          tabindex="-1"
          role="dialog"
          aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                  Log Out
                </h5>
                <button
                  class="close"
                  type="button"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                    Apakah kamu yakin ingin keluar?
              </div>
              <div class="modal-footer">
                <button
                  class="btn btn-secondary"
                  type="button"
                  data-dismiss="modal"
                >
                  Cancel
                </button>
                <a class="btn btn-primary" href="login">Logout</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="../../../public/vendor/jquery/jquery.min.js"></script>
        <script src="http://localhost/MeliTiket.com/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../../../public/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../../../public/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="../../../public/vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="../../../public/js/demo/chart-area-demo.js"></script>
        <script src="../../../public/js/demo/chart-pie-demo.js"></script>
      </div>
    </div>
  </body>
</html>
