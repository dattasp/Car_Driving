<?php 
include "head.php";
include "nav.php";
?>
<div class="container-fluid">
<div class="row">
<div class="col-md-12 p-5">
<h2 class="text-center">Contact User List</h2>
<table class="table table-bordered">
<thead>
<tr>
<th>Sr.No.</th>
<th>Name</th>
<th>Email</th>
<th>Mobile</th>
<th>Subject</th>
<th>Description</th>
<th>Date</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php
include "connection.php";
$query="select * from contact";
$data=mysqli_query($conn,$query);
$i=1;
while ($row=mysqli_fetch_assoc($data)){
?>
<tr>
<td><?=$i++;?></td>
<td><?=$row['name'];?></td>
<td><?=$row['email'];?></td>
<td><?=$row['mobile'];?></td>
<td><?=$row['subject'];?></td>
<td><?=$row['message'];?></td>
<td><?=$row['contact_date'];?></td>
<td>
<a href="contact_data.php?delete_id=<?=$row['id'];?>">    <button class="btn btn-danger">Delete</button></a>
<a href="contact_data_edit.php?id=<?=$row['id'];?>"><button class="btn btn-warning">Edit</button></a>
</td>
</tr>
<?php 
}
?>
</tbody>
</table>
</div>
</div>
</div>
<?php
include "footer.php";
if(isset($_GET['delete_id'])){
$qu='DELETE FROM `contact` WHERE id="'.$_GET['delete_id'].'" ';
$row=mysqli_query($conn,$qu);
if($row){
    echo "success";
    echo "<script>window.location.href='contact_data.php';</script>";
}
else{
    echo "wrong";
}
}
?>
