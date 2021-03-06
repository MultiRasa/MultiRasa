<!--<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cake & Bakery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/profil/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/profil/css/open-iconic-bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/profil/css/animate.css')?>">
    
    <link rel="stylesheet" href="<?php echo base_url('assets/profil/css/owl.carousel.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/profil/css/owl.theme.default.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/profil/css/magnific-popup.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/profil/css/bootstrap-datepicker.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/profil/css/jquery.timepicker.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/profil/css/icomoon.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/profil/css/style.css')?>">
    <style type="text/css"></
      <style>
    .main {
    background: #aaa url(../assets/profil/images/bg.jpg) no-repeat;
    width: 800px;
    height: 600px;
    margin: 50px auto;
}
.panel {
    background-color: #444;
    height: 34px;
    padding: 10px;
}
.panel a#login_pop, .panel a#join_pop {
    border: 2px solid #aaa;
    color: #fff;
    display: block;
    float: right;
    margin-right: 10px;
    padding: 5px 10px;
    text-decoration: none;
    text-shadow: 1px 1px #000;

    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    -ms-border-radius: 10px;
    -o-border-radius: 10px;
    border-radius: 10px;
}
a#login_pop:hover, a#join_pop:hover {
    border-color: #eee;
}
.overlay {
    background-color: rgba(0, 0, 0, 0.6);
    bottom: 0;
    cursor: default;
    left: 0;
    opacity: 0;
    position: fixed;
    right: 0;
    top: 0;
    visibility: hidden;
    z-index: 1;

    -webkit-transition: opacity .5s;
    -moz-transition: opacity .5s;
    -ms-transition: opacity .5s;
    -o-transition: opacity .5s;
    transition: opacity .5s;
}
.overlay:target {
    visibility: visible;
    opacity: 1;
}
.popup {
    background-color: #fff;
    border: 3px solid #fff;
    display: inline-block;
    left: 50%;
    opacity: 0;
    padding: 15px;
    position: fixed;
    text-align: justify;
    top: 40%;
    visibility: hidden;
    z-index: 10;

    -webkit-transform: translate(-50%, -50%);
    -moz-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    -o-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);

    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    -ms-border-radius: 10px;
    -o-border-radius: 10px;
    border-radius: 10px;

    -webkit-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
    -moz-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
    -ms-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
    -o-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
    box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;

    -webkit-transition: opacity .5s, top .5s;
    -moz-transition: opacity .5s, top .5s;
    -ms-transition: opacity .5s, top .5s;
    -o-transition: opacity .5s, top .5s;
    transition: opacity .5s, top .5s;
}
.overlay:target+.popup {
    top: 50%;
    opacity: 1;
    visibility: visible;
}
.close {
    background-color: rgba(0, 0, 0, 0.8);
    height: 30px;
    line-height: 30px;
    position: absolute;
    right: 0;
    text-align: center;
    text-decoration: none;
    top: -15px;
    width: 30px;

    -webkit-border-radius: 15px;
    -moz-border-radius: 15px;
    -ms-border-radius: 15px;
    -o-border-radius: 15px;
    border-radius: 15px;
}
.close:before {
    color: rgba(255, 255, 255, 0.9);
    content: "X";
    font-size: 24px;
    text-shadow: 0 -1px rgba(0, 0, 0, 0.9);
}
.close:hover {
    background-color: rgba(64, 128, 128, 0.8);
}
.popup p, .popup div {
    margin-bottom: 10px;
}
.popup label {
    display: inline-block;
    text-align: left;
    width: 120px;
}
.popup input[type="text"], .popup input[type="password"] {
    border: 1px solid;
    border-color: #999 #ccc #ccc;
    margin: 0;
    padding: 2px;

    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    -ms-border-radius: 2px;
    -o-border-radius: 2px;
    border-radius: 2px;
}
.popup input[type="text"]:hover, .popup input[type="password"]:hover {
    border-color: #555 #888 #888;
}
</style>
   
  </head>
  <body data-spy="scroll" data-target="#site-navbar" data-offset="200">
    
    <nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php">Cake & Bakery</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="site-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="#section-home" class="nav-link">BERANDA</a></li>
            <li class="nav-item"><a href="#section-about" class="nav-link">KETENTUAN</a></li>
            <li class="nav-item"><a href="#section-offer" class="nav-link">DETAIL</a></li>
            <li class="nav-item"><a href="#section-menu" class="nav-link">PRODUK</a></li>
            <li class="nav-item"><a href="#section-gallery" class="nav-link">GALERI</a></li>
            <li class="nav-item"><a href="#section-contact" class="nav-link">KONTAK</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section class="site-cover" style="background-image: url(assets/profil/images/1.jpg);" id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center site-vh-100">
          <div class="col-md-12">
            <h2 class="site-heading site-animate mb-3 fadeInUp site-animated">SELAMAT DATANG DI Cake &amp; Bakery</h2>
        <h2 class="h5 site-subheading mb-5 site-animate fadeInUp site-animated">Kami menyediakan berbagai pilihan roti &amp; dengan kualitas terbaik.</h2>
            <b><a href="#login_form" id="login_pop" class="btn btn-outline-white btn-lg site-animate fadeInUp site-animated">MASUK SEBAGAI PELANGGAN</a></b> 
            <b><a href="#login_form2" id="login_pop" class="btn btn-outline-white btn-lg site-animate fadeInUp site-animated">MASUK SEBAGAI KARYAWAN</a></b>
          </div>
        </div>
          </div>
    </section>
        <!-- popup form #1 -->
        <a href="#x" class="overlay" id="login_form"></a>
        <div class="popup">
            <center><h3>SELAMAT DATANG</h3></center>
            <p>Silahkan masukkan username dan password Anda</p>
            <div>
              <form role="form" action="Login" method="post">
                <label for="login">Username</label>
                <input type="text" value="" name="username" />
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" value="" name="password" />
            </div>
            <center><input type="submit" value="Log In" name="login" /> &nbsp;&nbsp;&nbsp;atau&nbsp;&nbsp;&nbsp;<b><a href="#join_form" id="join_pop">DAFTAR</a></b></center>
            <a class="close" href="#close"></a></form>
          </div>

        <!-- popup form #2 -->
        <a href="#x" class="overlay" id="join_form"></a>
        <div class="popup">
            <center><h2>DAFTAR</h2></center>
            <p>Silahkan isi form dibawah ini</p>
            <div>
              <form role="form" action="Daftar" method="post">
                <label for="">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" value="" />
            </div>
            
            <div>
                <label for="">Username</label>
                <input type="text" name="username" value="" />
            </div>
            <div>
                <label for="">Password</label>
                <input type="password" name="password" value="" />

              <div>
                <label for="">No. HP</label>
                <input type="text" name="hp" value="" />
            </div>
            </div>
            <center><input type="submit" value="DAFTAR" name="register" /></center>
