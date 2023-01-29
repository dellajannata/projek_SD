      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
          <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
              <img src="assets/images/logo.png" style="width: 50px; height:50px;">
              <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">SDN 108 Gresik</span>
                  {{--  <span style="text-align:left" class="text-secondary text-small">108 Gresik</span>  --}}
              </div>
              <div>
                  <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </div>
          </div>
          <div class="navbar-menu-wrapper d-flex align-items-stretch">
              <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                  <span class="mdi mdi-menu"></span>
              </button>
              <ul class="navbar-nav navbar-nav-right">
                  <li class="nav-item nav-profile dropdown">
                      <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown"
                          aria-expanded="false">
                          <div class="nav-profile-img">
                              <img src="assets/images/logo.png" alt="image">
                              <span class="availability-status online"></span>
                          </div>
                          <div class="nav-profile-text">
                              <p class="mb-1 text-black"> UPT SD Negeri 108 Gresik</p>
                          </div>
                      </a>
                      <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">

                          <a class="dropdown-item" href="{{ url('login') }}">
                              {{ __('Keluar') }}
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                  </li>
                  <li class="nav-item nav-settings d-none d-lg-block">
                      <a class="nav-link" href="#">
                          <i class="mdi mdi-format-line-spacing"></i>
                      </a>
                  </li>
              </ul>
              <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                  data-toggle="offcanvas">
                  <span class="mdi mdi-menu"></span>
              </button>
          </div>
      </nav>
      <!-- partial -->
