<?php
session_start();
$db=mysqli_connect('127.0.0.1','root','','registration');
if(!$db)
{
echo "not conneced";
}
if(!mysqli_select_db($db,'registration'))
{
echo "not selected data base";
}
$name=$_POST['name'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];
$pan=$_POST['pan'];
$pass=$_POST['pass'];
$sql="INSERT INTO register(name,dob,gender,mobile,email,password,pan,pass) VALUES('$name','$dob','$gender','$mobile','$email','$password','$pan','$pass')";
if(!mysqli_query($db,$sql))
{
echo "server not working";
}
header("refresh:2;url=newcustomer.html");
?>