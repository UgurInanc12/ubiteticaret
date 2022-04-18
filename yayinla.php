<?php
session_start();
ob_start();
$UyeMail = $_SESSION["Kullanici"];
echo $UyeMail;
try {
    $db = new PDO('mysql:host=localhost;dbname=ubiteticaret', 'root', '');
    $db->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}


$ilan_baslik = $_POST['ilan_isim'];
$ilan_aciklama = $_POST['ilan_aciklama'];
$seri_id = $_POST['arac_seri'];
$marka_id = $_POST['arac_marka'];
$arac_yili = $_POST['arac_yili'];
$kilometre = $_POST['kilometre'];
$beygir = $_POST['beygir'];
$model = $_POST['model'];
$ilan_tarihi = date("Y-m-d H:i:s");
$yakit = $_POST['arac_yakit'];
$renk = $_POST['renk'];
$fiyat = $_POST['fiyat'];


$yakit_turu = $db->query("SELECT * FROM tbl_yakit WHERE ID=$yakit")->fetch();
$yakiti = $yakit_turu['yakit_turu'];

$marka_turu = $db->query("SELECT * FROM tbl_arac WHERE ID=$marka_id")->fetch();
$markasi = $marka_turu['Marka'];

$seri_turu = $db->query("SELECT * FROM tbl_seri WHERE ID=$seri_id")->fetch();
$serisi = $seri_turu['Model'];


$uyeID = $db->query("SELECT * FROM tbl_users WHERE Mail='$UyeMail'")->fetch();
$uye = $uyeID['ID'];


$zaman = date('Y-m-d H:i:s');


$db->exec("INSERT INTO ilanlar (UyeID, IlanFiyat, IlanMarka, IlanTarihi, IlanSeri, IlanModel, IlanYil, IlanYakit, IlanKm, IlanRenk, IlanBasligi ) VALUES ($uye, $fiyat, '$markasi', '$zaman', '$serisi', '$model', $arac_yili, '$yakiti', $kilometre, '$renk', '$ilan_baslik' )");


$countfiles = count($_FILES['fileUp']['name']);

for ($i = 0; $i < $countfiles; $i++) {
    $kaynak = $_FILES["fileUp"]["tmp_name"][$i];
    $filename = $_FILES['fileUp']['name'][$i];

    $ad = $_FILES["fileUp"]["name"][$i];

    $hedef = "uploads";

    $kaydet = move_uploaded_file($kaynak, $hedef . "/" . $ad);
}
ob_end_flush();//Çıktı tamponlarını kapatmak için kullanıyoruz
header("Location:index.php?durum=basarili");
exit();