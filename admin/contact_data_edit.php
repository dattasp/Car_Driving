<?php 
include 'connection.php';
$query='SELECT * from contact where id="'.$_GET['id'].'"';
$fir=mysqli_query($conn,$query);
$data=mysqli_fetch_assoc($fir);
// print_r($data);
?>

<?php 
include "head.php";
?>
<form action="contact_data_edit_save.php" method="post">
<div class="container">
<div class="row">
<div class="col-md-6">
	<label>Name</label>
	<input type="hidden" name="id" value="<?=$data['id'];?>" class="form-control">
	<input type="text" name="name" value="<?=$data['name'];?>" class="form-control">
</div>
<div class="col-md-6">
	<label>Mobile</label>
	<input type="text" name="mobile" value="<?=$data['mobile'];?>" class="form-control">
</div>
<div class="col-md-6">
	<label>email</label>
	<input type="text" name="email" value="<?=$data['email'];?>" class="form-control">
</div>
<div class="col-md-6">
	<label>subject</label>
	<input type="text" name="subject" value="<?=$data['subject'];?>" class="form-control">
</div>
<div class="col-md-12">
	<label>message</label>
	<input type="text" name="message" value="<?=$data['message'];?>" class="form-control">
</div>
<div class="col-md-12 text-center mt-3">
	<button class="btn btn-warning">Save</button>
</div>
</div>
</div>
</form>

<?php 
if (isset($_POST['name'])) {
$query='UPDATE `contact` SET ,`name`="'.$_POST['name'].'",`mobile`="'.$_POST['mobile'].'",`email`="'.$_POST['email'].'",`subject`="'.$_POST['subject'].'",`message`="'.$_POST['message'].'" WHERE `id`="'.$_POST['id'].'"';
$row=mysqli_query($conn,$query);
if($row){
	echo 'ok';
header('location:contact_data.php');
}
}
?>