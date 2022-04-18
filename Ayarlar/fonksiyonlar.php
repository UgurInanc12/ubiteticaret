
<?php

$IPAdresi     =   $_SERVER["REMOTE_ADDR"];
$ZamanDamgasi = time();
$TarihSaat    = date("d.m Y H:i:s",$ZamanDamgasi);

function TarihBul($Deger){//17.08,2021
  $Cevir    =   date("d.m Y H:i:s",$Deger);
  $Sonuc    =   $Cevir;
  return $Sonuc;

}


?>