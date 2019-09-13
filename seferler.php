<?php 
include 'baglan.php';       //DATABASEDEN VERİ ÇEKECEK OLAN PHP SAYFASINA BAĞLAN2.PHP İ İNCLUDE ETME İŞLEMİ
 ?>
<?php 

include '/headers/seferlerheader.php';



 ?>
            <div class="container">
           


                <table>
                <tr>
                    <th>Nerden</th>
                    <th>Nereye</th>
                    <th>Sefer NO</th>
                    <th>Tarih</th>
                    <th>Saat</th>
                    <th>Gime_ID</th>
                    <th>kapasite</th>
                </tr>
                <?php 

            $sefersorgu=mysql_query("select * from sefer");
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
                </tr>
                 <?php } ?> 
                </table>
            </div>
            <!-- end seferler -->
          
       <?php 

include '/headers/footer.php';



 ?>