<?php
include_once("template/nav.php");
require_once("include/connect.php");
 
    

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
      <th scope="col">ID</th>
      <th scope="col">Fullname</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

  <?php
  
  //SELECT DATA FROM MY TABLE

  
// Check if the key 'id' exists in the array before accessing it


  $sql = "SELECT * FROM registration";
  $result = $conn->query($sql);
  if($result){
    
    while($row = mysqli_fetch_assoc($result)){

        
  $id=$row['$id'];
  $fullname=$row['fullname'];
  $email=$row['email'];
  $message=$row['message'];
  echo'
   <tr>
      <th scope="row">'.$id.'</th> 
      <td>'.$fullname.'</td>
      <td>'.$email.'</td>
      <td>'.$message.'</td>
      <td>
    <button class="btn btn-primary"><a href="update.php"class="text-light">Update</a></button>
   <button class="btn btn-danger"><a href="delete.php"class="text-light"> Delete</a></button>
    </td>
    </tr>
  
  ';


    }
}



  ?>
   
  </tbody>
</table>
    </div>
</body>
</html>