</form>
            <a class="close" href="#close"></a>
        </div>
        <!-- popup form #3 -->
        <a href="#x" class="overlay" id="login_form2"></a>
        <div class="popup">
            <center><h3>SELAMAT DATANG</h3></center>
            <p>Silahkan masukkan username dan password Anda</p>
            <div>
              <form role="form" action="LoginAdmin" method="post">
                <label for="login">Username</label>
                <input type="text" value="" name="username" />
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" value="" name="password" />
            </div>
            <center><input type="submit" value="Log In" name="login" /> 
              <b
            <a class="close" href="#close"></a></form>
          </div>
</b></center></form>
    <!-- END section -->
    <section class="site-section" id="section-about">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center mb-5 site-animate fadeInUp site-animated">
            <h2 class="display-6">KETENTUAN PEMESANAN</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">Produk kami sajikan dengan kualitas terbaik dan harga terjangkau untuk melengkapi hari bahagia Anda.</p><hr>
          
            </div>
          </div>
              </div>
            </div>
          </div>
            <br>
            <table>
              <tr>
                <td style="text-align: center;">
                  <img src="assets/profil/images/tlf.png" style="width: 150px;">
                </td>
                <td>
                   <p>Pemesanan bisa dilakukan secara online dengan mencantumkan no. telepon yang bisa dihubungi. Kami akan melakukan konfirmasi pemesanan melalui telepon. Order tidak akan kami proses jika kami tidak dapat menghubngi no. telepon yang tertera.</p>
                </td>
              </tr>
            <tr>
              <td style="text-align: center;">
                <img src="assets/profil/images/dolar.png" style="width: 80px;">
              </td>
              <td>
                <p class="mb-4">Pembayaran uang muka atau DP harus dilakukan diawal pemesanan minimal 50% dengan cara transfer ataupun langsung. Pembayaran juga dapat dilakukan dengan cara melunasinya diawal pemesanan. </p>
              </td>
            </tr>
             <tr>
                <td style="text-align: center;">
                  <img src="assets/profil/images/mobil.png" style="width: 90px;">
                </td>
                <td>
                   <p>Jika pemesanan diatas Rp 500.000 kami akan mengantar pesanan ke tempat tujuan tanpa ada biaya tambahan.</p>
                </td>
              </tr>
            <tr>
              <td style="text-align: center;">
                <img src="assets/profil/images/batal.png" style="width: 50px;">
              </td>
              <td>
                <p class="mb-4">Pembatalan pesanan harus dilakukan dengan konfirmasi telepon dan maximal batas waktu adalah 2 jam sebelum jam jatuh tempo.</p>
              </td>
            </tr>
            </table>
          <div class="col-md-1"></div>
          
        </div>
      </div>
    </section>
    <!-- END section -->
    

    <section class="site-section bg-light" id="section-offer">
      <div class="container">
        
        <div class="row">
          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">DETAIL PRODUK</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">Produk kami sajikan dengan kualitas terbaik dan harga terjangkau untuk melengkapi hari bahagia Anda.</p><hr>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-carousel site-owl">

              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="assets/profil/images/sobek2.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="mt-0 h4">ROTI WIJEN</h5>
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">DETAIL</a></p>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="assets/profil/images/sosis.png" alt="Free Template by colorlib.com" class="img-fluid" style="width: 700px">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="mt-0 h4">ROTI SOSIS KEJU </h5>
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">DETAIL</a></p>
                  </div>
                </div>
              </div>
              
              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="assets/profil/images/coklat.png" alt="Free Template by colorlib.com" class="img-fluid">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="mt-0 h4">ROTI COKLAT</h5>
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">DETAIL</a></p>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="assets/profil/images/risolesa.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="mt-0 h4">KUE RISOL</h5>
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">DETAIL</a></p>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="assets/profil/images/kue.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="mt-0 h4">KUE LEMPER</h5>
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">DETAIL</a></p>
                  </div>
                </div>
              </div>
              
              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="assets/profil/images/pastel.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="mt-0 h4">KUE PASTEL</h5>
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">DETAIL</a></p>
                  </div>
                </div>
              </div>

            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section" id="section-menu">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">PILIHAN PRODUK</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p><hr>
              </div>
            </div>
          </div>

          <div class="col-md-12 text-center">

            <ul class="nav site-tab-nav nav-pills mb-5" id="pills-tab" role="tablist">
              <li class="nav-item site-animate">
                <a class="nav-link active" id="pills-breakfast-tab" data-toggle="pill" href="#pills-breakfast" role="tab" aria-controls="pills-breakfast" aria-selected="true">KUE BASAH</a>
              </li>
              <li class="nav-item site-animate">
                <a class="nav-link" id="pills-lunch-tab" data-toggle="pill" href="#pills-lunch" role="tab" aria-controls="pills-lunch" aria-selected="false">ROTI MANIS</a>
              </li>
              <li class="nav-item site-animate">
                <a class="nav-link" id="pills-dinner-tab" data-toggle="pill" href="#pills-dinner" role="tab" aria-controls="pills-dinner" aria-selected="false">TART</a>
              </li>
            </ul>

            <div class="tab-content text-left">
              <div class="tab-pane fade show active" id="pills-breakfast" role="tabpanel" aria-labelledby="pills-breakfast-tab">
                <div class="row">
                  <div class="col-md-6 site-animate">
                    <div class="media menu-item">
                      <img class="mr-3" src="assets/profil/images/apem.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">KUE APEM</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">Rp 2500</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="assets/profil/images/kue.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">KUE LEMPER</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">Rp 3500</h6>
                      </div>
                    </div>

                    

                  </div>
                  <div class="col-md-6 site-animate">
                    <div class="media menu-item">
                      <img class="mr-3" src="assets/profil/images/pastel.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">KUE PASTEL</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">Rp 3500</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="assets/profil/images/risolesa.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">KUE RISOL</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">Rp 3500</h6>
                      </div>
                    </div>

                   
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-lunch" role="tabpanel" aria-labelledby="pills-lunch-tab">
                <div class="row">
                  <div class="col-md-6 site-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="assets/profil/images/kejuker.png" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">MUFFIN KEJU</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">Rp 4500</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="assets/profil/images/a.png" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">ROTI WIJEN</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">Rp 3500</h6>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6 site-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="assets/profil/images/sosis.png" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">ROTI SOSIS KEJU</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">Rp 4000 </h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="assets/profil/images/tawar.png" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">ROTI TAWAR ZEBRA</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">Rp 11500</h6>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-dinner" role="tabpanel" aria-labelledby="pills-dinner-tab">
                <div class="row">
                  <div class="col-md-6 site-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="assets/profil/images/tart1.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Italian Sauce Mushroom</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$24.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="assets/profil/images/tart2.jpeg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Salted Fried Chicken</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$35.50</h6>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6 site-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="assets/profil/images/tart3.png" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$18.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="assets/profil/images/tart4.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Italian Sauce Mushroom</h5>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <h6 class="text-primary menu-price">$35.50</h6>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

  
    <!-- END section -->

    <section class="site-section" id="section-gallery">
      <div class="container">
        <div class="row site-custom-gutters">
