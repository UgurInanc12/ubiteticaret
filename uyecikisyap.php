<?php
session_start();//kullanıcı sitemize girdiğinde tanımak için session ve ob_start yapıyoruz
ob_start();
unset($_SESSION["Kullanici"]);//kullalnıcı sesionuunu yo k ediyoruz.
session_destroy();//bütün açık sesionları siliyoruz
header("Location:index.php");
exit();
ob_end_flush();//Çıktı tamponlarını kapatmak için kullanıyoruz
?>