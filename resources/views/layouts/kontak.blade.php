@extends('layouts.main')
@section('layouts.content')

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
            rel="stylesheet">

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="assets/css/fontawesome.css">
        <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
        <link rel="stylesheet" href="assets/css/owl.css">

    </head>
    <div class="all-title-box">
    </div>

    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Kontak</h3>
                    <p>UPT SD Negeri 108 Gresik</p>
                </div>
            </div><!-- end title -->

            <div class="find-us">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="section-heading">
                        <h2>Alamat Kami</h2>
                      </div>
                    </div>
                    <div class="col-md-8">
          <!-- How to change your own map point
              1. Go to Google Maps
              2. Click on your location point
              3. Click "Share" and choose "Embed map" tab
              4. Copy only URL and paste it within the src="" field below
          -->
                      <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.961174971577!2d112.50096541432042!3d-7.245258673177085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7803c19b1f3e43%3A0xe8aec36d9a7a92d5!2sSDN%20KEDUNGSEKAR%2FUPT%20SD%20NEGERI%20108%20GRESIK!5e0!3m2!1sid!2sid!4v1673664368237!5m2!1sid!2sid" width="100%" height="330px" frameborder="0" style="border:0" allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="left-content">
                        <h4>About our office</h4>
                        <div class="contact-point">
                            <i class="fa fa-phone fa-3x contact-point-icon blue-text"></i>
                            <div class="contact-point-detail-container">
                                <b class="text-uppercase contact-point-title blue-text font-weight-700">Phone</b>
                                <p class="contact-point-detail">+(123) 456 7890</p>
                            </div>
                       </div>
                        <div class="contact-point">
                            <i class="fa fa-envelope-o fa-3x contact-point-icon blue-text"></i>
                            <div class="contact-point-detail-container">
                                <b class="text-uppercase contact-point-title blue-text font-weight-700">Email</b>
                                <p class="contact-point-detail">mail@company.com</p>
                            </div>
                        </div>
                        {{-- <ul class="social-icons">
                          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                          <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul> --}}
                      </div>
                    </div>
                  </div>
                </div>
              </div>

                    <script src="vendor/jquery/jquery.min.js"></script>
                    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                
                
                    <!-- Additional Scripts -->
                    <script src="assets/js/custom.js"></script>
                    <script src="assets/js/owl.js"></script>
                    <script src="assets/js/slick.js"></script>
                    <script src="assets/js/isotope.js"></script>
                    <script src="assets/js/accordions.js"></script>
                
                
                    <script language = "text/Javascript"> 
                      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
                      function clearField(t){                   //declaring the array outside of the
                      if(! cleared[t.id]){                      // function makes it static and global
                          cleared[t.id] = 1;  // you could use true and false, but that's more typing
                          t.value='';         // with more chance of typos
                          t.style.color='#fff';
                          }
                      }
                    </script>
                @endsection
