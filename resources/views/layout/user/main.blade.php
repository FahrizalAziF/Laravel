<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
    <link rel="icon" href="{{ asset('assets/img/icon.png') }}">

    <!-- Bootstrap CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/user/css/owl.carousel.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="assets/user/css/style.css">

    <title>@yield('title')</title>
    
</head>
<body>
    <div class="preloader"> <img class="loader_animation"  src="{{ asset('assets/img/icon.png') }}" alt="#" /> </div>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container">
            <a class="navbar-brand" href="#">Fahrizal<span>Profile</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav ">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#achievment">Achievment</a>
                    <a class="nav-link" href="#portofolio">Portofolio</a>
                    <a class="nav-link" href="#">About</a>
                    {{-- <a class="btn  tombol " href="#">Join US</a> --}}
                </div>
            </div>
        </div>
    </nav>
   @yield('isi')
   <footer class="main-footer" style="background-color: darkgray">
    <div class="container"  style="padding-top: 20px;padding-bottom: 10px">
        <div class="row">
            <div class="col">
                <h3>
                Hallo, saya Fahrizal Azi F
                </h3>
                <p>
                    Saya adalah mahasiswa Politeknik Negeri Jember, Jurusan Teknologi Informasi, Program Studi Teknik Informatika. Saya lahir di kota Banyuwangi pada 09 Mei 1999. Saya mulai menyukai pemograman saat duduk di semester satu.
                    Saat ini saya bekerja sebagai freelance utnuk proyek pembuatan website dan apps mobile.
                </p>
            </div>
            <div class="col">
                <p>
                Sosial Media :
                </p>
                <div class="">
                    <div class="row">
                        <div class="col-1">
                            <i class="fab fa-instagram fa-2x" ></i>
                        </div>
                        <div class="col">
                           <a target="_blank" href="https://www.instagram.com/fahrizalazif_" style="color: black">@fahrizalazif_</a>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-1">
                            <i class="fab fa-twitter-square fa-2x"></i>
                        </div>
                        <div class="col">
                           <a target="_blank" href="https://twitter.com/azi_fahrizal" style="color: black">@azi_fahrizal</a>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-1">
                            <i class="fab fa-github fa-2x"></i>
                        </div>
                        <div class="col">
                           <a target="_blank" href="https://github.com/FahrizalAziF" style="color: black" >FahrizalAziF</a>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="wa" style="position:fixed;right:20px;bottom:20px;z-index:3;">
        <a href="https://api.whatsapp.com/send?phone=+62859180657182&text=Halo" target="_blank">
            <img src="/assets/img/whatsapp.png"> 
        </a>
    </div>
        <div class="text-center " style="padding-bottom: 10px">
            <strong>Copyright &copy; 2020 <a href="https://adminlte.io">Fahrizal Azi F</a>.</strong>
        </div>
  </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="assets/user/js/owl.carousel.min.js"></script>
    <script src="assets/user/js/custom.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script> -->
    <script>
        AOS.init();
      </script>
      
    <script>
        $('.owl-carousel ').owlCarousel({
            autoplay: true,
            margin: 30,
            autoplayHoverPause: true,
            items: 3,
            nav: true,
            dots: true,
            loop: true,
            responsive: {
                0: {
                    items: 4
                }
            }
        });
    </script>
</body>

</html>