<div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">GALLERY</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p><hr>
              </div>
            </div>
          </div>

          <div class="col-md-4 site-animate">
            <a href="assets/profil/images/6.jpg" class="site-thumbnail image-popup">
              <img src="assets/profil/images/6.jpg" alt="Free Template by colorlib.com" class="img-fluid" style="width: 400px">
            </a>
          </div>
          <div class="col-md-4 site-animate">
            <a href="assets/profil/images/111.jpg" class="site-thumbnail image-popup">
              <img src="assets/profil/images/111.jpg" alt="Free Template by colorlib.com" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 site-animate">
            <a href="assets/profil/images/22.jpg" class="site-thumbnail image-popup">
              <img src="assets/profil/images/22.jpg" alt="Free Template by colorlib.com" class="img-fluid" style="width: 350px">
            </a>
          </div>

          <div class="col-md-4 site-animate">
            <a href="assets/profil/images/33.jpg" class="site-thumbnail image-popup">
              <img src="assets/profil/images/33.jpg" alt="Free Template by colorlib.com" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 site-animate">
            <a href="assets/profil/images/43.jpg" class="site-thumbnail image-popup">
              <img src="assets/profil/images/43.jpg" alt="Free Template by colorlib.com" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 site-animate">
            <a href="assets/profil/images/55.jpg" class="site-thumbnail image-popup">
              <img src="assets/profil/images/55.jpg" alt="Free Template by colorlib.com" class="img-fluid">
            </a>
          </div>

        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section bg-light" id="section-contact">
      <div class="container">
        <div class="row">
