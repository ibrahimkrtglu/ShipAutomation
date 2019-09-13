<!--Template Name: vacayhome
File Name: news.html
Author Name: ThemeVault
Author URI: http://www.themevault.net/
License URI: http://www.themevault.net/license/-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/icons/cruise.png"/>
        <title>IDO</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/odemestyle.css" rel="stylesheet">
        <link href="fonts/antonio-exotic/stylesheet.css" rel="stylesheet">
        <link rel="stylesheet" href="css/lightbox.min.css">
        <link href="css/responsive.css" rel="stylesheet">
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/lightbox-plus-jquery.min.js" type="text/javascript"></script>
        <script src="js/instafeed.min.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="page">
            <!---header top---->
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6"><div class="social-grid">
                                <ul class="list-unstyled text-right">
                                    <li><a><i class="fa fa-facebook"></i></a></li>
                                    <li><a><i class="fa fa-twitter"></i></a></li>
                                    <li><a><i class="fa fa-linkedin"></i></a></li>
                                    <li><a><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div></div>
                    </div>
                </div>
            </div>
            <!--header--->
            <header class="header-container">
                <div class="container">
                    <div class="top-row">
                        <div class="row">
                            <div class="col-md-2 col-sm-6 col-xs-6">
                                <div id="logo">
                                    <!--<a href="index.html"><img src="images/logo.png" alt="logo"></a>-->
                                    <a href="index.php"><span>IDO</span>Tur</a>
                                </div>                       
                            </div>
                            <div class="col-sm-6 visible-sm">
                                
                            </div>
                            <div class="col-md-8 col-sm-12 col-xs-12 remove-padd">
                                <nav class="navbar navbar-default">
                                    <div class="navbar-header page-scroll">
                                        <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>

                                    </div>
                                    <div class="collapse navigation navbar-collapse navbar-ex1-collapse remove-space">
                                        <ul class="list-unstyled nav1 cl-effect-10">

                                            <li><a data-hover="Anasyafa" href="index.php"><span>Anasyafa</span></a></li>
                                            <li><a data-hover="Bilet Al" href="biletal.php" class="active"><span>Bilet Al</span></a></li>                                           
                                            <li><a data-hover="Araçlar"  href="araclar.php"><span>Araçlar</span></a></li>
                                            <li><a data-hover="Personel"  href="personel.php"><span>Personel</span></a></li>
                                            <li><a data-hover="Hakkimzda"  href="about.php"><span>Hakkimzda</span></a></li>
                                            <li><a data-hover="Seferlerimiz" href="seferler.php"><span>Seferlerimiz</span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="col-md-2  col-sm-4 col-xs-12 hidden-sm">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!--end-->
            
<div class="row">
  <div class="col-75">
    <div class="container1">
      <form action="biletgoster.php" method="get">
            <input type="hidden" name="nereden" value="<?php echo"{$_GET['from']}";?>" >   
            <input type="hidden" name="nereye" value="<?php echo"{$_GET['to']}";?>" >   
            <input type="hidden" name="tarih" value="<?php echo"{$_GET['date']}";?>" >   
            <input type="hidden" name="saat" value="<?php echo"{$_GET['time']}";?>" >   
            <input type="hidden" name="koltuk" value="<?php echo"{$_GET['seat']}";?>" >   
            <input type="hidden" name="no" value="<?php echo"{$_GET['seferno']}";?>" >        
        <div class="row">
          <div class="col-50">
            <h3>Fatura Adresi</h3>
            <label for="fname"><i class="fa fa-user"></i> Ad </label>
            <input type="text" id="fname" name="firstname" value="hadi" placeholder="hadi kaz">
            <label for="lname"><i class="fa fa-user"></i>  Soyad</label>
            <input type="text" id="lname" name="lastname" value="kaz" placeholder="hadi kaz">
            <label for="email"><i class="fa fa-envelope"></i> E-Posta</label>
            <input type="text" id="email"  placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Adres</label>
            <input type="text" id="adr"  placeholder="542 Caddesi">
            <label for="city"><i class="fa fa-institution"></i> İlçe</label>
            <input type="text" id="city"  placeholder="Avcılar">

            <div class="row">
              <div class="col-50">
                <label for="state">Şehir</label>
                <input type="text" id="state"  placeholder="İstanbul">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip"  placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Ödeme</h3>            
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Kart Sahipi</label>
            <input type="text" id="cname" placeholder="John More Doe">
            <label for="ccnum">Credit card Numarası</label>
            <input type="text" id="ccnum"  placeholder="1111-2222-3333-4444">
            <label for="expmonth">Bitiş Tarih_ Ay</label>
            <input type="text" id="expmonth"  placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Bitiş Tarih_ Yıl</label>
                <input type="text" id="expyear"  placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv"  placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" > Gönderim adresi faturalandırma ile aynısı
        </label>
        <input type="submit"  value="SATIN AL" class="btn1">
      </form>
    </div>
  </div>
  
</div>


           <!--footer-->
           <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12 width-set-50">
                            <div class="footer-details">
                                <h4>İLETİŞİM</h4>
                                <ul class="list-unstyled footer-contact-list">
                                    <li>
                                        <i class="fa fa-map-marker fa-lg"></i>
                                        <p>Çağrı Merkezi Genel Müdürlük Kayıp Eşya Bize Yazın</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-phone fa-lg"></i>
                                        <p><a href="tel:0850 222 44 36"> 0850 222 44 36</a></p>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o fa-lg"></i>
                                        <p><a href="mailto:ido@info.com"> ido@info.com</a></p>
                                    </li>
                                </ul>
                                <div class="footer-social-icon">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>                           
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </div>
                                <div class="input-group" id="subscribe">
                                    <input type="text" class="form-control subscribe-box" value="" name="subscribe" placeholder="EMAIL ID">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn subscribe-button"><i class="fa fa-paper-plane fa-lg"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 width-50 width-set-50">
                            <div class="footer-details">
                                <h4>önemli bağlantılar</h4>
                                <ul class="list-unstyled footer-links">
                                    <li><a href="index.php">Anasyafa</a></li>
                                    <li href="about.php" class="active"><a>Hakkimzda</a></li>
                                    <li><a href="araclar.php">Araçlar</a></li>
                                    <li><a href="biletal.php">Bilet Al</a></li>
                                    <li><a href="personel.php">Personel</a></li>
                                    <li> <a href="seferler.php">Seferlerimiz</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                        
                    </div>

                    <div class="copyright">
                        &copy; İDO İstanbul Deniz Otobüsleri Sanayi ve Ticaret A.Ş. Tüm Hakları Saklıdır 2018 <a href="#" >IDO</a>
                    </div>

                </div>
            </footer>


            <!--back to top--->
            <a style="display: none;" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
                <span><i aria-hidden="true" class="fa fa-angle-up fa-lg"></i></span>
                <span>Top</span>
            </a>

        </div>
    </body>
</html>
