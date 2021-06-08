<?php
include("verifikasi.php");
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">

  </head>

<body>

   
  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>BIO -</em> CATION </a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="#section1">Beranda</a></li>
        <li><a href="#section2">Materi</a></li>
        <li><a href="#section4">Kumpulan Soal</a></li>
        <li><a href="#section5">Tentang</a></li>
        <li><a href="#section6">Kontak </a></li>
        <li> <button onclick="Logout()"> Logout </button>
        <script>
        function Logout() {
          window.history.back();
        }
        </script>
        </li>
          </ul>
    </nav>
  </header>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/course-video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
          <h2><em> SELAMAT </em> DATANG <br>
                      <em> D </em> I </h2>
              <h2><em>BIOLOGY</em> EDUCATION</h2>
                        </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->


  <section class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-12">
          <div class="features-post">
            <div class="features-content">
              <div class="content-show">
                <center> <h4><i class="fa fa-pencil"></i></h4> </center>
              </div>
              <div class="content-hide">
                <p>Bidang biologi adalah bidang yang luas yang memungkinkan dirimu bisa berkarya dimana saja.</p>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post second-features">
            <div class="features-content">
              <div class="content-show">
                <center> <h4><i class="fa fa-graduation-cap"></i></h4> </center>
              </div>
              <div class="content-hide">
                <p>BIOLOGI adalah BIOkan hidupmu dan LOGIkan impianmu.</p>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post third-features">
            <div class="features-content">
              <div class="content-show">
                <center> <h4><i class="fa fa-book"></i></h4> </center>
              </div>
              <div class="content-hide">
                <p>Anak muda paling berbakat ketika tujuannya selalu ia kejar walau beribu kegagalan menghampirinya.</p>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section why-us" data-section="section2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>MATERI BIOLOGI</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div id='tabs'>
            <ul>
              <li><a href='#tabs-1'>BAB I</a></li> <br>
              <li><a href='#tabs-2'>BAB II</a></li> <br>
              <li><a href='#tabs-3'>BAB III</a></li> <br>
              <li><a href='#tabs-4'>BAB IV</a></li> <br>
              <li><a href='#tabs-5'>BAB V</a></li> <br>
              <li><a href='#tabs-6'>BAB VI</a></li> <br>
              <li><a href='#tabs-7'>BAB VII</a></li> <br><br>
              <li><a href='#tabs-8'>BAB VIII</a></li> <br>
              <li><a href='#tabs-9'>BAB IX</a></li><br>
              <li><a href='#tabs-10'>BAB X</a></li>
            </ul>

            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/bab1.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>BAB I</h4>
                    <center><strong><p> RUANG LINGKUP BIOLOGI, KERJA ILMIAH DAN KESELAMATAN KERJA</p></strong></center>
                    <h4> Sub :</h4>
                    <a href="bab1.a.html"> A. Tingkat Organisasi Kehidupan </a> <br>
                    <a href="bab1.b.html"> B. Cabang - Cabang Biologi </a> <br>
                    <a href="bab1.c.html"> C. Manfaat Biologi Bagi Manusia </a> <br>
                    <a href="bab1.d.html"> D. Metode Ilmiah Sebagai Pendekatan Untuk Mempelajari Biologi </a> <br>
                    <a href="bab1.e.html"> E. Keselamatan Kerja Di Laboratorium </a> <br>
                  </div>
                </div>
              </article>

              <article id='tabs-2'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/bab2.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>BAB II</h4>
                    <center><strong><p> KEANEKARAGAMAN HAYATI </p></strong></center>
                    <h4> Sub :</h4>
                    <a href="bab2.a.html"> A. Tingkat Keanekaragaman Hayati </a> <br>
                    <a href="bab2.b.html"> B. Keanekaragaman Hayati Indonesia </a> <br>
                    <a href="bab2.c.html"> C. Klasifikasi Makhluk Hidup </a> <br>
                  </div>
                </div>
              </article>

              <article id='tabs-3'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/bab3.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>BAB III</h4>
                    <center><strong><p> VIRUS </p></strong></center>
                    <h4> Sub :</h4>
                    <a href="bab3.a.html"> A. Ciri - Ciri dan Struktur Virus </a> <br>
                    <a href="bab3.b.html"> B. Replikasi Virus </a> <br>
                    <a href="bab3.c.html"> C. Pengelompokan Virus </a> <br>
                    <a href="bab3.d.html"> D. Peran Virus Dalam Kehidupan </a> <br>
                  </div>
                </div>
              </article>

              <article id='tabs-4'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/bab4.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>BAB IV</h4>
                    <center><strong><p>ARCHAEBACTERIA  DAN  EUBACHTERIA</p></strong> </center>
                    <h4> Sub :</h4>
                    <a href="bab4.a.html"> A. Prokariot </a> <br>
                    <a href="bab4.b.html"> B. Archaebacteria </a> <br>
                    <a href="bab4.c.html"> C. Eubacteria </a> <br>
                    <a href="bab4.d.html"> D. Peranan Bakteri </a> <br>
                    <a href="bab4.e.html"> E. Persamaan dan Perbedaan Antara Arcahebacteria dan Eubacteria </a> <br>
                  </div>
                </div>
              </article>

              <article id='tabs-5'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/bab5.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>BAB V</h4>
                    <center><strong><p> PROTISTA </p></strong></center>
                    <h4> Sub :</h4>
                    <a href="bab5.a.html"> A. Ciri - Ciri Protista </a> <br>
                    <a href="bab5.b.html"> B. Klasifikasi Protista </a> <br>
                    <a href="bab5.c.html"> C. Peranan Protista Dalam Kehidupan </a> <br>
                  </div>
                </div>
              </article>

              <article id='tabs-6'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/bab6.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>BAB VI</h4>
                    <center><strong><p> FUNGI (JAMUR) </p></strong></center>
                    <h4> Sub :</h4>
                    <a href="bab6.a.html"> A. Ciri - Ciri Jamur </a> <br>
                    <a href="bab6.b.html"> B. Klasifikasi Jamur </a> <br>
                    <a href="bab6.c.html"> C. Peranan Jamur Dalam Kehidupan </a> <br>
                    <a href="bab6.d.html"> D. Lumut Kerak (LICHENES) </a> <br>
                    <a href="bab6.e.html"> E. Mikoriza </a> <br>
                  </div>
                </div>
              </article>

              <article id='tabs-7'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/bab7.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>BAB VII</h4>
                    <center><strong><p> DUNIA TUMBUHAN </p></strong></center>
                    <h4> Sub :</h4>
                    <a href="bab7.a.html"> A. Ciri Umum Tumbuhan </a> <br>
                    <a href="bab7.b.html"> B. Tumbuhan Lumut (BRYOPHYTA) </a> <br>
                    <a href="bab7.c.html"> C. Tumbuhan Paku (PTERYDOPHYTA) </a> <br>
                    <a href="bab7.d.html"> D. Tumbuhan Biji (SPERMATOPHYTA) </a> <br>
                    <a href="bab7.e.html"> E. Peranan Tumbuhan Bagi Kehidupan </a> <br>
                  </div>
                </div>
              </article>

              <article id='tabs-8'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/bab8.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>BAB VIII</h4>
                    <center><strong><p> DUNIA HEWAN </p></strong></center>
                    <h4> Sub :</h4>
                    <a href="bab8.a.html"> A. Ciri Umum Hewan </a> <br>
                    <a href="bab8.b.html"> B. Pengelompokan Hewan </a> <br>
                    <a href="bab8.c.html"> C. Porifera </a> <br>
                    <a href="bab8.d.html"> D. Coelenterata </a> <br>
                    <a href="bab8.e.html"> E. Platyhelminthes </a> <br>
                    <a href="bab8.f.html"> F. Nemathelminthes </a> <br>
                    <a href="bab8.g.html"> G. Annelida </a> <br>
                    <a href="bab8.h.html"> H. Arthropoda </a> <br>
                    <a href="bab8.i.html"> I. Mollusca</a> <br>
                    <a href="bab8.j.html"> J. Echinodermata </a> <br>
                    <a href="bab8.k.html"> K. Pisces </a> <br>
                    <a href="bab8.l.html"> L. Amfibi </a> <br>
                    <a href="bab8.m.html"> M. Reptil </a> <br>
                    <a href="bab8.n.html"> N. Aves </a> <br>
                    <a href="bab8.o.html"> O. Mamalia </a> <br>
                  </div>
                </div>
              </article>

              <article id='tabs-9'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/bab9.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>BAB IX </h4>
                    <center><strong><p> EKOLOGI </p></strong></center>
                    <h4> Sub :</h4>
                    <a href="bab9.a.html"> A. Komponen Ekosistem </a> <br>
                    <a href="bab9.b.html"> B. Interaksi Dalam Ekosistem </a> <br>
                    <a href="bab9.c.html"> C. Daur Biogekimia </a> <br>
                </div>
              </article>

              <article id='tabs-10'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/bab10.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>BAB X </h4>
                    <center><strong><p> LINGKUNGAN </p></strong></center>
                    <h4> Sub :</h4>
                    <a href="bab10.a.html"> A. Pengertian Lingkungan Dan Pencemaran Lingkungan </a> <br>
                    <a href="bab10.b.html"> B. Macam - Macam Pencemaran Lingkungan </a> <br>
                    <a href="bab10.c.html"> C. Perubahan Lingkungan </a> <br>
                    <a href="bab10.d.html"> D. Pelestarian Lingkungan </a> <br>
                    <a href="bab10.e.html"> E. Jenis - Jenis Limbah Dan Penanganannya </a> <br>
                  </div>
                </div>
              </article>
              
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section coming-soon">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-xs-12">
          <div class="continer centerIt">
            <div>
              <h4>Sumber Belajar Lainnya</h4>
              <img src="assets/images/home/sumberr.jpeg" alt="">
              <div class="counter">
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section courses" data-section="section4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>KUMPULAN SOAL</h2>
          </div>
        </div>
        <div class="owl-carousel owl-theme">

          <div class="item">
            <img src="assets/images/soal/bab1.png" alt="Course #1">
            <div class="down-content">
              <h4>RUANG LINGKUP BIOLOGI</h4>
              <p>Wabah flu burung telah menimbulkan kerugian besar bagi para peternak unggas. Cabang biologi yang mempelajari tentang penyebab penyakit tersebut...</p>
              <div class="author-image">
                <img src="assets/images/author-01.png" alt="Author 1">
              </div>
              <div class="text-button-pay">
                <a href="soal1.html"> Lanjut </a>
              </div>
            </div>
          </div>

          <div class="item">
            <img src="assets/images/soal/bab2.png" alt="Course #2">
            <div class="down-content">
              <h4>KEANEKARAGAMAN HAYATI </h4>
              <p>Ekosistem air laut dibagi menjadi beberapa macam zona mulai dari pantai hingga ke tengah laut. Zona dengan kedalaman kurang dari 200 m dan merupakan daerah dangkal, dapat ditembus cahaya matahari, dihuni oleh ganggang laut dan juga ikan, termasuk zona...</p>
              <div class="author-image">
                <img src="assets/images/author-02.png" alt="Author 2">
              </div>
              <div class="text-button-pay">
                <a href="soal2.html"> Lanjut </a>
              </div>
            </div>
          </div>

          <div class="item">
            <img src="assets/images/soal/bab3.png" alt="Course #3">
            <div class="down-content">
              <h4>VIRUS</h4>
              <p>Vaksinasi dapat mencegah suatu penyakit yang disebabkan oleh virus. Vaksinasi dapat diberikan secara oral misalnya vaksin untuk mencegah penyakit...</p>
              <div class="author-image">
                <img src="assets/images/author-03.png" alt="Author 3">
              </div>
              <div class="text-button-pay">
                <a href="soal3.html"> Lanjut </a>
              </div>
            </div>
          </div>
          
          <div class="item">
            <img src="assets/images/soal/bab4.png" alt="Course #4">
            <div class="down-content">
              <h4>ARCHAEBACTERIA DAN EUBACTERIA </h4>
              <p>Sepotong ikan asin yang kadar garamnya sangat tinggi ternyata menjadi rusak dan agak membusuk. Kerusakan ini diduga disebabkan oleh bakteri (archaebacteria). Bakteri tersebut tergolong kedalam kelompok...</p>
              <div class="author-image">
                <img src="assets/images/author-04.png" alt="Author 4">
              </div>
              <div class="text-button-pay">
                <a href="soal4.html"> Lanjut </a>
                <!-- <a href="#">Free <i class="fa fa-angle-double-right"></i></a> -->
              </div>
            </div>
          </div>

          <div class="item">
            <img src="assets/images/soal/bab5.png" alt="">
            <div class="down-content">
              <h4>PROTISTA </h4>
              <p>Dalam usaha manusia mencari sumber makanan baru, ternyata Chorella mendapat perhatian yang cukup besar. 
                Hal ini dikarenakan Chorella mempunyai kandungan protein yang cukup tinggi dan mudah berfotosintesis. Chorella termasuk golongan...</p>
              <div class="author-image">
                <img src="assets/images/author-05.png" alt="">
              </div>
              <div class="text-button-pay">
                <a href="soal5.html"> Lanjut </a>
                <!-- <a href="#">Pay <i class="fa fa-angle-double-right"></i></a> -->
              </div>
            </div>
          </div>

          <div class="item">
            <img src="assets/images/soal/bab6.png" alt="">
            <div class="down-content">
              <h4>JAMUR</h4>
              <p>Meskipun tidak sedang bersimbiosis dengan lumut, ganggang tetap dapat hidup mandiri. Hal ini terjadi karena ganggang mampu ...</p>
              <div class="author-image">
                <img src="assets/images/author-01.png" alt="">
              </div>
              <div class="text-button-pay">
                <a href="soal6.html"> Lanjut </a>
                <!-- <a href="#">Free <i class="fa fa-angle-double-right"></i></a> -->
              </div>
            </div>
          </div>

          <div class="item">
            <img src="assets/images/soal/bab8.png" alt="">
            <div class="down-content">
              <h4>DUNIA TUMBUHAN</h4>
              <p>Kingdom Plantae terdiri atas Bryophyta, Pteridophyta, dan Spermatophyta. Ciri-ciri Bryophyta yang membedakannya dari Pteridophyta...</p>
              <div class="author-image">
                <img src="assets/images/author-02.png" alt="">
              </div>
              <div class="text-button-pay">
                <a href="soal7.html"> Lanjut </a>
                <!-- <a href="#">Free <i class="fa fa-angle-double-right"></i></a> -->
              </div>
            </div>
          </div>

          <div class="item">
            <img src="assets/images/soal/bab7.png" alt="">
            <div class="down-content">
              <h4>DUNIA HEWAN</h4>
              <p>Kelompok hewan triploblastik yang tidak memiliki rongga di antara saluran pencernaan dan dinding tubuh...</p>
              <div class="author-image">
                <img src="assets/images/author-03.png" alt="">
              </div>
              <div class="text-button-pay">
                <a href="soal8.html"> Lanjut </a>
                <!-- <a href="#">Pay <i class="fa fa-angle-double-right"></i></a> -->
              </div>
            </div>
          </div>

          <div class="item">
            <img src="assets/images/soal/bab9.png" alt="">
            <div class="down-content">
              <h4>EKOLOGI</h4>
              <p>Di suatu padang rumput, terdapat sekumpulan sapi, rumput, pohon jambu, semut, dan seorang penggembala. Sekumpulan sapi di padang rumput tersebut ...</p>
              <div class="author-image">
                <img src="assets/images/author-04.png" alt="">
              </div>
              <div class="text-button-pay">
                <a href="soal9.html"> Lanjut </a>
                <!-- <a href="#">Pay <i class="fa fa-angle-double-right"></i></a> -->
              </div>
            </div>
          </div>

          <div class="item">
            <img src="assets/images/soal/bab10.png" alt="">
            <div class="down-content">
              <h4>LINGKUNGAN</h4>
              <p>Penggunaan pupuk bertujuan untuk menyuburkan tanaman, namun penggunaan yang berlebihan mengakibatkan sisa pupuk tercuci oleh air hujan, masuk ke saluran irigasi kemudian terkumpul di sungai. Fenomena tersebut...</p>
              <div class="author-image">
                <img src="assets/images/author-04.png" alt="">
              </div>
              <div class="text-button-pay">
                <a href="soal10.html"> Lanjut </a>
                <!-- <a href="#">Pay <i class="fa fa-angle-double-right"></i></a> -->
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>
  

  <section class="section video" data-section="section5">
    <div class="left-content">
      <center><h4>Watch the video to learn more about <em>BIO -</em> CATION</h4></center>
    <center><video controls>
      <source src="assets/images/tentang/biocation.mp4" type="video/webm" />
    </video></center>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section contact" data-section="section6">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Kontak Kami</h2>
          </div>
        </div>
        <div class="col-md-6">
                    
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-md-6">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                  </fieldset>
                </div>
                <div class="col-md-6">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required="">
                  </fieldset>
                </div>
              <div class="col-md-12">
                <fieldset>
                  <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="button">Send Message Now</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-6">
        <div class="item">
        <style>
h3 {
	color:white;
}
h4 {
  color:white;
  font-size: 15px;
}
</style>
            <center> <h3>  Ikuti Kami </h3> </center>
            <center> <img src="assets/images/kontak/kontak.jpeg" alt="Course #2"> </center>
            <br>
            <center> <h3>  Hubungi Kami </h3> </center>
            <center> <img src="assets/images/kontak/kontak2.jpeg" alt="Course #2"> </center>
            <br>
            <br>
            <h4> BIO-CATION <br>
            Jl. Dr. Saharjo No.160, Manggarai, Kota Jakarta, Daerah Khusus Ibukota Jakarta 12860
            </h4>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright 2021 by BIO-CATION
          
           | Design: <a href="https://templatemo.com" rel="sponsored" target="_parent"> Kelompok 2 PTI 2019 A</a></p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
          if($(e.target).hasClass('external')) {
            return;
          }
          e.preventDefault();
          $('#menu').removeClass('active');
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>
</html>