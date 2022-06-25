<?php 
include 'connection.php';

if (isset($_POST['name'])) {
 $query='UPDATE `contact` SET `name`="'.$_POST['name'].'",`mobile`="'.$_POST['mobile'].'",`email`="'.$_POST['email'].'",`subject`="'.$_POST['subject'].'",`message`="'.$_POST['message'].'" WHERE `id`="'.$_POST['id'].'"';
$row=mysqli_query($conn,$query);
if($row){
header('location:contact_data.php');
}
}
?>