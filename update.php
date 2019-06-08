<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
function test_input($data)
{ 
  $data=stripcslashes($data);
  $data=trim($data)	;
  $data=htmlspecialchars($data);
  return $data;
}
$con = mysqli_connect("localhost","root","");                                                            
if($con)
echo mysqli_error($con);
$db= mysqli_select_db($con,"mydb");
if(isset($_POST['na']) && isset($_POST['nu']) && isset($_POST['loc']) && isset($_POST['pa']))
{
$newname=$_POST['na'];
$changenumber=$_POST['nu'];  
$changelocation=$_POST['loc'];
$changepassword=$_POST['pa'];
$query="INSERT INTO settings VALUES ('$newname','$changenumber','$changelocation','$changepassword')";
$res=mysqli_query($con,$query);
if($res)
	echo "SUCCESSFULLY UPDATED";
else
	echo mysqli_error($con);
} 
}
?>
