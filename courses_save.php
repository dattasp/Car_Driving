<?php
$sql=mysqli_connect('localhost','root','','driving');

$query="INSERT INTO courses(courses_type, name, mobile, email, cdate) VALUES ('".$_POST['courses_type']."','".$_POST['name']."','".$_POST['mobile']."','".$_POST['email']."','".date('Y-m-d')."')";
$q=mysqli_query($sql,$query);
if($q){
header('location:courses.php');
}
else{
	echo "not inserted";
}

?>