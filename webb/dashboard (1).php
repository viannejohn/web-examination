<?php
include ('connection.php');

$email = "";
$password="";
if(isset($_POST['submit'])){
// if clicked submit
$email = $_POST['email'];
$password = $_POST['password'];

  $sql = "INSERT into users (email,password) values ('$email','$password')";
  $res = mysqli_query($con, $sql);

  if($res){
    echo "successfully added";
  }else{
    die(mysqli_error($con));
  }
}

?>
<head>
<title>Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

 <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Dashboard</p>

 <ul class="nav flex-column bg-white mb-0">
   <li class="nav-item">
     <a href="dashboard.php" class="nav-link active text-dark font-italic bg-light">
               <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
               Home
           </a>
   </li>
   <li class="nav-item">
     <a href="" data-toggle="modal" data-target="#student" class="nav-link text-dark font-italic">
               <i class="fa fa-user-plus mr-3 text-primary fa-fw"></i>
               Register Students
           </a>
   </li>

 </ul>

 <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">REPORTS</p>

 <ul class="nav flex-column bg-white mb-0">
   <li class="nav-item">
     <a href="dashboard.php?v=sc/" class="nav-link text-dark font-italic">
               <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
               Students
           </a>
   </li>
  <li class="nav-item">
     <a href="#" class="nav-link text-dark font-italic">
               <i class="fa fa-ocket mr-3 text-primary fa-fw"></i>
           </a>
   </li>
  <li class="nav-item">
     <a href="#" class="nav-link text-dark font-italic">
               <i class="fa fa-ocket mr-3 text-primary fa-fw"></i>
           </a>
   </li>

  <li class="nav-item">
   <a href="#" class="nav-link text-dark font-italic">
     <i class="fa fa-rcket mr-3 text-primary fa-fw"></i>
     <?php
       $date = new DateTime('now', new DateTimeZone('Africa/Kampala'));
       echo $date->format('d-m-Y / H:i:s');
       //include("modals.php");
     ?>
   </a>
   </li>
 </ul>
</div>
<!-- End vertical navbar -->


<!-- Page content holder -->
<div class="page-content p-5" id="content" style="background:#fff;">

 <!-- Toggle button -->
 <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Toggle</small></button><button type="button" class="btn btn-light bg-white shadow-sm px-4 mb-4">UGANDA CHRISTIAN UNIVERSITY</button>
 <button type="button" style="float:right;" class="btn btn-light bg-white">
   <ul class="nav">
         <li><a href="logout.php">Logout</a></li>
   </ul>
</button>
<!-- Nav tabs -->
<ul class="nav nav-tabs" style="background:#EEE;">
 <li class="nav-item" style="background:#EEE;">
   <a class="nav-link" href="dashboard.php?v=/"></a>
 </li>
</ul>

<hr style="border:2px dashed #eee;">
 <div class="row">
   <div class="col-md-12">



 </div>
 <div class="col-lg-12">




</script>

<style>
.nav-tabs .nav-link {
   border: 1px solid transparent;
   border-top-left-radius: .25rem;
   border-top-right-radius: .25rem;
   COLOR: darkblue;
}

label{color:#000;}
th{color:grey;font-size:small;}
td{color:grey;font-size:small;}
h5{font-size:small;}
</style>

</body>
