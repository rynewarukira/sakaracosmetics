<html>

<head>
	<title>contact us</title>
</head>
<body>
	<?php  include('includes/header.php');?>

<p align="left"><font size="08" color="purple">THANK YOU FOR VISITING KYLIE COSMETICS.</font></p>

<img src="ryne.jpg"  align="left" height="400" width="400">
<P align="right"><font size="06" color="red">     SAKARA COSMETICS</font></P></P>
<P align="right"><font size="06" color="red">    1600 WESTAR DRIVE</font></P>
<P align="right"><font size="06" color="red">   OXNARD,CA 93033</font></P>
<P align="right"><font size="06" color="red">      CALL<font size="06" color="black">+2547567869 </font></font></P>
<P align="right"><font size="06" color="red">      EMAIL<font size="06" color="black">sakaracosmetics.ac.ke </font></font></P>
<P align="right"><font size="06" color="red">      FACEBOOK<font size="06" color="black">sakaracosmetics </font></font></P>
<P align="right"><font size="06" color="red">      TWITTER<font size="06" color="black">sakara_cosmetics</font></font></P>




<P align="left"><font size="10" color="blue">REACH US.</font></P>
<img src="chi.jpg"  align="right" height="400" width="400">
<form action="" method="post">
<Table>
 <tr><td><label>NAME*</label></td><td><div class="input-group">
<input type="text" name="na" id="admno" required="required" /><br/><br /></div></td></tr>
<tr><td><label>EMAIL ADDRESS</label></td><td><div class="input-group">
<input type="text" name="ema" id="name" required="required" /><br /><br /></div></td></tr>
<tr><td><label>MESSAGE</label></td><td><div class="input-group">
<textarea name="mess"></textarea><id="stream" required="required" /><br/><br /></div></td></tr>
<tr><td colspan="2"><input type="submit" value=" SUBMIT " name="submit"/><br /></td></tr>
</Table>
</form>
</center>
</div>
	<p align="right"><font size="08" color="white">SAKARA COSMETICS</font></p>
	<P align="right"><font size="08" color="blue">DON'T MISS OUT!.</font></P>
<!-- Right side div -->
<div id="formget">
</div>

</div>

<?php
if(isset($_POST["submit"])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO ryne (na,ema,mess)
VALUES ('".$_POST["na"]."','".$_POST["ema"]."','".$_POST["mess"]."')";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();
}
?>
</body>
</html>
