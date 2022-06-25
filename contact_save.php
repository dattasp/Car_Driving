<?php 

$db=mysqli_connect('localhost','root','','driving');
 $query="INSERT INTO contact( name, mobile, email, subject, message, contact_date) VALUES ('".$_POST['name']."','".$_POST['mobile']."','".$_POST['email']."','".$_POST['subject']."','".$_POST['message']."','".date('Y-m-d')."')";
$row=mysqli_query($db,$query);
if($row){
	echo "<script>alert('Successfully data inserted');</script>";
	header('location:contact.php');
}
else{
	echo "not interted";
}
// insert 
// select 
// update 
// delete

?>