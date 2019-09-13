<?php 
ob_start();
session_start();
  ?>

<?php 
include 'baglan.php';       //DATABASEDEN VERİ ÇEKECEK OLAN PHP SAYFASINA BAĞLAN2.PHP İ İNCLUDE ETME İŞLEMİ

 

if(isset($_POST['seferekle'])) {
 $gemi_no=$_POST['sefer_gemiid'];
 $gemino_int=(int)$gemi_no;
$query = mysql_query("SELECT * FROM gemi WHERE gemi_imo='$gemino_int'");
    $write = mysql_fetch_array($query);
    $gemi_kapasite   = $write['gemi_kapasite'];
 
 $seferekle=mysql_query("insert into sefer (sefer_no,sefer_tarih,sefer_saat,sefer_gemiid,sefer_from,sefer_to,sefer_kapasite) VALUES('".$_POST['sefer_no']."','".$_POST['sefer_tarih']."','".$_POST['sefer_saat']."','".$_POST['sefer_gemiid']."','".$_POST['sefer_from']."','".$_POST['sefer_to']."','$gemi_kapasite')");
 
 $sefer_no=$_POST['sefer_no'];
 $seferno_int=(int)$sefer_no;
$query2 = mysql_query("SELECT * FROM sefer WHERE sefer_no='$seferno_int'");
    $write2 = mysql_fetch_array($query2);
    $sefer_id   = $write2['sefer_id'];
 
 $i=0;
 while ($i<$gemi_kapasite) {
 	$i=$i+1;
 	$koltukekle=mysql_query("insert into jseats (id,seatno,state) VALUES('$sefer_id','$i','1')") ;
 }

if(mysql_affected_rows())

{
header("Location:sefersilme.php?seferekle=ok");

}

else{

header("Location:sefersilme.php?seferekle=error");
}
}



if(isset($_POST['personelekle'])) {
 $personelekle=mysql_query("insert into personel (personel_ad,personel_soyad,personel_dogumtarih,personel_eposta,personel_gsm,personel_unvan) VALUES('".$_POST['personel_ad']."','".$_POST['personel_soyad']."','".$_POST['personel_dogumtarih']."','".$_POST['personel_eposta']."','".$_POST['personel_gsm']."','".$_POST['personel_unvan']."')");

if(mysql_affected_rows())

{
header("Location:personelsilme.php?personelekle=ok");

}

else{

header("Location:personelsilme.php?personelekle=error");
}
}





if(isset($_POST['sefersil'])) {
 $sefer_id=$_POST['sefer_id'];
 $sefersil=mysql_query("delete from sefer where sefer_id='$sefer_id'");
 $koltuksil=mysql_query("delete from jseats where id=$sefer_id");
if(mysql_affected_rows())

{
header("Location:sefersilme.php?sefersilme=ok");

}

else{

header("Location:sefersilme.php?sefersilme=error");
}
}




if(isset($_POST['personelsil'])) {
 $personel_id=$_POST['personel_id'];
 $personelsil=mysql_query("delete from personel where personel_id='$personel_id'");

if(mysql_affected_rows())

{
header("Location:personelsilme.php?personelsilme=ok");

}

else{

header("Location:personelsilme.php?personelsilme=error");
}
}



if(isset($_POST['gemiekle'])) {
 $gemiekle=mysql_query("insert into gemi (gemi_imo,gemi_yapimyili,gemi_yapimyeri,gemi_genislik,gemi_kapasite,gemi_uzunluk,gemi_adi,gemi_resimpath) VALUES('".$_POST['gemi_imo']."','".$_POST['gemi_yapimyili']."','".$_POST['gemi_yapimyeri']."','".$_POST['gemi_genislik']."','".$_POST['gemi_kapasite']."','".$_POST['gemi_uzunluk']."','".$_POST['gemi_adi']."','".$_POST['gemi_resimpath']."')");

if(mysql_affected_rows())

{
header("Location:gimesilme.php?gemiekle=ok");

}

else{

header("Location:gimesilme.php?gemiekle=error");
}
}




if(isset($_POST['gemisil'])) {
 $gemi_id=$_POST['gemi_id'];
 $gemisil=mysql_query("delete from gemi where gemi_id='$gemi_id'");

if(mysql_affected_rows())

{
header("Location:gimesilme.php?gemisilme=ok");

}

else{

header("Location:gimesilme.php?gemisilme=error");
}
}


if($_POST['admin_giris']){
$admin_kadi=$_POST['admin_kadi'];
$admin_sifre=md5($_POST['admin_sifre']);

if($admin_kadi && $admin_sifre){

	$sorgula=mysql_query("select * from admin where admin_kadi='$admin_kadi' and admin_sifre='$admin_sifre'");

	$verisay=mysql_num_rows($sorgula);

	if ($verisay>0) {
		$_SESSION['admin_kadi']=$admin_kadi;

		header("Location:admin.php");
	}

	else{
		header("Location:login.php?login=no");

	}
}

}



 ?>


