<?php
include('connection.php');

if(isset($_GET['deleteid'])){
$id = $_GET['deleteid'];
$query = "DELETE from users where id ='$id' ";
$result = mysqli_query($con,$query);
if($result){
header("location:display.php");
}
 else{
   die(mysqli_error($con));
 }
}



 ?>
