<html>
<head>
<style>
.pager a {
  color: blue;
  float: bottom;
  padding: 8px 16px;
  text-decoration: none;
  border-radius:5px;
}
</style>
<center><br>
<h1 style="color:black">FARMER'S HELPLINE</h1><br>
</center>
</head>
<body background=neww.jpg style="background-repeat:no-repeat;background-size:cover">
<form action=login.php method="post">
<!--<img src="five.jpg" alt="good" align="left">-->
<div align="center"><br><br>
<label style="color:white">USER ID<br><input type="text" name=uid required/></label><br><br><br>
<label style="color:white">PASSWORD<br><input type="password" name="upass" required/></label><br><br>
<button type="submit">submit</button>

<?php
$con = mysqli_connect("localhost","root","");                                                           
if($con)
echo mysqli_error($con);                                                                                     
$db= mysqli_select_db($con,"mydb");  
if(isset($_POST['uid']) && isset($_POST['upass']))
{
    $name=$_POST['uid'];
    $pass=$_POST['upass'];
    if(!empty($_POST['uid']) && !empty($_POST['upass'])) 
    {
    $res=mysqli_query($con,"SELECT * FROM signin WHERE name='$name' AND password='$pass'"); 
    $numrows=mysqli_num_rows($res);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($res))  
    {  
    $dbusername=$row['name'];  
    $dbpassword=$row['password'];  
    } 
     if($name == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$name;  
  
    header("Location: account.html");  
    }  
    } 
    else 
    {  
    echo "<h4>Invalid username or password!</h4>";  
    }  
  
} 
else 
{  
    echo "All fields are required!";  
}    
}
?>
</form><br><br>
<center>
<a href="first.html">previous</a> 
</center>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<p style="background-color:rgba(99, 200, 71, 0.8);">
</P>  
</body>
</html> 
