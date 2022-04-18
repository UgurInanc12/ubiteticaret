<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="keywords" content="HTML,CSSJAVASCRİPT"/>
    <!-- burası insaanlr html yazdığımnda önerilen olarak gösterme-->
    <meta name="description" content="Staj eğitimşnde gördüklerim"/><!-- Burası aramada altta yazan açıklama -->
    <meta name="author" content="ugur"/><!-- Yazarın adını yazdığımız kısım-->
    <link rel="stylesheet" type="text/css" href="BS4/css/bootstrap.css"/>
    <script src="kontrol.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/3aa3356454.js" crossorigin="anonymous"></script>
    <title>Staj eğitim</title>
</head>
<body style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/Others/images/91.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
<!--- Kullanici:<i class="fas fa-user fa-4x fa-spin"></i> --->
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

        <!--sozluk Basi-->
        <section class="align-center">
            <h2 class="text-danger">Sözlük</h2>
            <article id="tanitim_ugur">
                <div class="row p-3" style="background-color:#fffff0; border-style: double;">
                    <div class="col-sm col-md-4">
                        <img src="resimler/478875.png" class="d-inline" width=240 height=320 class="foto"/>
                    </div>
                    <div class="col-sm col-md-8">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search"
                                   aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="tdk()">Search
                            </button>
                        </form>
                        <!--anlamların yazdığı div-->
                        <div class="text-left pl-2  ">

                            <?php
                            try {
                                //header('Content-Type: application/json');
                                // echo"tdk ust";
                                function tdk($terim)
                                {
                                    //echo"tdk ic";
                                    $sesveri = file_get_contents("http://sozluk.gov.tr/yazim?ara=$terim");
                                    $sesjsoncoz = json_decode($sesveri, true);
                                    $sesurl = "http://sozluk.gov.tr/ses/" . $sesjsoncoz[0]["seskod"] . ".wav";
                                    $veri = file_get_contents("http://sozluk.gov.tr/gts?ara=" . $terim);
                                    $veriparcala = json_decode($veri, true);
                                    //asdasd





                                    //asdasd

                                    $veriparcala[0]['telaffuz'] = $sesurl;
                                    $veri = json_encode($veriparcala);

                                    echo "<H3 class='text-capitalize text-left text-dark font-weight-bold mb-3'>" . "$terim" . "</H3>";//Burada ekrna stilli yazı yazdırıyoruz


                                    //ses ekleme
                                    echo "<h5 class='text-capitalize text-left text-dark font-weight-bold '>".ucfirst($terim)."  Telefuz"."</h5>"."";
                                    ?>
                                    <audio controls>
                                        <source src="<?php echo $veriparcala[0]['telaffuz'];?>" type="audio/wav">
                                    </audio></br>
                                    <?php
                                    $anlam_listesi = $veriparcala[0]['anlamlarListe'];//anlam listesini parçalıyoruz


                                    //lisan var mıı yok mu kontrolü
                                    if (isset(($veriparcala[0]['lisan'])) && $veriparcala[0]['lisan'] != "") {
                                        echo "<H5 class='text-capitalize text-left text-dark font-weight-bold mb-3'>" . "Lisan" . "</h5>";
                                        echo "<p class='text-capitalize text-left text-dark font-weight-normal mb-3 ml-2'>" . $veriparcala[0]['lisan'] . "</p>";

                                    }
                                    $sayac = 1;
                                    echo "<H5 class='text-capitalize text-left text-dark font-weight-bold mb-3'>" . "Anlamı:" . "</h5>";
                                    foreach ($anlam_listesi as $anlam) {

                                        echo "<span>" . $sayac . "-)" . "</span>";
                                        //tam_adi var mı yok mu kontrol
                                        if (isset(($anlam['ozelliklerListe'][0]['tam_adi']))) {
                                            echo "<span class='text-info  font-weight-normal mr-1'>" . ($anlam['ozelliklerListe'][0]['tam_adi']) . "-" . "</span>";

                                        }
                                        if (isset(($anlam['ozelliklerListe'][1]['tam_adi']))) {
                                            echo "<span class='text-info  font-weight-normal mr-1'>" . ($anlam['ozelliklerListe'][1]['tam_adi']) . "-" . "</span>";

                                        }
                                        echo "<span class='text-capitalize text-left text-dark font-weight-normal mb-3 ml-2'>" . $anlam['anlam'] . "</span><br><br>";
                                        $sayac = $sayac + 1;
                                        // echo "<span class='text-capitalize text-left text-dark font-weight-normal mb-3 ml-2'>".$anlam['anlam'] ."</span><br><br>";

                                        //ornek kontrol
                                        if (isset(($anlam['orneklerListe'][0]['ornek']))) {
                                            echo "<span class='text-dark  font-weight-bold mr-1 ml-3'>" . "Ornek:" . "-" . "</span>";
                                            echo "<span class='text-dark  font-weight-normal mr-1 '>" . ($anlam['orneklerListe'][0]['ornek']) . "-" . "</span><br><br>";
                                        }
                                    }
                                }
                                //ilk açılışta search görmüyordu link üzerinden açılınca ondan ilk olarak issetle kontrol ediyoruz
                                if (isset($_GET["search"])) {
                                    $terim = $_GET["search"];
                                    // echo"search yani terim=". "$terim" ."<br>";
                                    if ($terim == "") {
                                        $uyari['hata'] = 'Lütfen Terim Giriniz';
                                        //die(json_encode($uyari));
                                    } else {
                                        tdk($terim);
                                    }
                                }
                            } catch (Exception $e) {
                                echo 'Sonuç bulunamadı... ' . "\n";
                            }
                            ?>
                            <!--anlamların yazdığı div son-->
                        </div>
                    </div>
            </article>
        </section>
        <!--sozluk sonu-->
        <!--ana şeyin sonu-->
    </div>
</div>
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
</html>