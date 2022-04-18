<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="keywords" content="HTML,CSSJAVASCRİPT"/>
    <meta name="description" content="Ubit Stajerler"/>
    <meta name="author" content="Ubit Stajerler"/>
    <link rel="stylesheet" type="text/css" href="BS4/css/bootstrap.css"/>
    <script src="kontrol.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/3aa3356454.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="BS4/css/bootstrap.css"/>

    <title>araba.com İlan</title>

    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
</head>
<body>

<style>
    body {
        background-color: #343a40;
    }

    .resim {
        height: 630px;

    }

    #card5 {
        height: 630px;

    }

    .vasıta1 {
        color: black;
    }

    #fiyat {
        color: red;
    }

    #iletisim {
        color: red;
    }

    #sor {
        height: 55px;
        width: 350px;

        background-color: #b4e0dd;
    }

    #sor2 {
        font-size: 30px;
        color: black;
    }

    #button1 {
        width: 570px;
    }

    #button2 {
        width: 550px;
    }


    #a1 {
        color: black;
    }

    #a2 {
        color: black;
    }

    #a3 {
        color: black;
    }

    #acıklama {
        color: red;
    }

    #boya {
        color: red;
    }

    #exper {
        width: 1000px;
        margin-left: 50px;
    }

</style>
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

<div class="container">
    <div class="row">
        <div class="col-3">
            <div id="card5" class="card">
                <br><br>

                <ul>
                    <li><a class="vasıta1" class="vasıta1" href="">Vasıta</a></li>
                    <ul>
                        <li><a class="vasıta1" href="">otomobil</a></li>
                        <li><a class="vasıta1" href="">Arazi, SUV & Pickup</a></li>
                        <li><a class="vasıta1" href="">Motosiklet</a></li>
                        <li><a class="vasıta1" href="">Minivan & Panelvan</a></li>
                        <li><a class="vasıta1" href="">Ticari Araçlar</a></li>
                        <li><a class="vasıta1" href="">Kiralık Araçlar</a></li>
                        <li><a class="vasıta1" href="">Deniz Araçları</a></li>

                    </ul>
                </ul>
                <br>
                <ul>
                    <li><a class="vasıta1" class="vasıta1" href="">Vasıta</a></li>
                    <ul>
                        <li><a class="vasıta1" href="">otomobil</a></li>
                        <li><a class="vasıta1" href="">Arazi, SUV & Pickup</a></li>
                        <li><a class="vasıta1" href="">Motosiklet</a></li>
                        <li><a class="vasıta1" href="">Minivan & Panelvan</a></li>
                        <li><a class="vasıta1" href="">Ticari Araçlar</a></li>
                        <li><a class="vasıta1" href="">Kiralık Araçlar</a></li>
                        <li><a class="vasıta1" href="">Deniz Araçları</a></li>

                    </ul>
                </ul>


            </div>
        </div>
        <div class="col-9">
            <div class="owl-carousel owl-theme">
                <div class="item"><img class="resim" src="1lambo.jpg"></div>
                <div class="item"><img class="resim" src="2lambo.jpg"></div>
                <div class="item"><img class="resim" src="3lambo.jpg"></div>
                <div class="item"><img class="resim" src="4lambo.jpg"></div>
                <div class="item"><img class="resim" src="5lambo.jpg"></div>
                <div class="item"><img class="resim" src="6lambo.jpg"></div>
                <div class="item"><img class="resim" src="7lambo.jpg"></div>
                <div class="item"><img class="resim" src="8lambo.jpg"></div>
                <div class="item"><img class="resim" src="9lambo.jpg"></div>
                <div class="item"><img class="resim" src="10lambo.jpg"></div>
                <div class="item"><img class="resim" src="11lambo.jpg"></div>
                <div class="item"><img class="resim" src="12lambo.jpg"></div>
            </div>
        </div>
    </div>
    <br><br>
