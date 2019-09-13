
<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
$q = $_GET['q'];

$con = mysqli_connect('localhost','root','12345678','ido');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT DISTINCT(sefer_to) FROM sefer WHERE sefer_from ='{$q}'";
$result = mysqli_query($con,$sql);

echo " <select name='to'  style='margin-left:15px;' onchange='getdate( \"" . str_replace('"', '\"', $q) . "\",this.value)'><option>Nereye</option>";


while($row = mysqli_fetch_array($result)) {
    
   
    ?>
        <option value="<?php echo"{$row['sefer_to']}";?>">  <?php echo"{$row['sefer_to']}";?> </option>
    <?php
   
}
echo"</select>";

mysqli_close($con);
?>
</body>
</html> 