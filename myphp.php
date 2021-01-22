<?php

$insert = false;
$update = false;
$delete = false;

$usrname = $_POST["usrname"];
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$con = new mysqli("localhost","root","","register");

if(!$con){
    die("Sorry we failed to connect :". mysqli_connect_error());

}


if(isset($_POST["insert"]))
{
    $add = "INSERT INTO reg (Username , Name , Email , Password) VALUES('$usrname','$name','$email','$password')";
    if($con->query($add)==True)
    {
       $insert = true;
       
    }
    else{
        echo "Error".$con->error;
    }
}

elseif(isset($_POST["update"])){
    $upd = "UPDATE reg SET password ='$name' WHERE Name = '$name'";
    if($con->query($upd)==True)
    {
       $update = true;
       echo "Table updated";
    }
    else{
        echo "Error".$con->error;
    }

}

elseif(isset($_POST["delete"])){
    $del = "DELETE from reg WHERE Name = '$name'";
    if($con->query($del)==True)
    {
        $delete = true;
        echo "Record deleted";
    }
    else{
        echo "Error".$con->error;
    }

}






?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
	      <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" /> 
    </head>
<body>

<div class="container text-uppercase text-center mt-3">
<h1 class="font-weight-bold">Records</h1>
<hr class="w-25 mx-auto">
</div>
<table class="table table-striped table-hover table-bordered text-center mt-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Username</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  
  if(isset($_POST["insert"]))
    {
        $select = "SELECT * FROM reg";
        $result = $con->query($select);
        $sno = 0;
        while($row = mysqli_fetch_array($result))
           {
               $sno = $sno + 1;
               echo "<tr>
               <th scope='row'>".$row['sno']."</th>
               <td>".$row['Username']."</td>
               <td>".$row['Name']."</td>
               <td>".$row['Email']."</td>
             </tr>";            
	          
            }
    }

    elseif(isset($_POST["view"]))
    {
        $select = "SELECT * FROM reg";
        $result = $con->query($select);
        $sno = 0;
        while($row = mysqli_fetch_array($result))
           {
               $sno = $sno + 1;
               echo "<tr>
               <th scope='row'>".$row['sno']."</th>
               <td>".$row['Username']."</td>
               <td>".$row['Name']."</td>
               <td>".$row['Email']."</td>
             </tr>";            
	          
            }
    }


    $con->close();


?>
    
    
  </tbody>
</table>




</body>
</html>
