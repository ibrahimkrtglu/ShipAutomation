
<!DOCTYPE html>
<html>
<head>

      
       
</head>
<body>


<?php 
$n = $_GET['from'];
$f = $_GET['to'];
$d = $_GET['date'];
$con =mysqli_connect('localhost', 'root', '12345678','ido'); 

if (!$con) {
    die('Could not connect: ' .  mysqli_error());
}

mysqli_select_db($con,'test');
$query="SELECT sefer_saat FROM sefer WHERE sefer_from ='{$n}' AND sefer_to = '{$f}' AND sefer_tarih='{$d}'";
$result=mysqli_query($con,$query);

?>
<?php echo"<select style='margin-left:15px;' name='time' onchange='getseat( \"" . str_replace('"', '\"', $n) . "\",\"" . str_replace('"', '\"', $f) . "\",\"" . str_replace('"', '\"', $d) . "\",this.value)'>";?>
<option>Saat</option>
<?php while($row=mysqli_fetch_array($result)) { ?>
<option  value="<?php echo"{$row['sefer_saat']}";?>"><?php echo"{$row['sefer_saat']}";?></option>
<?php } ?>
</select>

<?php 
    mysqli_close($con);
?>

</body>
</html> 