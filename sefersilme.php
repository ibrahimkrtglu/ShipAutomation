<?php 
include 'baglan.php';       //DATABASEDEN VERİ ÇEKECEK OLAN PHP SAYFASINA BAĞLAN2.PHP İ İNCLUDE ETME İŞLEMİ
 ?>

<?php 

include '/headers/sefersilmeheader.php';



 ?>
           

<?php

if(!isset($_SESSION['admin_kadi'])) {
    header("Location:login.php");
}
?>﻿ 
            <div class="container">
           
              
            <table>
                <tr>
                    <th>Nereden</th>
                    <th>Nereye</th>
                    <th>Sefer NO</th>
                    <th>Tarih</th>
                    <th>Saat</th>
                    <th>Gime_ID</th>
                    <th>kapasite</th>
                    <th>Sil</th>
                </tr>
                 <?php 
            
            $sefersorgu=mysql_query("select * from sefer ");
            while ( $sefercek=mysql_fetch_assoc($sefersorgu)) {
              
            
            ?>
                <tr>
                    <td><?php echo $sefercek['sefer_from']; ?></td>
                    <td><?php echo $sefercek['sefer_to']; ?></td>
                    <td><?php echo $sefercek['sefer_no']; ?></td>
                    <td><?php echo $sefercek['sefer_tarih']; ?></td>
                    <td><?php echo $sefercek['sefer_saat']; ?></td>
                    <td><?php echo $sefercek['sefer_gemiid']; ?></td>
                    <td><?php echo $sefercek['sefer_kapasite']; ?></td>
                    <form action="islem.php" method="POST">
                    <input type="hidden" name="sefer_id" value="<?php echo $sefercek['sefer_id']; ?>">
                    <td><input name="sefersil" style="margin-left:70px;" type="submit" value="Sil"></td>
                </form>
                </tr>
                 <?php } ?> 
                </table>
            
           </div>


          <?php 

include '/headers/footer.php';



 ?>
    </body>
</html>
