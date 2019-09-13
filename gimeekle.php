
<?php 

include '/headers/gemiekleheader.php';



 ?>

 <?php

if(!isset($_SESSION['admin_kadi'])) {
    header("Location:login.php");
}
?>﻿
            <div class="container" style="border: #162541 solid 15px; background-color:#FF4157; width:380px; height:450px;
            padding:0px; ">
                <div style="width:100%; background-color:#162541; height:50px; color:white;"><h4 align="center" style="padding:10px;">VAPUR EKLE</h4></div>
                                     
                    <div class="container">
                    <form action="islem.php" method="post">
                        <label for="fname" style="margin-left:15px;">Gemi Adı</label>
                        <label for="fname" style="margin-left:185px;">IMO</label> 

                        <br />
                        <input type="text" size="20px" required="" name="gemi_adi">
                        <input type="text" required="" name="gemi_imo">  
                        <br />
                        <label for="fname" style="margin-left:15px;">Resim Path</label>
                        <label for="fname" style="margin-left:125px;">Yapım yılı</label>
                        <br />
                        
                        <input type="text" required="" name="gemi_resimpath">            
                        <input type="text" required="" name="gemi_yapimyili"> 
                        <br />                        

                        <label for="No" style="margin-left:15px;">Yapım yeri</label>
                        <label for="Kno" style="margin-left:135px;">Uzunluk</label>
                        <br />
                        <input type="text" required="" name="gemi_yapimyeri">                         
                        <input type="text" required="" name="gemi_uzunluk">                        
                        <br />   
                        

                        <label for="Tarih" style="margin-left:15px;">Genişlik</label>
                        <label for="Saat" style="margin-left:90px;">Yolcu Kapasitesi</label>
                        <br />
                        <input type="text" required="" name="gemi_genislik">                         
                        <input type="text" required="" name="gemi_kapasite">                        
                        <br />    
                        
                        
                                           
                        <input name="gemiekle" style="margin-left:70px;" type="submit" value="GEMİ EKLE">
                    </form>
                </div>
            </div>


         <?php 

include '/headers/footer.php';



 ?>


            <!--back to top-->
            <a style="display: none;" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
                <span><i aria-hidden="true" class="fa fa-angle-up fa-lg"></i></span>
                <span>Top</span>
            </a>

        </div>
        
    </body>
</html>
