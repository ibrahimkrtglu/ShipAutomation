
<!DOCTYPE html>
<html>
<head>

</head>
<body>


<?php 
$n = $_GET['from'];
$f = $_GET['to'];
$con =mysqli_connect('localhost', 'root', '12345678','ido'); 

if (!$con) {
    die('Could not connect: ' .  mysqli_error());
}

mysqli_select_db($con,'test');
$query="SELECT sefer_tarih FROM sefer WHERE sefer_from ='{$n}' AND sefer_to = '{$f}'";
$result=mysqli_query($con,$query);

?>

<?php echo"<select  name='date' onchange='gettime( \"" . str_replace('"', '\"', $n) . "\",\"" . str_replace('"', '\"', $f) . "\",this.value)'>";?>
<option>Tarih</option>
<?php while($row=mysqli_fetch_array($result)) { ?>
<option  value="<?php echo"{$row['sefer_tarih']}";?>"><?php echo"{$row['sefer_tarih']}";?></option>
<?php } ?>
</select>

<?php 
    mysqli_close($con);
?>

</body>
</html> 