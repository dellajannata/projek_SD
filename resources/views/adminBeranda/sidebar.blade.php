        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('adminBeranda') }}">
                        <span class="menu-title">Dashboard</span>
                        <i class="mdi mdi-home menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('crudbuletin') }}">
                        <span class="menu-title">E-Buletin</span>
                        <i class="mdi mdi-book-open-page-variant menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#album" aria-expanded="false"
                        aria-controls="album">
                        <span class="menu-title">Album</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-folder-image menu-icon"></i>
                    </a>
                    <div class="collapse" id="album">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{ url('crudalbumfoto') }}"> Foto </a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ url('crudalbumvideo') }}"> Video </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('crudguru') }}">
                        <span class="menu-title">Guru</span>
                        <i class="mdi mdi-account-multiple menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#informasi" aria-expanded="false"
                        aria-controls="informasi">
                        <span class="menu-title">Informasi</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-information-variant menu-icon"></i>
                    </a>
                    <div class="collapse" id="informasi">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{ url('informasisd') }}"> SDN 108 Gresik </a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ url('informasiLomba') }}"> Lomba </a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ url('InformasiLink') }}"> Link Terkait </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('projekP5') }}">
                        <span class="menu-title">Projek P5</span>
                        <i class="mdi mdi-home-modern menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#kelas" aria-expanded="false"
                        aria-controls="kelas">
                        <span class="menu-title">Jadwal Pelajaran</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-book-open-page-variant menu-icon"></i>
                    </a>
                    <div class="collapse" id="kelas">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="crudkelas1"> Kelas 1 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="crudkelas2"> Kelas 2 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="crudkelas3"> Kelas 3 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="crudkelas4"> Kelas 4 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="crudkelas5"> Kelas 5 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="crudkelas6"> Kelas 6 </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ekstra" aria-expanded="false"
                        aria-controls="ekstra">
                        <span class="menu-title">Jadwal Ekstrakurikuler</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-book-open-page-variant menu-icon"></i>
                    </a>
                    <div class="collapse" id="ekstra">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="crudekstra1"> Kelas 1 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="crudekstra2"> Kelas 2 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="crudekstra3"> Kelas 3 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="crudekstra4"> Kelas 4 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="crudekstra5"> Kelas 5 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="crudekstra6"> Kelas 6 </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('saranaPrasarana') }}">
                        <span class="menu-title">Sarana Prasarana</span>
                        <i class="mdi mdi-home-modern menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('tentangkami') }}">
                        <span class="menu-title">Tentang Kami</span>
                        <i class="mdi mdi-alert-circle-outline menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('visimisi') }}">
                        <span class="menu-title">Visi & Misi</span>
                        <i class="mdi mdi-comment-alert-outline menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('pembiasaan') }}">
                        <span class="menu-title">Kegiatan Pembiasaan</span>
                        <i class="mdi mdi-calendar-clock
                  \f1e6 menu-icon"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('crudwalikelas') }}">
                        <span class="menu-title">Wali Kelas</span>
                        <i class="mdi mdi-account menu-icon"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->