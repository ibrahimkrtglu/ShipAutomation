<?php 
include 'baglan.php';       //DATABASEDEN VERİ ÇEKECEK OLAN PHP SAYFASINA BAĞLAN2.PHP İ İNCLUDE ETME İŞLEMİ
 ?>
<?php 

include '/headers/personelsilmeheader.php';



 ?>

 <?php

if(!isset($_SESSION['admin_kadi'])) {
    header("Location:login.php");
}
?>﻿
            <div class="container">
           
                <table>
                <tr>
                    <th>Ad</th>
                    <th>Soyad</th>
                    <th>doğum tarihi</th>
                    <th>E-posta</th>
                    <th>GSM</th>
                    <th>Iş unvanı</th>
                    <th>Sil</th>
                   
                </tr>
                 <?php 
            
            $personelsorgu=mysql_query("select * from personel ");
            while ( $personelcek=mysql_fetch_assoc($personelsorgu)) {
              
            
            ?>
                <tr>
                    <td><?php echo $personelcek['personel_ad']; ?></td>
                    <td><?php echo $personelcek['personel_soyad']; ?></td>
                    <td><?php echo $personelcek['personel_dogumtarih']; ?></td>
                    <td><?php echo $personelcek['personel_eposta']; ?></td>
                    <td><?php echo $personelcek['personel_gsm']; ?></td>
                    <td><?php echo $personelcek['personel_unvan']; ?></td>
                   <form action="islem.php" method="POST">
                    <input type="hidden" name="personel_id" value="<?php echo $personelcek['personel_id']; ?>">
                    <td><input name="personelsil" style="margin-left:70px;" type="submit" value="Sil"></td>
                </form>
                    
                </tr>
                 <?php } ?> 
                </table>
       </div>
<?php 

include '/headers/footer.php';



 ?>