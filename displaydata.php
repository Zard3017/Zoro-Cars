<?php
include_once("template/nav.php");
require_once("include/connect.php");
include_once ("template/links.php");
 
if(isset($_GET["DelId"])){
  $DelId = mysqli_real_escape_string($conn, $_GET["DelId"]);

  $delete_message = "DELETE FROM registration WHERE id='$DelId'";

  if ($conn->query($delete_message) === TRUE) {
      header("Location: displaydata.php");
  } else {
      echo "Error updating record: " . $conn->error;
  }
}    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>
<body>
    <div class="container">
    <button class="btn btn-primary" ><a href="contact.php" class="text-light">Add User</a></button>

    <table class="table">
  <thead>
    <tr>
      
      <th >Fullname</th>
      <th >Email</th>
      <th >Phone</th>
      <th >Address</th>
      <th >Created At</th>
      <th >Operation</th>
    </tr>
  </thead>
  <tbody>

  <?php

  $selectdata= "SELECT * FROM registration ";
  $sel_mes_res= $conn->query($selectdata);

  if($sel_mes_res->num_rows> 0 ){
    //output data for each row
    while($sel_mes_row = $sel_mes_res->fetch_assoc()){

      ?>
      <tr>
      
      <td><?php print $sel_mes_row["fullname"]; ?></td>
      <td><?php print $sel_mes_row["email"]; ?></td>
      <td><?php print $sel_mes_row ["phone"]; ?></td>
      <td><?php print $sel_mes_row["address"]; ?></td>
      <td><?php print date('d-M-Y H:i', strtotime($sel_mes_row["created_at"])); ?></td>
      <td><a href="update.php?id=<?php print $sel_mes_row["id"];?>" class="btn btn-success">Update</a></td>
      <td><a href="?DelId=<?php print $sel_mes_row ["id"];?>" onclick="return confirm('Are you sure you want to delete this message from the database permanently?');" class="btn btn-danger">Delete</a></td>
     
      </tr>
      <?php
    }
  }
  
  



  
  //SELECT DATA FROM MY TABLE

  
  ?>
   
  </tbody>
  <thead>
    <tr>
      <th >Fullname</th>
      <th >Email</th>
      <th >Phone</th>
      <th >Address</th>
      <th >Created At</th>
      <th >Operation</th>
    </tr>
  </thead>
</table>
    </div>
</body>
</html>