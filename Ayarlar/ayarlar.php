<?php
  $servername = "localhost";
  $username = "root";
  $password = "Ugutr,1998!";
  $dbname = "test";
try{
    //$Conn=new mysqli($servername, $username, $password, $dbname);
    $VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=ubitticaret;charset=UTF8","root","Ugutr,1998!");

} catch (PDOException $Hata) {
    echo 'Veritabani hatasi: ',  $Hata->getMessage(), "\n";
    die();//kodların akışını durdur
}

