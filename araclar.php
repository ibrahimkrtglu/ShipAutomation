<?php 
include 'baglan.php';       //DATABASEDEN VERİ ÇEKECEK OLAN PHP SAYFASINA BAĞLAN2.PHP İ İNCLUDE ETME İŞLEMİ
 ?>
<?php 

include '/headers/araclarheader.php';



 ?>


          
            <section class="image-head-wrapper" style="background-image: url('images/c6.jpg'); height:850px;">
                <div class="inner-wrapper">
                  
                </div>
            </section>
            
            <div class="clearfix"></div>
           
            <section class="resort-overview-block">
                <div class="container">
                    <div class="row">
                <?php 

            $aracsorgu=mysql_query("select * from gemi");
            while ( $gemicek=mysql_fetch_assoc($aracsorgu)) {
              
             ?>
                    <!-- php code for displaying ships-->
                        <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                            <div class="side-A">
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="http://www.sehirhatlari.istanbul/tr/vapurlar.html"><img style="padding:5px;" alt="image"  height="250" width="250" src="<?php echo $gemicek['gemi_resimpath']; ?> " ></a>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="side-B">
                                <div class="product-desc-side">
                                    <h3><a href="http://www.sehirhatlari.istanbul/tr/vapurlar.html">Adı:<?php echo $gemicek['gemi_adi']; ?></a></h3>
                                    <h5><a href="http://www.sehirhatlari.istanbul/tr/vapurlar.html">IMO:<?php echo $gemicek['gemi_imo']; ?></a></h5>
                                    <h5><a href="http://www.sehirhatlari.istanbul/tr/vapurlar.html">Yapım Yılı:<?php echo $gemicek['gemi_yapimyili']; ?> </a></h5>
                                    <h5><a href="http://www.sehirhatlari.istanbul/tr/vapurlar.html">Yapım Yeri:<?php echo $gemicek['gemi_yapimyeri']; ?> </a></h5>
                                    <h5><a href="http://www.sehirhatlari.istanbul/tr/vapurlar.html">Uzunluk:<?php echo $gemicek['gemi_uzunluk']; ?>m </a></h5>
                                    <h5><a href="http://www.sehirhatlari.istanbul/tr/vapurlar.html">Genişlik:<?php echo $gemicek['gemi_genislik']; ?>m </a></h5>
                                    <h5><a href="http://www.sehirhatlari.istanbul/tr/vapurlar.html">Yolcu Kapasitesi:<?php echo $gemicek['gemi_kapasite']; ?> </a></h5>

                                    
                                </div>
                            </div>
                           
                        </div>
                        <?php } ?> 
                        <div class="clear"></div>   
                        
                        
                        <!-- end ship -->
                        <div class="clearfix"></div>

                        

                    </div>
                </div>
            </section>

          

           <?php 

include '/headers/footer.php';



 ?>