<html>

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="keywords" content="HTML,CSSJAVASCRİPT"/>
    <!-- burası insaanlr html yazdığımnda önerilen olarak gösterme-->
    <meta name="description" content="Staj eğitimşnde gördüklerim"/><!-- Burası aramada altta yazan açıklama -->
    <meta name="author" content="Ugur"/><!-- Yazarın adını yazdığımız kısım-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3aa3356454.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="BS4/css/bootstrap.css"/>


    <title>İlan Ver</title>

</head>

<body><!--Navbarbaşlangıc-->
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

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-3"></div>
        <div class="col-6" style="text-align: left;">
            <form action="yayinla.php" method="POST" enctype="multipart/form-data" style="margin-top: 20px;">
                <div class="form-group">
                    <label for="exampleInputEmail1">İlan Başlığı</label>
                    <input type="text" class="form-control" name="ilan_isim">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <label for="exampleInputPassword1">Araç Markası</label>
                    <br>
                    <select name="arac_marka" id="cars"
                            style="width: 100%; height:4%;background-color:white;border-radius:4px;">
                        <?php
                        try {
                            $db = new PDO('mysql:host=localhost;dbname=ubiteticaret', 'root', '');
                            $db->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");
                        } catch (PDOException $e) {
                            echo 'Connection failed: ' . $e->getMessage();
                        }
                        foreach ($db->query('SELECT * FROM tbl_arac') as $row) {

                            ?>
                            <option value=" <?php echo $row['ID'] ?>"><?php echo $row['Marka'] ?> </option><?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <label for="exampleInputPassword1">Araç Modeli</label>
                    <br>

                    <select name="arac_seri" id="cars"
                            style="width: 100%; height:4%;background-color:white;border-radius:4px;">
                        <?php

                        try {
                            $db = new PDO('mysql:host=localhost;dbname=ubiteticaret', 'root', '');
                            $db->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");
                        } catch (PDOException $e) {
                            echo 'Connection failed: ' . $e->getMessage();
                        }

                        foreach ($db->query('SELECT * FROM tbl_seri') as $row) {
                            ?>
                            <option value=" <?php echo $row['ID'] ?>"><?php echo $row['Model'] ?> </option><?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <label for="exampleInputPassword1">Yakıt</label>
                    <br>

                    <select name="arac_yakit" id="cars"
                            style="width: 100%; height:4%;background-color:white;border-radius:4px;">
                        <?php

                        try {
                            $db = new PDO('mysql:host=localhost;dbname=ubiteticaret', 'root', '');
                            $db->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");
                        } catch (PDOException $e) {
                            echo 'Connection failed: ' . $e->getMessage();
                        }

                        foreach ($db->query('SELECT * FROM tbl_yakit') as $row) {
                            ?>
                            <option value=" <?php echo $row['ID'] ?>"><?php echo $row['yakit_turu'] ?> </option><?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <label for="">Araç Yılı</label>
                    <br>
                    <select class="form-control" name="arac_yili">
                        <?php
                        for ($year = (int)date('Y'); 1990 <= $year; $year--) : ?>
                            <option value="<?= $year; ?>"><?= $year; ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <label for="">Kilometre</label>
                    <br>
                    <input type="text" class="form-control" name="kilometre">
                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <label for="">Araç Beygiri</label>
                    <br>
                    <input type="text" class="form-control" name="beygir">
                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <label for="">Araç Modeli</label>
                    <br>
                    <input type="text" class="form-control" name="model">
                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <label for="">Renk</label>
                    <br>
                    <input type="text" class="form-control" name="renk">
                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <label for="">Fiyat</label>
                    <br>
                    <input type="text" class="form-control" name="fiyat">
                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <label for="exampleInputPassword1">İlan Açıklaması</label>
                    <textarea type="text" class="form-control" id="exampleInputPassword1" style="height: 20vh"
                              name="ilan_aciklama" rows="3"></textarea>
                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <label for="exampleInputPassword1">İlan Fotoğrafları</label>
                    <br>
                    <input type="file" name="fileUp[]" multiple/>

                </div>


                <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Yayınla</button>
            </form>

        </div>
        <div class="col-3"></div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
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
$VeritabaniBağlantisi = null;
ob_end_flush();//Çıktı tamponlarını kapatmak için kullanıyoruz
?>