<div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">KONTAK</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p><hr>
              </div>
            </div>
          </div>
          <div class="col-md-7 mb-5 site-animate">
            <form action="" method="post">
              <div class="form-group">
                <label for="name" class="sr-only">Nama</label>
                <input type="text" class="form-control" id="name" placeholder="Nama">
              </div>
              <div class="form-group">
                <label for="message" class="sr-only">Komentar</label>
                <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Tuliskan Komentar Anda"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg" value="KIRIM PESAN">
              </div>
            </form>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-4 site-animate">
            <p><img src="assets/profil/images/1.jpg" alt="" class="img-fluid"></p>
            <p class="text-black">
              Alamat: <br> Jl. Sumatra No. 41 Sumbersari Jember <br> <br>
              Telepon: <br> 0812 3456 7890 <br> <br>
              Email: <br> <a href="mailto:info@yoursite.com">info@yoursite.com</a>
            </p>

          </div>
          
        </div>
      </div>
    </section>
    <div id="map"></div>
    <!-- END section -->
    

    <footer class="site-footer site-bg-dark site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-4 site-animate">
                <h2 class="site-heading-2">Cake & Bakery</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet. Sed labore ipsum vel dolore, quis, culpa et magni autem sequi facere eos tenetur, ex?</p>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-3 site-animate">
                <div class="site-footer-widget mb-4">
                  <h2 class="site-heading-2">The Restaurant</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">About Us</a></li>
                    <li><a href="#" class="py-2 d-block">Chefs</a></li>
                    <li><a href="#" class="py-2 d-block">Events</a></li>
                    <li><a href="#" class="py-2 d-block">Contact</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-2 site-animate">
                 <div class="site-footer-widget mb-4">
                  <h2 class="site-heading-2">Useful links</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">Foods</a></li>
                    <li><a href="#" class="py-2 d-block">Drinks</a></li>
                    <li><a href="#" class="py-2 d-block">Breakfast</a></li>
                    <li><a href="#" class="py-2 d-block">Brunch</a></li>
                    <li><a href="#" class="py-2 d-block">Dinner</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-2 site-animate">
                 <div class="site-footer-widget mb-4">
                  <h2 class="site-heading-2">Useful links</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">Foods</a></li>
                    <li><a href="#" class="py-2 d-block">Drinks</a></li>
                    <li><a href="#" class="py-2 d-block">Breakfast</a></li>
                    <li><a href="#" class="py-2 d-block">Brunch</a></li>
                    <li><a href="#" class="py-2 d-block">Dinner</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
         
        </div>
        <div class="row site-animate">
           <div class="col-md-12 text-center">
            <div class="site-footer-widget mb-4">
              <ul class="site-footer-social list-unstyled ">
                <li class="site-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="site-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="site-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-12 text-center">
            <p>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> &amp; distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>

    <!-- END Modal -->

    <!-- loader -->
    <!--<div id="site-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>-->


    <script src="<?php echo base_url('assets/profil/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/profil/js//popper.min.js')?>"></script>
    <script src="<?php echo base_url('assets/profil/js//bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/profil/js//jquery.easing.1.3.js')?>"></script>
    <script src="<?php echo base_url('assets/profil/js//jquery.waypoints.min.js')?>"></script>
    <script src="<?php echo base_url('assets/profil/js//owl.carousel.min.js')?>"></script>
    <script src="<?php echo base_url('assets/profil/js//jquery.magnific-popup.min.js')?>"></script>

    <script src="<?php echo base_url('assets/profil/js//bootstrap-datepicker.js')?>"></script>
    <script src="<?php echo base_url('assets/profil/js//jquery.timepicker.min.js')?>"></script>
    
    <script src="<?php echo base_url('assets/profil/js//jquery.animateNumber.min.js')?>"></script>
    

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="<?php echo base_url('assets/profil/js//google-map.js')?>"></script>

    <script src="<?php echo base_url('assets/profil/js//main.js')?>"></script>


    
  </body>
</html>