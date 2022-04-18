<?php
/*  kargomnerede ve havale formunda header location hatası veriyordu ob_start(); ve ob_end_flush(); kargom nerede ve havaleformuna ekledım ancak hata çözülmedi 
  öncedem header değiştirdiğimiz için hata veriyordu ancak biz her sayfayı anasayfadaki body alanına çektiğimiz için index sayfasına bu değerleri eklememmiz gerekiyormuş
*/
session_start();//kullanıcı sitemize girdiğinde tanımak için session ve ob_start yapıyoruz
ob_start();//Bir takım değerler alıp depolamak için
require_once("Ayarlar/ayarlar.php");
require_once("Ayarlar/fonksiyonlar.php");
if (isset($_SESSION["Kullanici"])) {


    ?>

    <!doctype html>

    <html lang="tr">
    <head>
        <emeta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!-- Burası aramada altta yazan açıklama -->
        <meta name="author" content="UGUR"/><!-- Yazarın adını yazdığımız kısım-->
        <link rel="stylesheet" type="text/css" href="BS4/css/bootstrap.css"/>
        <script src="Ayarlar/fonksiyonlar.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="Ayarlar/fonksiyonlar.css"/>
        <script src="Fremaworks/JQuery/jquery-3.6.0.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="BS4/css/bootstrap.css"/>

        <script src="https://kit.fontawesome.com/3aa3356454.js" crossorigin="anonymous"></script>
        <meta name="Robots" content="index,follow">
        <meta name="googlebot" content="index,follow">
        <meta name="revisit-after" content="7 Days">
        <title>Anasayfa</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <script>
            var musikdegisken = 0;
        </script>


    </head>

    <body style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/Others/images/91.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <!--Navbarbaşlangıc-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top ">
        <a href="index.php?SK=0" class="navbar-brand p-0"><img class="pr-0 mr-0" src="resimler/sk_logo.jpg"
                                                               style="width:60px;border-radius: 50%;" alt=""> Arabam</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?SK=0">Anasayfa <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?SK=2">Hakkımızda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kimsinsen.php">ben kimim?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       href="/portfolio">Blog</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Üyelik
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">


                        <a class="dropdown-item" href="index.php?SK=22"> Sık Sorulan Sorular</a>


                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Uygulamalar
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="index.php?SK=3"> Uyelik Sozlesmesi</a>
                        <a class="dropdown-item" href="index.php?SK=5"> Gizlilik Sozlesmesi</a>
                        <a class="dropdown-item" href="index.php?SK=6"> Mesafeli Satış Sozlesmesi</a>
                        <a class="dropdown-item" href="index.php?SK=8"> İptal & İade & Değiştir Sozlesmesi</a>
                        <a class="dropdown-item" href="index.php?SK=7"> Teslimat</a>
                        <div class="dropdown-divider"></div>
                    </div>
                </li>
                <li>
                    <a class="nav-link" href="ilan_yayinla.php">Ilan Yayinla</a>
                </li>
                <li>
                    <a class="nav-link" href="sozluk.php">TDK sozluk</a>
                </li>

            </ul>
            <?php
            if (isset($_SESSION["Kullanici"])) {
                //burası kullanıcı giriş yapmışşsa çalışacak kısım çıkış vs bloklar gösteilecek
                ?>
                <a href="hesabimuyelikbilgilerim.php"> <i class="fas fa-user fa-2x mr-3 text-success"></i> </a>
                <a href="hesabimuyelikbilgilerim.php">
                    <button type="button" class="btn btn-primary mr-2">Hesabım</button>
                </a>
                <a href="uyecikisyap.php"><i class="fas fa-sign-out-alt text-danger fa-2x"></i></a>
                <a href="uyecikisyap.php">
                    <button type="button" class="btn btn-danger mr-2">Çıkış Yap</button>
                </a>
                <?php
            } else {
                ?>
                <i class="fas fa-user fa-2x mr-3 text-danger"></i>
                <a href="giris.php">
                    <button type="button" class="btn btn-primary mr-2">Giriş</button>
                </a>
                <a href="uyekayit.php">
                    <button type="button" class="btn btn-success mr-2">Kayıt Ol</button>
                </a>
                <?php
            }
            ?>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!--NavbarSon-->
    <div class="container bg-dark mt-3 mb-4 pb-4">

        <!--beyaz iç çerçeve-->
        <br>
        <div class="container bg-light p-4 mb-2 mt-3">

            <!--<h4>Ana Kısım</h4>
            <h5>Havale formda header hatası var düzelt==>Hata düzeldi index sayfasına bak</h5>
            -->


            <section class="align-center">
                <h2 class="text-danger align-left"></h2>
                <!-- Ugur Inanc tanıtım şeması tanımlanmıştır. -->
                <article id="tanitim_Ugur">
                    <!-- Ugur Inanc resmi tanımlanmıştır. -->
                    <div class="row pr-3 pl-3 pt-0"
                         style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/Others/images/91.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
                        <!--Sol başlangıç-->
                        <!--alt nav baslangic-->
                        <div class="col-md-12 ml-0 mr-0">
                        </div>
                        <!--alt nav son-->
                        <div class="col-md-6 offset-md-3 col-xl-5 mb-2 mt-2">

                            <h4 class="text-center font-weight-bold">Hesabım >Üyelik Bilgileri </h4>
                            <hr>
                            <form class="align-center" method="post" action="uyeguncelle.php">
                                <div class="card wow fadeInRight" data-wow-delay="0.3s">
                                    <div class="card-body ">
                                        <!--Header-->
                                        <div class="text-center mb-2">
                                            <h3 class="white-text">
                                                <i class="fas fa-user white-text"></i> Üyelik Bilgileri : </h3>
                                            <hr class="hr-light">
                                            <p class="">Aşağıdan üyelik bilgilerini yönetebilirsiniz</p>
                                        </div>
                                        <!--Body-->
                                        <!--
                                        <div class="md-form">
                                          <i class="fas fa-user prefix white-text active"></i>
                                          <input type="text" id="form3" class="white-text form-control">
                                          <label for="form3" class="active">Your name</label>
                                        </div>-->
                                        <?php
                                        $UyeSorgusu = $VeritabaniBaglantisi->prepare("SELECT * FROM tbl_users WHERE Mail=? ");
                                        $UyeSorgusu->execute([$_SESSION["Kullanici"]]);
                                        $Uye = $UyeSorgusu->fetch(PDO::FETCH_ASSOC);

                                        ?>
                                        <hr class=" bg-info">
                                        <div class="md-form">
                                            <i class="fas fa-envelope prefix white-text active"></i>
                                            <label for="form2" class="active" name="Email"> <b>Email
                                                    :</b> <?php echo $Uye["Mail"]; ?></label>
                                        </div>

                                        <div class="md-form">
                                            <i class="fas fa-user white-text active"></i>
                                            <label for="form2" class="active" name="Isim"> <b>İsim
                                                    :</b> <?php echo $Uye["FirstName"]; ?></label>
                                        </div>

                                        <div class="md-form">
                                            <i class="fas fa-phone-square-alt white-text active"></i>
                                            <label for="form2" class="active" name="TelNo"> <b>Telefon Numarası
                                                    :</b> <?php echo $Uye["Phone"]; ?></label>
                                        </div>


                                        <div class="text-center mt-4">
                                            <button class="btn btn-info"> Bilgilerimi Güncelle</button>


                                        </div>


                                    </div>
                            </form>


                        </div>
                        <!-- hAVALE SON -->
                        <hr>
                    </div>
                    <!--Bu divi sonradan ekledim yani kapanışı elemanlar tek blok içinde kalıyordu ekranı 2 parçaya bölmeme rağmen-->
                    <!--Sağ başlangıç-->

                    <!--SAĞ SON-->


                </article>


            </section>


            <!--ana şeyin sonu-->


        </div>


    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
    </body>
    <!-- Footer -->
    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/ugurtr12/"
                   role="button"
                ><i class="fab fa-facebook-f"></i
                    ></a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/Uurinan95048438"
                   role="button"
                ><i class="fab fa-twitter"></i
                    ></a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/ugurinanc12/"
                   role="button"
                ><i class="fab fa-instagram"></i
                    ></a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/in/ugur-inanc/"
                   role="button"
                ><i class="fab fa-linkedin-in"></i
                    ></a>

                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/UgurInanc12" role="button"
                ><i class="fab fa-github"></i
                    ></a>
            </section>
            <!-- Section: Social media -->

            <!-- Section: Form -->
            <section class="">
                <form action="">
                    <!--Grid row-->
                    <div class="row d-flex justify-content-center">
                        <!--Grid column-->
                        <div class="col-auto">
                            <p class="pt-2">
                                <strong>Sign up for our newsletter</strong>
                            </p>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-5 col-12">
                            <!-- Email input -->
                            <div class="form-outline form-white mb-4">
                                <input type="email" id="form5Example2" class="form-control"/>
                                <label class="form-label" for="form5Example2">Email address</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-auto">
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-outline-light mb-4">
                                Subscribe
                            </button>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </form>
            </section>
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    </html>
    <?php

} else {
    echo "Kulalnici adı ve sifer bos";
    header("Location:index.php?durum=oturum açılmamış");
}
$VeritabaniBağlantisi = null;
ob_end_flush();//Çıktı tamponlarını kapatmak için kullanıyoruz
?>