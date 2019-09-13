<?php 
include 'baglan.php';       //DATABASEDEN VERİ ÇEKECEK OLAN PHP SAYFASINA BAĞLAN2.PHP İ İNCLUDE ETME İŞLEMİ
 ?>

<?php 

include '/headers/seferekleheader.php';



 ?>

<?php

if(!isset($_SESSION['admin_kadi'])) {
    header("Location:login.php");
}
?>﻿
  <?php 
$geminosorgula=mysql_query("select * from gemi");
   ?>


            <div class="container" style="border: #162541 solid 15px; background-color:#FF4157; width:380px; height:480px;
            padding:0px; ">
                <div style="width:100%; background-color:#162541; height:50px; color:white;"><h4 align="center" style="padding:10px;">SEFER EKLE</h4></div>
                    <br />                   
                    <div class="container">
                    <form action="islem.php" method="POST">
                        <label for="fname" style="margin-left:15px;">Nerden?</label>
                        <label for="fname" style="margin-left:105px;">Nereye?</label>
                        <br />
                        <input type="text" required="" name="sefer_from">            
                        <input type="text" required="" name="sefer_to"> 
                        <br />                        

                        <label for="No" style="margin-left:15px;">Sefer No</label>
                        <label for="Tarih" style="margin-left:105px;">Tarih</label>
                        <br />
                        <input type="text" required="" name="sefer_no">                         
                        <input type="date" required="" name="sefer_tarih">

                        <br />   
                        

                        <label for="GID" style="margin-left:15px;">GEMİ NO</label>
                        <label for="Saat" style="margin-left:110px;">Saat</label>
                        <br />
                        <select  id="sefer_gemiid" name="sefer_gemiid">
                            <?php while ($row1=mysql_fetch_array($geminosorgula)) {
                            ?>
                        <option value="<?php echo $row1[1]; ?>"><?php echo $row1[1]; ?></option>

                        <?php } ?> 
                        </select>

                        <input type="time" required="" name="sefer_saat">                        
                        <br />    
                        
                        
                        
                       
                        <input name="seferekle" style="margin-left:70px;" type="submit" value="SEFER EKLE">
                        
                    </form>
                </div>
            </div>


          <?php 

include '/headers/footer.php';



 ?>
        
    </body>
</html>
