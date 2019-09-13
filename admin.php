<?php 

include '/headers/adminheader.php';
?>

<?php

if(!isset($_SESSION['admin_kadi'])) {
    header("Location:login.php");
}
?>﻿
            <div class="container">
           
            <a href="sefersilme.php" class="l" role="button">Sefer Silme</a>
            <a href="seferekle.php" class="l" role="button">Sefer Ekle</a>
            <a href="gimeekle.php" class="l" role="button">Vapur Ekle</a>
            <a href="gimesilme.php" class="l" role="button">Vapur Silme</a>
            <a href="personelekle.php" class="l" role="button">Personel Ekle</a>
            <a href="personelsilme.php" class="l" role="button">Personel Silme</a>
           
           
           </div>


          <?php 

include '/headers/footer.php';



 ?>
        
    </body>
</html>
