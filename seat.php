
<!DOCTYPE html>
<html>
<head>

       
</head>
<body>


<?php 
$n = $_GET['from'];
$f = $_GET['to'];
$d = $_GET['date'];
$t = $_GET['time'];
$con =mysqli_connect('localhost', 'root', '12345678','ido'); 

if (!$con) {
    die('Could not connect: ' .  mysqli_error());
}

mysqli_select_db($con,'test');
$query="SELECT sefer_id, jseats.seatno FROM sefer,jseats WHERE sefer_from ='{$n}' AND sefer_to = '{$f}' AND sefer_tarih='{$d}' AND sefer_saat='{$t}' AND sefer_id = jseats.id AND jseats.state=1";
// $query="SELECT j.jid, jseats.seatno FROM j,jseats WHERE jfrom ='{$n}' AND jto = '{$f}' AND jdate='{$d}' AND jtime='{$t}' AND j.jid = jseats.jid ";
$result=mysqli_query($con,$query);

?>

<select name="seat" style="margin-left:70px;" >
<option>Koltuk</option>
<?php while($row=mysqli_fetch_array($result)) {
    $seferno = $row[0]; ?>
<option  value="<?php echo"{$row[1]}";?>"><?php echo"{$row[1]}";?></option>

<?php } 
    
?>
</select>
<input type="hidden" name="seferno" value="<?php echo"{$seferno}";?>">
<?php 
    mysqli_close($con);
?>

</body>
</html> 