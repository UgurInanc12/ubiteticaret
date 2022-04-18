<?php
require_once("Ayarlar/ayarlar.php");
require_once("Ayarlar/fonksiyonlar.php");
session_start();//kullanıcı sitemize girdiğinde tanımak için session ve ob_start yapıyoruz
ob_start();
//require_once("index.php");
if(isset($_POST["Email"])){
  $GelenEmail   =   $_POST["Email"] ; 
}
else{
  $GelenEmail   = "";
}




if(isset($_POST["Isim"])){
  $GelenIsim   =   $_POST["Isim"]  ;
}
else{
  $GelenIsim   = "";
}
if(isset($_POST["TelNumarasi"])){
  $GelenTelNumarasi   =   $_POST["TelNumarasi"]  ;
}
else{
  $GelenTelNumarasi   = "";
}

if(isset($_REQUEST["ID"])){
  $KullaniciId   =   $_REQUEST["ID"]  ;
}
else{
  $KullaniciId   = "";
}

if($GelenEmail!="" and $GelenEmail!=""and $GelenIsim!=""){
        $UyeSorgusu = $VeritabaniBaglantisi->prepare("SELECT * FROM tbl_users WHERE Mail=? ");
        $UyeSorgusu->execute([$GelenEmail]);
        $UyeSorgusuSayisi   =   $UyeSorgusu->rowCount();
      // $UyeSorgusu    = $OtomobilSorgusu->fetchAll(PDO::FETCH_ASSOC);
      if($_SESSION["Kullanici"]!=$GelenEmail){

              if($UyeSorgusuSayisi>0){
                header("Location:uyeguncelle.php?durum=Kullanici-mail-daha-önceden-alınmıs");
                exit();
              
              }
              else{
                $UyeGuncellemeSorgusu = $VeritabaniBaglantisi->prepare("UPDATE tbl_users SET Mail=? ,FirstName=?,Phone=? WHERE ID=? LIMIT 1" );//siteye giren kullanıcıya session uzerinden oturum açıyoruz.
                $UyeGuncellemeSorgusu->execute([$GelenEmail,$GelenIsim,  $GelenTelNumarasi,$KullaniciId]);;//burada  email daha önce var mı diye kontrol ediyoruz eğer değer 1 ise kullanılmkış
                $KayitKontrolSayisi   =   $UyeGuncellemeSorgusu->rowCount();
                if($KayitKontrolSayisi>0){
                  header("Location:hesabimuyelikbilgilerim.php?durum=Kullanici-kaydi-yapildi");
                  exit();
                }
                else{
                  header("Location:index.php?durum=Kullanici-kaydi-yapilamadi");
                  exit();
                }
              }
        }
        else{
                $UyeGuncellemeSorgusu = $VeritabaniBaglantisi->prepare("UPDATE tbl_users SET Mail=? ,FirstName=?,Phone=? WHERE ID=? LIMIT 1" );//siteye giren kullanıcıya session uzerinden oturum açıyoruz.
                $UyeGuncellemeSorgusu->execute([$GelenEmail,$GelenIsim,  $GelenTelNumarasi,$KullaniciId]);;//burada  email daha önce var mı diye kontrol ediyoruz eğer değer 1 ise kullanılmkış
                $KayitKontrolSayisi   =   $UyeGuncellemeSorgusu->rowCount();
                if($KayitKontrolSayisi>0){
                  header("Location:hesabimuyelikbilgilerim.php?durum=Kullanici-kaydi-yapildi");
                  exit();
                }
                else{
                  header("Location:index.php?durum=Kullanici-kaydi-yapilamadi");
                  exit();
                }
        }

}
else{
  echo"Kulalnici adı ve sifer bos";
  header("Location:uyeguncelle.php?durum=alanlardan-biri-bos");
            exit();
}

$VeritabaniBağlantisi   =   null;
ob_end_flush();//Çıktı tamponlarını kapatmak için kullanıyoruz



?>