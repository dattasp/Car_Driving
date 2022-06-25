<?php 
$conn=mysqli_connect('localhost','root','','driving');

// form
$username=$_POST['username'];
$password=$_POST['password'];

// db
include "connection.php";
$query="SELECT * FROM user";
$row=mysqli_query($conn,$query);
$data=mysqli_fetch_assoc($row);
$username1=$data['username'];
$password1=$data['password'];
if($username==$username1 && $password==$password1){
	header('location:index.php');
}
else{
	header('location:login.php');
}
?>