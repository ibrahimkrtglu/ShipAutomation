<?php 
include 'baglan.php';       //DATABASEDEN VERİ ÇEKECEK OLAN PHP SAYFASINA BAĞLAN2.PHP İ İNCLUDE ETME İŞLEMİ
 ?>
<?php 

include '/headers/personelheader.php';



 ?>
            <div class="container">
           
                <table>
                <tr>
                    <th>Ad</th>
                     <th>Soyad</th>
                    <th>doğum tarihi</th>
                    <th>E-posta</th>
                    <th>GSM</th>
                    <th>Iş unvanı</th>
                   
                </tr>


            <?php 

            $personelsorgu=mysql_query("select * from personel");
            while ( $personelcek=mysql_fetch_assoc($personelsorgu)) {
              
            
            ?>
                <tr>
                    <td><?php echo $personelcek['personel_ad']; ?></td>
                    <td><?php echo $personelcek['personel_ad']; ?></td>
                    <td><?php echo $personelcek['personel_dogumtarih']; ?></td>
                    <td><?php echo $personelcek['personel_eposta']; ?></td>
                    <td><?php echo $personelcek['personel_gsm']; ?></td>
                    <td><?php echo $personelcek['personel_unvan']; ?></td>
                    
                </tr>
            <?php } ?>      
                </table>
       </div>

          <?php 

include '/headers/footer.php';



 ?>