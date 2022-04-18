<?php
require_once("Ayarlar/ayarlar.php");
require_once("Ayarlar/fonksiyonlar.php");
session_start();//kullanıcı sitemize girdiğinde tanımak için session ve ob_start yapıyoruz
ob_start();
if(isset($_POST["Email"])){
  $GelenEmail   =   $_POST["Email"] ; 
}
else{
  $GelenEmail   = "";
}
if(isset($_POST["Sifre"])){
  $GelenSifre   =   $_POST["Sifre"]  ;
}
else{
  $GelenSifre   = "";
}
if($GelenSifre!="" and $GelenEmail!=""){
        $UyeSorgusu = $VeritabaniBaglantisi->prepare("SELECT * FROM tbl_users WHERE Mail=? AND Password=?");
        $UyeSorgusu->execute([$GelenEmail,$GelenSifre]);
        $UyeSorgusuSayisi   =   $UyeSorgusu->rowCount();
      if($UyeSorgusuSayisi>0){
        
        $_SESSION["Kullanici"]=$GelenEmail;
        echo $_SESSION["Kullanici"]."</br>";
        echo "Giriş Başarılı";
            header("Location:index.php?durum=basarili");
            exit();
      }
      else{
         echo "Kullanici adı veya şifre yanlış";
          header("Location:index.php?durum=Kullanici-adı-veya-sifre-yanlıs");
            exit();
      }
}
else{
  echo"Kulalnici adı ve sifer bos";
  header("Location:index.php?durum=Kulalnici-adı-ve-sifer-bos");
            exit();
}
$VeritabaniBağlantisi   =   null;
ob_end_flush();//Çıktı tamponlarını kapatmak için kullanıyoruz
?>