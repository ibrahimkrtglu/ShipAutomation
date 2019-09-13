<?php 

include '/headers/personelekleheader.php';



 ?>
<?php

if(!isset($_SESSION['admin_kadi'])) {
    header("Location:login.php");
}
?>﻿

            <div class="container" style="border: #162541 solid 15px; background-color:#FF4157; width:380px; height:450px;
            padding:0px; ">
                <div style="width:100%; background-color:#162541; height:50px; color:white;"><h4 align="center" style="padding:10px;">PERSONEL EKLE</h4></div>
                    <br />                   
                    <div class="container">
                    <form action="islem.php" method="POST">
                        <label for="fname" style="margin-left:15px;">Ad</label>
                        <label for="fname" style="margin-left:125px;">Soyad</label>
                        <br />
                        <input type="text" required="" name="personel_ad">            
                        <input type="text" required="" name="personel_soyad"> 
                        <br />              
                        <label for="Tarih" style="margin-left:15px;">doğum tarihi</label>
                        <label for="No" style="margin-left:45px;">GSM</label>  
                        <br />
                        <input type="date" required="" name="personel_dogumtarih">  
                                               
                        <input type="text" required="" name="personel_gsm">                        
                        <br />   
                        <label for="Kno" style="margin-left:15px;">Iş unvanı</label>
                        <label for="Saat" style="margin-left:70px;">E-posta</label>
                        <br />
                        <input type="text" required="" name="personel_unvan">                  
                        <input type="email" required="" name="personel_eposta">                        
                        <br /> 
                        <input name="personelekle" style="margin-left:70px;" type="submit" value="PERSONEL EKLE">
                    </form>
                </div>
            </div>


         <?php 

include '/headers/footer.php';



 ?>
        
    </body>
</html>
