<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Home</title>

    <style>
        .btnSlideshow
        {
            background-color: blue;
            color: white;
        }
        .kepala
        {
            background-color: #062553;
            height: 50px;
        }
        .form-inline .form-control
        {
            width: 300px;
        }
        .btnSearch
        {
          color: black;
        }
        .btnSearch:hover
        {
          background-color: black;
          /* color: #3286bf; */
          color: #2f98c4;
        }
        .videoTerbaru
        {
          width: auto;
        }
        h5 {
	        color: black;
          font-size: 30px;
        }
    </style>
  </head>

  <body>
    <section class="slideShow">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/images/home/slide4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <strong> <h5>Yuk, daftar Bio-Cation!</h5> </strong>
                  <strong> <h5>Bagi kamu yang sudah daftar, silahkan Login.</h5> </strong>
                  <div class="text-button-pay">
                <a href="login.php" type="button" class="btn btnSlideshow" > LOGIN </a>
                <a href="registrasi.php" type="button" class="btn btnSlideshow" > DAFTAR </a>
              </div>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/images/home/slide5.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="assets/images/home/slide6.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </section>

    <section class="kepala">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg">                      
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                              </li>
                          </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="videoTerbaru">
        <!-- GRID TULISAN VIDEO TERBARU -->
        <div class="container mt-5">
          <div class="row mb-4 pt-4">
            <div class="col">
            <style>
h3 {
	font-size: 60px;
}
</style>
              <center> <h3 >Solusi Belajar Online Terlengkap Untuk SMA Kelas 10 Biologi</h3> </center>
              <br>
              <br>
              
            </div>
          </div>

    </section>

    <section class="kaki">
      <footer style="background-color: #062553; color: white;">
        <div class="container">
          <div class="row pt-4">
            <div class="col text-center">
              <p>Copyright 2021 by BIO-CATION | Design: Kelompok 2 PTI 2019 A</p>
            </div>
          </div>
        </div>
      </footer>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>