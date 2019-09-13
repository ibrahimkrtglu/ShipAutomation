<?php 
include 'baglan.php';       //DATABASEDEN VERİ ÇEKECEK OLAN PHP SAYFASINA BAĞLAN2.PHP İ İNCLUDE ETME İŞLEMİ
 ?>
<?php 

include '/headers/gemisilheader.php';



 ?>

 <?php

if(!isset($_SESSION['admin_kadi'])) {
    header("Location:login.php");
}
?>﻿
            <div class="container">
            <table>
                <tr>
                    <th>Gemi Adı</th>
                    <th>IMO</th>
                    <th>Yapım yılı</th>
                    <th>Yapım yeri</th>
                    <th>Uzunluk</th>
                    <th>Genişlik</th>
                    <th>Yolcu Kapasitesi</th>
                    <th>Sil</th>
                </tr>

                <?php 
            
            $gemisorgu=mysql_query("select * from gemi ");
            while ( $gemicek=mysql_fetch_assoc($gemisorgu)) {
              
            
            ?>

                <tr>
                    <td><?php echo $gemicek['gemi_adi']; ?></td>
                    <td><?php echo $gemicek['gemi_imo']; ?></td>
                    <td><?php echo $gemicek['gemi_yapimyili']; ?></td>
                    <td><?php echo $gemicek['gemi_yapimyeri']; ?></td>
                    <td><?php echo $gemicek['gemi_uzunluk']; ?></td>
                    <td><?php echo $gemicek['gemi_genislik']; ?></td>
                    <td><?php echo $gemicek['gemi_kapasite']; ?></td>
                    <form action="islem.php" method="POST">
                    <input type="hidden" name="gemi_id" value="<?php echo $gemicek['gemi_id']; ?>">
                    <td><input name="gemisil" style="margin-left:70px;" type="submit" value="Sil"></td>
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
