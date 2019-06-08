<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
function test_input($data)
{ 
  $data=stripcslashes($data);
  $data=trim($data);
  $data=htmlspecialchars($data);
  return $data;
}
$con = mysqli_connect("localhost","root","");                                                            
if($con)
echo mysqli_error($con);
$db= mysqli_select_db($con,"mydb");
if(isset($_POST['uname']) && isset($_POST['up']) && isset($_POST['place']) && isset($_POST['uc']) && isset($_POST['add']))
{
$name=$_POST['uname'];
$password=$_POST['up'];
$location=$_POST['place'];
$contactno=$_POST['uc'];
$address=$_POST['add']; 
$query="INSERT INTO signin VALUES ('$name','$password','$location','$contactno','$address')";
$res=mysqli_query($con,$query);
if(!$res)
	echo mysqli_error($con);
}
}
?> 
<html>
<head><center><h1>FARMER'S HELPLINE</h1></HEAD><br>
	<br>
<BODY background=pic.jpg style="background-repeat:no-repeat;background-size:cover"><center>
<form action ="query.php" method="POST">
<label>SCHEMES:</label>
<select name="query">
<option>tractor loan</option>
<option>kisan credit card</option>
<option>agri gold</option>
<option>potato grower</option>
<option>fishing</option>
<option>akshay krishi</option>
<option>rural godowns or cold storages</option>
<option>agriculture land purchase</option>
<option>minor irrigation</option>                                      
<option>land development</option>
<option>clinic and agri business centre</option>
<option>mahila jyothi</option>
<option>solar off-grid and refinance</option>
</select><br><br>
LOCATION:<select name="loc"> <br><br>
<option>t-nagar</option>
<option>ambattur</option>
<option>madhavaram high road</option>
<option>villivakam</option>
<option>purasawalkam</option>
<option>arumbakkam</option>  
<option>jawahar nagar</option>
<option>vadapalani</option>
<option>ashok nagar</option>
<option>meenambakkam</option>
<option>adambakkam</option>
<option>kilpauk</option>
<option>saligramam</option>
</select> <br><br>
COMMENT SECTION:<input type="textarea" name="tex"/><br><br>
<a href="settings.html" class="btn btn-primary bt-xlarge" role="button">settings</a><br><br>
<INPUT TYPE="submit"/>
</FORM>
</HTML>