</div>
<div class="container">
    <div class="row">
        <div class="col-7 card">
            <h2 id="fiyat" class="text-center">7.650.000 TL</h2>
            <hr>

            <table border="2">
                <tr>
                    <td><h5>İlan No:</h5></td>
                    <td><h5>17864811</h5></td>
                </tr>


                <tr>
                    <td><h5>İlan Tarihi:</h5></td>
                    <td><h5>09 Temmuz 2021</h5></td>
                </tr>

                <tr>
                    <td><h5>Marka:</h5></td>
                    <td><h5>Lamborghini</h5></td>
                </tr>

                <tr>
                    <td><h5>Seri / Model :</h5></td>
                    <td><h5>Huracan</h5></td>
                </tr>


                <tr>
                    <td><h5>Yıl:</h5></td>
                    <td><h5>2019</h5></td>
                </tr>


                <tr>
                    <td><h5>Yakıt Tipi:</h5></td>
                    <td><h5>Benzin</h5></td>
                </tr>

                <tr>
                    <td><h5>Vites Tipi</h5></td>
                    <td><h5>Otomatik</h5></td>
                </tr>
                <tr>
                    <td><h5>Motor Hacmi:</h5></td>
                    <td><h5>5204 cc</h5></td>
                </tr>
                <tr>
                    <td><h5>Motor Gücü:</h5></td>
                    <td><h5>640 hp</h5></td>
                </tr>
                <tr>
                    <td><h5>Kilometre:</h5></td>
                    <td><h5>115 km</h5></td>
                </tr>

            </table>
            <br>

        </div>
        <div class="col-1"></div>
        <div class="col-4 card">
            <br>
            <h3 id="iletisim" class="text-center">İletişim Bilgileri</h3>
            <hr>
            <i class="fas fa-user fa-2x mr-3"> Budak Otomotiv</i> <br>
            <table border="2">
                <tr>
                    <td class="text-center" colspan="2"><h4>Boran Budak</h4></td>
                    <br>
                <tr>
                    <td><h3>📞 Telefon</h3></td>
                    <td><h5>+90 538 746 84 73</h5></td>
                </tr>
                <tr>
                    <td><h4> 📧</h4><h4>E-mail</h4></td>
                    <td><h5>boran.tamas@outlook.com</h5></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button id="sor"><a id="sor2" href="">Satıcıya Sor</a></button>
                    </td>

                </tr>
                </tr>

            </table>
        </div>
    </div>
</div>
<br><br>

<div class="container card">
    <br>
    <div class="row ">

        <div class="col-6 ">
            <button id="button1"><a id="a1" href="#acıklama1"><h2>Açıklama</h2></a></button>
        </div>
        <div class="col-6 ">
            <button id="button2"><a id="a2" href="#boya1"><h2>Boya - Değişen</h2></a></button>

        </div>
        <div class="col-0 ">
        </div>

        <div class="col-12" id="acıklama1">
            <br>
            <p>
                ______________________________________________________________________________________________________________________________________________________________________</p>
            <br>

            <h1 class="text-center" id="acıklama">Açıklama</h1>
            <b>GÜMRÜK %18 KDV'Sİ,ÖTV+%18 KDV DAHİLDİR. İSTENİLİRSE ÖTV ALICI TARAFINDAN YATIRILABİLİR.</b><br>
            <b>(FİYATLARIMIZ EURO DÖVİZ KURUNA GÖRE DEĞİŞKENLİK GÖSTEREBİLİR)</b>
            <b>DETAYLI BİLGİ İÇİN İLETİŞİME GEÇİNİZ.</b>
            <p>
                ______________________________________________________________________________________________________________________________________________________________________</p>

        </div>
        <br><br>
        <div class="col-12" id="boya1">
            <br>
            <h1 class="text-center" id="boya">Boya - Değişen - Expertiz</h1>
            <p>
                ______________________________________________________________________________________________________________________________________________________________________</p>
            <br>

            <table border="2" id="exper">
                <tr>
                    <td><h5>Sağ Arka Çamurluk: </h5></td>
                    <td><h5>Orijinal</h5></td>
                </tr>


                <tr>
                    <td><h5>Sol Arka Çamurluk:</h5></td>
                    <td><h5>Orijinal</h5></td>
                </tr>

                <tr>
                    <td><h5>Sağ Arka Kapı:</h5></td>
                    <td><h5>Orijinal</h5></td>
                </tr>

                <tr>
                    <td><h5>Sağ Ön Kapı:</h5></td>
                    <td><h5>Orijinal</h5></td>
                </tr>


                <tr>
                    <td><h5>Tavan:</h5></td>
                    <td><h5>Orijinal</h5></td>
                </tr>


                <tr>
                    <td><h5>Sol Arka Kapı:</h5></td>
                    <td><h5>Orijinal</h5></td>
                </tr>

                <tr>
                    <td><h5>Sol Ön Kapı:</h5></td>
                    <td><h5>Orijinal</h5></td>
                </tr>
                <tr>
                    <td><h5>Sağ Ön Çamurluk:</h5></td>
                    <td><h5>Orijinal</h5></td>
                </tr>
                <tr>
                    <td><h5>Motor Kaputu:</h5></td>
                    <td><h5>Orijinal</h5></td>
                </tr>
                <tr>
                    <td><h5>Sol Ön Çamurluk:</h5></td>
                    <td><h5>Orijinal</h5></td>
                </tr>
                <tr>
                    <td><h5>Ön Tampon:</h5></td>
                    <td><h5>Orijinal</h5></td>
                </tr>
                <tr>
                    <td><h5>Arka Tampon:</h5></td>
                    <td><h5>Orijinal</h5></td>
                </tr>

            </table>
            <br><br>


        </div>
    </div>
</div>


<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 :
    <a class="text-white" href="">Ubit_Stajerler.com</a>
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
<!-- javascript -->
<script src="owlcarousel/jquery.min.js"></script>
<script src="owlcarousel/owl.carousel.js"></script>
<script>$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 7,
    nav: true,
    responsive: {
        0: {
            items: 1
        },
        6000: {
            items: 3
        },
        10000: {
            items: 5
        }
    }
})</script>
</body>
</html>