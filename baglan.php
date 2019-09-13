<?php
if (!@$baglanti=mysql_connect("localhost","root","12345678")){
    die("Mysql'e bağlantı kurulamadı!".mysql_error());
}
 
if (!@mysql_select_db("ido",$baglanti)){
    die("Veritabanına bağlantı kurulamadı!".mysql_error());        //BAĞLAN2.PHP ADLI PHP DOSYASI
}
?>﻿
