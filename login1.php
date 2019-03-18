<?php
session_start();
$db=mysqli_connect('localhost','root','','registration');
if(!mysqli_select_db($db,'registration'))
{
echo "error:data base name";
}


$user=$_POST['username'];
$paswd=$_POST['password'];
$sql="select * from users where username='".$user."' AND password='".$paswd."' limit 1";
$res=mysqli_query($db,$sql);
if(mysqli_num_rows($res) == 1)
{
 echo "login  successful";
exit();
}
else
{
	echo "login unsuccessful";
exit();
}


?>