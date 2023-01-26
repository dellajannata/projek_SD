<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3>Tentang Kami</h3>
                    </div>
                    <p style="text-align: justify">Salah satu satuan pendidikan dengan jenjang SD di Kedungsekar, Kec. Benjeng, Kab. Gresik, Jawa Timur. Yang berada di bawah naungan Kementerian Pendidikan dan Kebudayaan.</p>   
                </div><!-- end clearfix -->
            </div><!-- end col -->

            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3>Information Link</h3>
                    </div>
                    <ul class="footer-links">
                        <li><a href="{{ url('beranda') }}">BERANDA</a></li>
                        <li><a href="{{ url('tentang') }}">TENTANG KAMI</a></li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Kelas
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <a class="dropdown-item" href="{{ url('/kelas') }}">Kelas 1</a>
                                <a class="dropdown-item" href="{{ url('/kelas2') }}">Kelas 2</a>
                                <a class="dropdown-item" href="{{ url('/kelas3') }}">Kelas 3</a>
                                <a class="dropdown-item" href="{{ url('/kelas4') }}">Kelas 4</a>
                                <a class="dropdown-item" href="{{ url('/kelas5') }}">Kelas 5</a>
                                <a class="dropdown-item" href="{{ url('/kelas6') }}">Kelas 6</a>
                            </div>
                        </li>
                        <li><a href="{{ url('sarana') }}">SARANA PRASARANA</a></li>
                        <li><a href="{{ url('guru') }}">GURU</a></li>
                        <li><a href="{{ url('album') }}">ALBUM</a></li>
                        <li><a href="{{ url('kontak') }}">KONTAK</a></li>
                    </ul><!-- end links -->
                </div><!-- end clearfix -->
            </div><!-- end col -->
            
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3>Contact Details</h3>
                    </div>

                    <ul class="footer-links">
                        <li><a href="mailto:sdnegeri108gresik@gmail.com">sdnegeri108gresik@gmail.com</a></li>
                        <li><a href="{{ url('beranda') }}">sdn108gresik.sch.id</a></li>
                        <li>Jl. Desa, Kedungsekar, Kec. Benjeng, Kabupaten Gresik, Jawa Timur 61172</li>
                        <li>+62 877-8900-4672</li>
                    </ul><!-- end links -->
                </div><!-- end clearfix -->
            </div><!-- end col -->
            
        </div><!-- end row -->
    </div><!-- end container -->
</footer><!-- end footer -->

<div class="copyrights">
    <div class="container">
        <div class="footer-distributed">
            <div class="footer-center">                   
                <p class="footer-company-name">All Rights Reserved. &copy; 2022 <a href="{{ url('beranda') }}">UPT SD Negeri 108 Gresik</p>
            </div>
        </div>
    </div><!-- end container -->
</div><!-- end copyrights -->

<a href="{{ url('beranda') }}" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>